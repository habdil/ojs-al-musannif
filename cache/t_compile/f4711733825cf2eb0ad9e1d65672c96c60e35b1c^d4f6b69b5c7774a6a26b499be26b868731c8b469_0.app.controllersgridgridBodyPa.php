<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:00:36
  from 'app:controllersgridgridBodyPa' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8a94dffa90_32787195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f6b69b5c7774a6a26b499be26b868731c8b469' => 
    array (
      0 => 'app:controllersgridgridBodyPa',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba8a94dffa90_32787195 (Smarty_Internal_Template $_smarty_tpl) {
?><tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr></tr>
</tbody>

<?php }
}
