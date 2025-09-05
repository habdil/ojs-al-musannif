{**
 * templates/frontend/objects/article_summary.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an Article summary which is shown within a list of articles.
 *
 * @uses $article Article The article
 * @uses $hasAccess bool Can this user access galleys for this context? The
 *       context may be an issue or an article
 * @uses $showGalleyLinks bool Show galley links to users without access?
 * @uses $hideGalleys bool Hide the article galleys for this article?
 * @uses $primaryGenreIds array List of file genre ids for primary file types
 *}
 {assign var=smarty_version value=$smarty.version|substr:0:1}
{assign var=articlePath value=$article->getBestArticleId($currentJournal)}
{if (!$section.hideAuthor && $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_DEFAULT) || $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_SHOW}
	{assign var="showAuthor" value=true}
{/if}

<div class="article-summary media">
	{if $article->getLocalizedCoverImage()}
		<div class="cover media-left">
			<a href="{url page="article" op="view" path=$articlePath}" class="file">
				<img class="media-object" src="{$article->getLocalizedCoverImageUrl()|escape}">
			</a>
		</div>
	{/if}

	<div class="media-body">
		<h3 class="media-heading">
			<a href="{url page="article" op="view" path=$articlePath}">
				{$article->getLocalizedTitle()|strip_unsafe_html}
				{if $article->getLocalizedSubtitle()}
					<p>
						<small>{$article->getLocalizedSubtitle()|escape}</small>
					</p>
				{/if}
			</a>
		</h3>

		{if $showAuthor || $article->getPages()}

			{if $showAuthor}
				<div class="meta">
					{if $showAuthor}
						<div class="authors">
							{$article->getAuthorString()}
						</div>
					{/if}
				</div>
			{/if}

			{* Page numbers for this article *}
			{if $article->getPages()}
				<p class="pages">
					{$article->getPages()|escape}
				</p>
			{/if}

		{/if}

		{if !$hideGalleys && $article->getGalleys()}
			<div class="btn-group" role="group">
				{* make compatible with ojs 3.1.2 *}
				{if $smarty_version == '2'} 
					{include file="legacy/article_summary_galley_3.1.1.tpl"}
				{else}
					Full Text: {include file="legacy/article_summary_galley_3.1.2.tpl"}
				{/if}
				{* end compatible check *}
			</div>
		{/if}
	</div>

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
</div><!-- .article-summary -->
