<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:04:19
  from 'app:frontendobjectsarticledet' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8b73cc0dd1_79934005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'addd65021fadf964339ab08cd1aa93ba59b14e9c' => 
    array (
      0 => 'app:frontendobjectsarticledet',
      1 => 1687861319,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 2,
  ),
),false)) {
function content_68ba8b73cc0dd1_79934005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/cognifer/ojs.cognifera.web.id/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<article class="obj_article_details">
	<h1 class="page_title">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
		<h2 class="subtitle">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

		</h2>
	<?php }?>

	<div class="row">
		<div class="main_entry">

			<?php if ($_smarty_tpl->tpl_vars['article']->value->getAuthors()) {?>
				<ul class="item authors">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
						<li>
							<span class="name">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

							</span>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
								<span class="affiliation">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
,
								</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getCountry()) {?>
								<span class="affiliation">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getCountryLocalized() ));?>

								</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getOrcid()) {?>
								<span class="orcid">
									<?php echo $_smarty_tpl->tpl_vars['orcidIcon']->value;?>

									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>
" target="_blank">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>

									</a>
								</span>
							<?php }?>
						</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			<?php }?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() != 'doi') {?>
					<?php continue 1;?>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
				<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
					<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
					<div class="item doi">
						<span class="label">
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedDOI', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.readerDisplayName"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['translatedDOI']->value),$_smarty_tpl ) );?>

						</span>
						<span class="value">
							<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						</span>
					</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
				<div class="item abstract">
					<h3 class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );?>
</h3>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ));?>

				</div>
			<?php }?>
			
						<?php if (!empty($_smarty_tpl->tpl_vars['keywords']->value[$_smarty_tpl->tpl_vars['currentLocale']->value])) {?>
			<div class="item keywords">
				<span class="label">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedKeywords', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.subject"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['translatedKeywords']->value),$_smarty_tpl ) );?>

				</span>
				<span class="value">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keywords']->value, 'keyword');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keyword']->value, 'keywordItem', false, NULL, 'keywords', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keywordItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['total'];
?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keywordItem']->value ));
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] : null)) {?>, <?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</span>
			</div>
			<?php }?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Main"),$_smarty_tpl ) );?>


						<?php $_smarty_tpl->_assignInScope('hasBiographies', 0);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
					<?php $_smarty_tpl->_assignInScope('hasBiographies', $_smarty_tpl->tpl_vars['hasBiographies']->value+1);?>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value) {?>
				<div class="item author_bios">
					<h3 class="label">
						<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value > 1) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiographies"),$_smarty_tpl ) );?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiography"),$_smarty_tpl ) );?>

						<?php }?>
					</h3>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
							<div class="sub_item">
								<div class="label">
									<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
										<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
										<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorAffiliation", null);?><span class="affiliation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorWithAffiliation",'name'=>$_smarty_tpl->tpl_vars['authorName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value),$_smarty_tpl ) );?>

									<?php } else { ?>
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

									<?php }?>
								</div>
								<div class="value">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography() ));?>

								</div>
							</div>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['parsedCitations']->value->getCount() || $_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
				<div class="item references">
					<h3 class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>

					</h3>
					<div class="value">
						<?php if ($_smarty_tpl->tpl_vars['parsedCitations']->value->getCount()) {?>
							<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'parsedCitations','item'=>'parsedCitation'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'parsedCitations','item'=>'parsedCitation'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['parsedCitation']->value->getCitationWithLinks() ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details::Reference",'citation'=>$_smarty_tpl->tpl_vars['parsedCitation']->value),$_smarty_tpl ) );?>
</p>
							<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'parsedCitations','item'=>'parsedCitation'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
							<?php echo nl2br($_smarty_tpl->tpl_vars['article']->value->getCitations());?>

						<?php }?>
					</div>
				</div>
			<?php }?>

		</div><!-- .main_entry -->

		<div class="entry_details">

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImage()) {?>
				<div class="item cover_image">
					<div class="sub_item">
						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
							<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
						<?php } else { ?>
							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
								<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
							</a>
						<?php }?>
					</div>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
				<div class="item galleys">
					<ul class="value galleys_links">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
							<li>
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
							</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
				<div class="item galleys">
					<ul class="value supplementary_galleys_links">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplementaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
							<li>
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'isSupplementary'=>"1"), 0, true);
?>
							</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
				<div class="item published">
					<div class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>

					</div>
					<div class="value">
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

					</div>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['citation']->value) {?>
				<div class="item citation">
					<div class="sub_item citation_display">
						<div class="label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite"),$_smarty_tpl ) );?>

						</div>
						<div class="value">
							<div id="citationOutput" role="region" aria-live="polite">
								<?php echo $_smarty_tpl->tpl_vars['citation']->value;?>

							</div>
							<div class="citation_formats">
								<button class="cmp_button citation_formats_button" aria-controls="cslCitationFormats" aria-expanded="false" data-csl-dropdown="true">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite.citationFormats"),$_smarty_tpl ) );?>

								</button>
								<div id="cslCitationFormats" class="citation_formats_list" aria-hidden="true">
									<ul class="citation_formats_styles">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationStyles']->value, 'citationStyle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['citationStyle']->value) {
?>
											<li>
												<a
													aria-controls="citationOutput"
													href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgs']->value),$_smarty_tpl ) );?>
"
													data-load-citation
													data-json-href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgsJson']->value),$_smarty_tpl ) );?>
"
												>
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['citationStyle']->value['title'] ));?>

												</a>
											</li>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
									<?php if (count($_smarty_tpl->tpl_vars['citationDownloads']->value)) {?>
										<div class="label">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite.downloadCitation"),$_smarty_tpl ) );?>

										</div>
										<ul class="citation_formats_styles">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationDownloads']->value, 'citationDownload');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['citationDownload']->value) {
?>
												<li>
													<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"download",'path'=>$_smarty_tpl->tpl_vars['citationDownload']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgs']->value),$_smarty_tpl ) );?>
">
														<span class="fa fa-download"></span>
														<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['citationDownload']->value['title'] ));?>

													</a>
												</li>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }?>

						<div class="item issue">
				<div class="sub_item">
					<div class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issue"),$_smarty_tpl ) );?>

					</div>
					<div class="value">
						<a class="title" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<?php echo $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification();?>

						</a>
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
					<div class="sub_item">
						<div class="label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.section"),$_smarty_tpl ) );?>

						</div>
						<div class="value">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>

						</div>
					</div>
				<?php }?>
			</div>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() == 'doi') {?>
					<?php continue 1;?>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
				<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
					<div class="item pubid">
						<div class="label">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() ));?>

						</div>
						<div class="value">
							<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ))) {?>
								<a id="pub-id::<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() ));?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ));?>
">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ));?>

								</a>
							<?php } else { ?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubId']->value ));?>

							<?php }?>
						</div>
					</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php if ($_smarty_tpl->tpl_vars['copyright']->value || $_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
				<div class="item copyright">
					<?php if ($_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['ccLicenseBadge']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['copyrightHolder']->value) {?>
								<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightHolder'=>$_smarty_tpl->tpl_vars['copyrightHolder']->value,'copyrightYear'=>$_smarty_tpl->tpl_vars['copyrightYear']->value),$_smarty_tpl ) );?>
</p>
							<?php }?>
							<?php echo $_smarty_tpl->tpl_vars['ccLicenseBadge']->value;?>

						<?php } else { ?>
							<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['licenseUrl']->value ));?>
" class="copyright">
								<?php if ($_smarty_tpl->tpl_vars['copyrightHolder']->value) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightHolder'=>$_smarty_tpl->tpl_vars['copyrightHolder']->value,'copyrightYear'=>$_smarty_tpl->tpl_vars['copyrightYear']->value),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>

								<?php }?>
							</a>
						<?php }?>
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

				</div>
			<?php }?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details"),$_smarty_tpl ) );?>


		</div><!-- .entry_details -->
	</div><!-- .row -->

</article>
<?php }
}
