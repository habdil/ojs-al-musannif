<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:18:13
  from 'app:controllerstabsettingsnav' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8eb50b0700_15678980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '791922159f0fbc8fe8670f8f8402f088f0b2cda4' => 
    array (
      0 => 'app:controllerstabsettingsnav',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_68ba8eb50b0700_15678980 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"website",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#navigationMenuSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form id="navigationMenuSettingsForm" class="pkp_form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.WebsiteSettingsTabHandler",'op'=>"saveFormData",'tab'=>"navigationMenus"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"navigationMenuSettingsFormNotification"), 0, false);
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'navigationMenusGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.navigationMenus.NavigationMenusGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"navigationMenuGridContainer",'url'=>$_smarty_tpl->tpl_vars['navigationMenusGridUrl']->value),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'navigationMenuItemsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.navigationMenus.NavigationMenuItemsGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"navigationMenuItemsGridContainer",'url'=>$_smarty_tpl->tpl_vars['navigationMenuItemsGridUrl']->value),$_smarty_tpl ) );?>


</form>
<?php }
}
