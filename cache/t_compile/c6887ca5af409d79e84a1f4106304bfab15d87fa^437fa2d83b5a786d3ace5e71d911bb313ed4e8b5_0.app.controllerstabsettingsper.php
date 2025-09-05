<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:14:34
  from 'app:controllerstabsettingsper' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8dda27c042_45777566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437fa2d83b5a786d3ace5e71d911bb313ed4e8b5' => 
    array (
      0 => 'app:controllerstabsettingsper',
      1 => 1551386874,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:controllers/tab/settings/permissions/form/permissionSettingsForm.tpl' => 1,
  ),
),false)) {
function content_68ba8dda27c042_45777566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "additionalFormContent", null);?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionPolicies.authorSelfArchiveDescription",'list'=>true));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.authorSelfArchiveDescription",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableAuthorSelfArchive",'name'=>"enableAuthorSelfArchive",'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['enableAuthorSelfArchive']->value,'label'=>"manager.subscriptionPolicies.authorSelfArchive",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['scheduledTasksEnabled']->value,0 ))),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"authorSelfArchivePolicy",'value'=>$_smarty_tpl->tpl_vars['authorSelfArchivePolicy']->value,'rich'=>true,'multilingual'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.authorSelfArchiveDescription",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true,'title'=>"manager.setup.copyrightYearBasis"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true,'title'=>"manager.setup.copyrightYearBasis"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"copyrightYearBasis-issue",'name'=>"copyrightYearBasis",'value'=>"issue",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightYearBasis']->value,"issue" )),'label'=>"manager.setup.copyrightYearBasis.issue"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"copyrightYearBasis-submission",'name'=>"copyrightYearBasis",'value'=>"submission",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightYearBasis']->value,"submission" )),'label'=>"manager.setup.copyrightYearBasis.article"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true,'title'=>"manager.setup.copyrightYearBasis"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/permissions/form/permissionSettingsForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('additionalFormContent'=>$_smarty_tpl->tpl_vars['additionalFormContent']->value), 0, false);
}
}
