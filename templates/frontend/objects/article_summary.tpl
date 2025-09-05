{**
 * templates/frontend/objects/article_summary.tpl
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an Article summary which is shown within a list of articles.
 *
 * @uses $article Article The article
 * @uses $hasAccess bool Can this user access galleys for this context? The
 *       context may be an issue or an article
 * @uses $showDatePublished bool Show the date this article was published?
 * @uses $hideGalleys bool Hide the article galleys for this article?
 * @uses $primaryGenreIds array List of file genre ids for primary file types
 *}
{assign var=articlePath value=$article->getBestArticleId()}

{if (!$section.hideAuthor && $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_DEFAULT) || $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_SHOW}
	{assign var="showAuthor" value=true}
{/if}

<div class="obj_article_summary">
	{if $article->getLocalizedCoverImage()}
		<div class="cover">
			<a {if $journal}href="{url journal=$journal->getPath() page="article" op="view" path=$articlePath}"{else}href="{url page="article" op="view" path=$articlePath}"{/if} class="file">
				<img src="{$article->getLocalizedCoverImageUrl()|escape}"{if $article->getLocalizedCoverImageAltText() != ''} alt="{$article->getLocalizedCoverImageAltText()|escape}"{else} alt="{translate key="article.coverPage.altText"}"{/if}>
			</a>
		</div>
	{/if}

	<div class="title">
		<a {if $journal}href="{url journal=$journal->getPath() page="article" op="view" path=$articlePath}"{else}href="{url page="article" op="view" path=$articlePath}"{/if}>
			{$article->getLocalizedTitle()|strip_unsafe_html}
			{if $article->getLocalizedSubtitle()}
				<span class="subtitle">
					{$article->getLocalizedSubtitle()|escape}
				</span>
			{/if}
		</a>
	</div>

	{if $showAuthor || $article->getPages() || ($article->getDatePublished() && $showDatePublished)}
	<div class="meta">
		{assign var=count value=0}
        {foreach from=$article->getAuthors() item=author name=authorList}
		{assign var=fullname value=$author->getFullName()}
		{assign var="contact" value=$author->getData('primaryContact')}
		{assign var=count value=$count+1}
        {if $fullname||$count}{$fullname|escape}<sup>({if $contact eq 1}{$count|escape}*{else}{$count|escape}{/if})</sup> {/if}
   {/foreach}
         <br>
{assign var=count value=0}
    {foreach from=$article->getAuthors() item=author name=authorList}
            {assign var=authorAffiliation value=$author->getLocalizedAffiliation()}
		{assign var=count value=$count+1}
		{if $authorAffiliation||$count}<br />({$count|escape})&nbsp{$authorAffiliation|escape}, {$author->getCountryLocalized()|escape}{/if}
   {/foreach}
         <br> (*) Corresponding Author
         <br>
							
		{* Page numbers for this article *}
		{if $article->getPages()}
			<div class="pages">
				{$article->getPages()|escape}
			</div>
		{/if}

		{if $showDatePublished && $article->getDatePublished()}
			<div class="published">
				{$article->getDatePublished()|date_format:$dateFormatShort}
			</div>
		{/if}

	</div>
	{/if}

	{if !$hideGalleys}
		<ul class="galleys_links">
			{foreach from=$article->getGalleys() item=galley}
				{if $primaryGenreIds}
					{assign var="file" value=$galley->getFile()}
					{if !$galley->getRemoteUrl() && !($file && in_array($file->getGenreId(), $primaryGenreIds))}
						{continue}
					{/if}
				{/if}
				<li>
					{assign var="hasArticleAccess" value=$hasAccess}
					{if $currentContext->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_OPEN || $article->getAccessStatus() == $smarty.const.ARTICLE_ACCESS_OPEN}
						{assign var="hasArticleAccess" value=1}
					{/if}
					{include file="frontend/objects/galley_link.tpl" parent=$article hasAccess=$hasArticleAccess purchaseFee=$currentJournal->getSetting('purchaseArticleFee') purchaseCurrency=$currentJournal->getSetting('currency')}
				</li>
			{/foreach}
		</ul>
	{/if}

	{call_hook name="Templates::Issue::Issue::Article"}
	
{foreach from=$pubIdPlugins item=pubIdPlugin}
            {if $issue->getPublished()}
                    {assign var=pubId value=$article->getStoredPubId($pubIdPlugin->getPubIdType())}
                {else}
                    {assign var=pubId value=$pubIdPlugin->getPubId($article)}{* Preview pubId *}
            {/if}
            {if $pubId}
                {assign var="doiUrl" value=$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
                    {translate key="plugins.pubIds.doi.readerDisplayName"} :
                    <a href="{$doiUrl}">
                        {$doiUrl}
                    </a>
            {/if}
{/foreach}

</div>
