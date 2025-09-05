<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:04:19
  from 'plugins-plugins-generic-usageStats-generic-usageStats:outputFrontend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8b73cf0353_14131112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27c34ac8f71994b6dc154e03747f040fb4d7bcbe' => 
    array (
      0 => 'plugins-plugins-generic-usageStats-generic-usageStats:outputFrontend.tpl',
      1 => 1551387012,
      2 => 'plugins-plugins-generic-usageStats-generic-usageStats',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba8b73cf0353_14131112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="item downloads_chart">
	<h3 class="label">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.usageStats.downloads"),$_smarty_tpl ) );?>

	</h3>
	<div class="value">
		<canvas class="usageStatsGraph" data-object-type="<?php echo $_smarty_tpl->tpl_vars['pubObjectType']->value;?>
" data-object-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubObjectId']->value ));?>
"></canvas>
		<div class="usageStatsUnavailable" data-object-type="<?php echo $_smarty_tpl->tpl_vars['pubObjectType']->value;?>
" data-object-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubObjectId']->value ));?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.usageStats.noStats"),$_smarty_tpl ) );?>

		</div>
	</div>
</div>
<?php }
}
