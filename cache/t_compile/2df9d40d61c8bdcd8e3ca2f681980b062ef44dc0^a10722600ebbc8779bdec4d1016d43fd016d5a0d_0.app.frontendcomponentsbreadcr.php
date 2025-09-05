<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:06:46
  from 'app:frontendcomponentsbreadcr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8c0602aa62_26637518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10722600ebbc8779bdec4d1016d43fd016d5a0d' => 
    array (
      0 => 'app:frontendcomponentsbreadcr',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba8c0602aa62_26637518 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="cmp_breadcrumbs" role="navigation" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbLabel"),$_smarty_tpl ) );?>
">
	<ol>
		<li>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.homepageNavigationLabel"),$_smarty_tpl ) );?>

			</a>
			<span class="separator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbSeparator"),$_smarty_tpl ) );?>
</span>
		</li>
		<li class="current">
			<h1>
				<?php if ($_smarty_tpl->tpl_vars['currentTitleKey']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['currentTitleKey']->value),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTitle']->value ));?>

				<?php }?>
			</h1>
		</li>
	</ol>
</nav>
<?php }
}
