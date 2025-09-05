<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:04:49
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8b91542957_93694582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b5df6703111ba9c9a44a36da4652e95fa7ac68' => 
    array (
      0 => 'core:controllerstabsettingsapp',
      1 => 1551386984,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba8b91542957_93694582 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isSiteSidebar']->value) {?>
    <?php $_smarty_tpl->_assignInScope('component', "listbuilder.admin.siteSetup.AdminBlockPluginsListbuilderHandler");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('component', "listbuilder.settings.BlockPluginsListbuilderHandler");
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'blockPluginsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>$_smarty_tpl->tpl_vars['component']->value,'op'=>"fetch",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"blockPluginsContainer",'url'=>$_smarty_tpl->tpl_vars['blockPluginsUrl']->value),$_smarty_tpl ) );?>

<?php }
}
