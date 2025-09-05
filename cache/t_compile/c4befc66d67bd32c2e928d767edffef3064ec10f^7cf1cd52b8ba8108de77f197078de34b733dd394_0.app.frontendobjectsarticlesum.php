<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:13:04
  from 'app:frontendobjectsarticlesum' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8d80a2f777_43324283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf1cd52b8ba8108de77f197078de34b733dd394' => 
    array (
      0 => 'app:frontendobjectsarticlesum',
      1 => 1687861095,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_68ba8d80a2f777_43324283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/cognifer/ojs.cognifera.web.id/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestArticleId());?>

<?php if ((!$_smarty_tpl->tpl_vars['section']->value['hideAuthor'] && $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == @constant('AUTHOR_TOC_DEFAULT')) || $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == @constant('AUTHOR_TOC_SHOW')) {?>
	<?php $_smarty_tpl->_assignInScope('showAuthor', true);
}?>

<div class="obj_article_summary">
	<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
		<div class="cover">
			<a <?php if ($_smarty_tpl->tpl_vars['journal']->value) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php } else { ?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php }?> class="file">
				<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() != '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() ));?>
"<?php } else { ?> alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.coverPage.altText"),$_smarty_tpl ) );?>
"<?php }?>>
			</a>
		</div>
	<?php }?>

	<div class="title">
		<a <?php if ($_smarty_tpl->tpl_vars['journal']->value) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php } else { ?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php }?>>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

			<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
				<span class="subtitle">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

				</span>
			<?php }?>
		</a>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value || $_smarty_tpl->tpl_vars['article']->value->getPages() || ($_smarty_tpl->tpl_vars['article']->value->getDatePublished() && $_smarty_tpl->tpl_vars['showDatePublished']->value)) {?>
	<div class="meta">
		<?php $_smarty_tpl->_assignInScope('count', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author', false, NULL, 'authorList', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('fullname', $_smarty_tpl->tpl_vars['author']->value->getFullName());?>
		<?php $_smarty_tpl->_assignInScope('contact', $_smarty_tpl->tpl_vars['author']->value->getData('primaryContact'));?>
		<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
        <?php if ($_smarty_tpl->tpl_vars['fullname']->value || $_smarty_tpl->tpl_vars['count']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fullname']->value ));?>
<sup>(<?php if ($_smarty_tpl->tpl_vars['contact']->value == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['count']->value ));?>
*<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['count']->value ));
}?>)</sup> <?php }?>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <br>
<?php $_smarty_tpl->_assignInScope('count', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author', false, NULL, 'authorList', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('authorAffiliation', $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation());?>
		<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
		<?php if ($_smarty_tpl->tpl_vars['authorAffiliation']->value || $_smarty_tpl->tpl_vars['count']->value) {?><br />(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['count']->value ));?>
)&nbsp<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorAffiliation']->value ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getCountryLocalized() ));
}?>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <br> (*) Corresponding Author
         <br>
							
				<?php if ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
			<div class="pages">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>

			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['showDatePublished']->value && $_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
			<div class="published">
				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

			</div>
		<?php }?>

	</div>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value) {?>
		<ul class="galleys_links">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['primaryGenreIds']->value) {?>
					<?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['galley']->value->getFile());?>
					<?php if (!$_smarty_tpl->tpl_vars['galley']->value->getRemoteUrl() && !($_smarty_tpl->tpl_vars['file']->value && in_array($_smarty_tpl->tpl_vars['file']->value->getGenreId(),$_smarty_tpl->tpl_vars['primaryGenreIds']->value))) {?>
						<?php continue 1;?>
					<?php }?>
				<?php }?>
				<li>
					<?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
					<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getSetting('publishingMode') == @constant('PUBLISHING_MODE_OPEN') || $_smarty_tpl->tpl_vars['article']->value->getAccessStatus() == @constant('ARTICLE_ACCESS_OPEN')) {?>
						<?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'hasAccess'=>$_smarty_tpl->tpl_vars['hasArticleAccess']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Issue::Issue::Article"),$_smarty_tpl ) );?>

	
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
                    <?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['article']->value));?>            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
                <?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.readerDisplayName"),$_smarty_tpl ) );?>
 :
                    <a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

                    </a>
            <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<?php }
}
