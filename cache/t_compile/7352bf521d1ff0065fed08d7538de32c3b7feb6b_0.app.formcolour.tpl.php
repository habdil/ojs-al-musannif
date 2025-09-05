<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:04:49
  from 'app:formcolour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8b9152e151_94046647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7352bf521d1ff0065fed08d7538de32c3b7feb6b' => 
    array (
      0 => 'app:formcolour.tpl',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba8b9152e151_94046647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('uniqId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "-",$_smarty_tpl->tpl_vars['FBV_uniqId']->value )) )));?>
<div<?php if ($_smarty_tpl->tpl_vars['FBV_layoutInfo']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['FBV_layoutInfo']->value;?>
"<?php }?>>
	<input type="color"
		<?php echo $_smarty_tpl->tpl_vars['FBV_colorParams']->value;?>

		class="field color<?php if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));
}
if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?> <?php echo $_smarty_tpl->tpl_vars['FBV_validation']->value;
}?>"
		<?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_readonly']->value) {?> readonly="readonly"<?php }?>
		name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));?>
"
		value="<?php if ($_smarty_tpl->tpl_vars['FBV_value']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_value']->value ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_default']->value ));
}?>"
		id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"
		<?php if ($_smarty_tpl->tpl_vars['FBV_tabIndex']->value) {?> tabindex="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_tabIndex']->value ));?>
"<?php }?>
	/>
	<span><?php echo $_smarty_tpl->tpl_vars['FBV_label_content']->value;?>
</span>
</div>
<?php }
}
