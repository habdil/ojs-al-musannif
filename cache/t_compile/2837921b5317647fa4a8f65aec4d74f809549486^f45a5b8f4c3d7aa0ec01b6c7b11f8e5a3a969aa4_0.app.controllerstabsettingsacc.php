<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:14:30
  from 'app:controllerstabsettingsacc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8dd6da7068_27293628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f45a5b8f4c3d7aa0ec01b6c7b11f8e5a3a969aa4' => 
    array (
      0 => 'app:controllerstabsettingsacc',
      1 => 1551386874,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_68ba8dd6da7068_27293628 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#accessForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="accessForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.DistributionSettingsTabHandler",'op'=>"saveFormData",'tab'=>"access"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"accessFormNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"userRegistration",'title'=>"manager.setup.onlineAccessManagement"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"userRegistration",'title'=>"manager.setup.onlineAccessManagement"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.securitySettingsDescription"),$_smarty_tpl ) );?>
</p>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"publishingMode-0",'name'=>"publishingMode",'value'=>@constant('PUBLISHING_MODE_OPEN'),'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['publishingMode']->value,@constant('PUBLISHING_MODE_OPEN') )),'label'=>"manager.setup.openAccess"),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"publishingMode-1",'name'=>"publishingMode",'value'=>@constant('PUBLISHING_MODE_SUBSCRIPTION'),'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['publishingMode']->value,@constant('PUBLISHING_MODE_SUBSCRIPTION') )),'label'=>"manager.setup.subscription"),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"publishingMode-2",'name'=>"publishingMode",'value'=>@constant('PUBLISHING_MODE_NONE'),'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['publishingMode']->value,@constant('PUBLISHING_MODE_NONE') )),'label'=>"manager.setup.noPublishing"),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableOai",'name'=>"enableOai",'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['enableOai']->value,'label'=>"manager.setup.enableOai"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"userRegistration",'title'=>"manager.setup.onlineAccessManagement"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
