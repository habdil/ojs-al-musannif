<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:13:55
  from 'plugins-plugins-generic-staticPages-generic-staticPages:staticPages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8db310b194_65770931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e14bc6d295e74a81d5e9e7acc9e81232541d3d40' => 
    array (
      0 => 'plugins-plugins-generic-staticPages-generic-staticPages:staticPages.tpl',
      1 => 1551387008,
      2 => 'plugins-plugins-generic-staticPages-generic-staticPages',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba8db310b194_65770931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'staticPageGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"plugins.generic.staticPages.controllers.grid.StaticPageGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"staticPageGridContainer",'url'=>$_smarty_tpl->tpl_vars['staticPageGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
