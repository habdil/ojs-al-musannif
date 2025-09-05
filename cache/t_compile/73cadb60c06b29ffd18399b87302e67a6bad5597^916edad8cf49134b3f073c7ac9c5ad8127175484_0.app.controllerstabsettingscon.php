<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:14:29
  from 'app:controllerstabsettingscon' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8dd5673300_05254645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '916edad8cf49134b3f073c7ac9c5ad8127175484' => 
    array (
      0 => 'app:controllerstabsettingscon',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:controllers/tab/settings/wizardMode.tpl' => 1,
  ),
),false)) {
function content_68ba8dd5673300_05254645 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"distribution",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#contextIndexingForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="contextIndexingForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.DistributionSettingsTabHandler",'op'=>"saveFormData",'tab'=>"indexing"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"contextIndexingFormNotification"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/tab/settings/wizardMode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wizardMode'=>$_smarty_tpl->tpl_vars['wizardMode']->value), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"searchEngineIndexing"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"searchEngineIndexing"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.description",'description'=>"manager.setup.searchEngineIndexingDescription",'label'=>"manager.setup.searchEngineIndexing"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.description",'description'=>"manager.setup.searchEngineIndexingDescription",'label'=>"manager.setup.searchEngineIndexing"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>"true",'id'=>"searchDescription",'name'=>"searchDescription",'value'=>$_smarty_tpl->tpl_vars['searchDescription']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.description",'description'=>"manager.setup.searchEngineIndexingDescription",'label'=>"manager.setup.searchEngineIndexing"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.customTags",'description'=>"manager.setup.customTagsDescription"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.setup.customTags",'description'=>"manager.setup.customTagsDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>"true",'id'=>"customHeaders",'name'=>"customHeaders",'value'=>$_smarty_tpl->tpl_vars['customHeaders']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.setup.customTags",'description'=>"manager.setup.customTagsDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.searchEngineIndexing.sitemap"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.searchEngineIndexing.sitemap"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'sitemapPath', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"sitemap"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<div class="description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.searchEngineIndexing.sitemapDescription",'path'=>$_smarty_tpl->tpl_vars['sitemapPath']->value),$_smarty_tpl ) );?>
</div>
		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.searchEngineIndexing.sitemap"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"searchEngineIndexing"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if (!$_smarty_tpl->tpl_vars['wizardMode']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"contextIndexingFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php }
}
