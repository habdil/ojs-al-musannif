<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:14:34
  from 'core:controllerstabsettingsper' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8dda2a4f97_31709635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fcace2bfe15421d08684c75966302ce2c6cc3cf' => 
    array (
      0 => 'core:controllerstabsettingsper',
      1 => 1551386984,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:controllers/tab/settings/wizardMode.tpl' => 1,
  ),
),false)) {
function content_68ba8dda2a4f97_31709635 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"distribution",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#permissionSettingsForm').pkpHandler(
			'$.pkp.controllers.tab.settings.permissions.form.PermissionSettingsFormHandler',
			{
				resetPermissionsUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"resetPermissions",'escape'=>false),$_smarty_tpl ) ));?>
,
				resetPermissionsConfirmText: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions.confirm"),$_smarty_tpl ) ));?>
,
			}
		);
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="permissionSettingsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.DistributionSettingsTabHandler",'op'=>"saveFormData",'tab'=>"permissions"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"permissionSettingsFormNotification"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/tab/settings/wizardMode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wizardMode'=>$_smarty_tpl->tpl_vars['wizardMode']->value), 0, false);
?>

	<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"permissionSettings"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"permissionSettings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.authorCopyrightNotice",'description'=>$_smarty_tpl->tpl_vars['authorCopyrightNoticeDescription']->value));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.authorCopyrightNotice",'description'=>$_smarty_tpl->tpl_vars['authorCopyrightNoticeDescription']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>true,'name'=>"copyrightNotice",'id'=>"copyrightNotice",'value'=>$_smarty_tpl->tpl_vars['copyrightNotice']->value,'rich'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.authorCopyrightNotice",'description'=>$_smarty_tpl->tpl_vars['authorCopyrightNoticeDescription']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"copyrightNoticeAgree",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['copyrightNoticeAgree']->value,'label'=>"manager.setup.authorCopyrightNoticeAgree"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


		<?php echo $_smarty_tpl->tpl_vars['additionalFormContent']->value;?>

	<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"permissionSettings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"copyrightHolderSettings",'title'=>"submission.copyrightHolder"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormArea(array('id'=>"copyrightHolderSettings",'title'=>"submission.copyrightHolder"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"copyrightHolderType-author",'name'=>"copyrightHolderType",'value'=>"author",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightHolderType']->value,"author" )),'label'=>"user.role.author"),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"copyrightHolderType-context",'name'=>"copyrightHolderType",'value'=>"context",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightHolderType']->value,"context" )),'label'=>"context.context"),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"copyrightHolderType-author",'name'=>"copyrightHolderType",'value'=>"other",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightHolderType']->value,"other" )),'label'=>"common.other"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"copyrightHolderOther",'name'=>"copyrightHolderOther",'value'=>$_smarty_tpl->tpl_vars['copyrightHolderOther']->value,'multilingual'=>true,'label'=>"common.other",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['copyrightHolderType']->value,"other",false,true ))),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormArea(array('id'=>"copyrightHolderSettings",'title'=>"submission.copyrightHolder"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"licenseSettings"));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"licenseSettings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.license"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"submission.license"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"licenseURLSelect",'from'=>$_smarty_tpl->tpl_vars['ccLicenseOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['licenseURL']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"licenseURL",'name'=>"licenseURL",'value'=>$_smarty_tpl->tpl_vars['licenseURL']->value,'label'=>"manager.setup.licenseURLDescription",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"submission.license"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"licenseSettings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if (!$_smarty_tpl->tpl_vars['wizardMode']->value) {?>
		<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.setup.resetPermissions"));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"manager.setup.resetPermissions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions.description"),$_smarty_tpl ) );?>
</p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"button",'id'=>"resetPermissionsButton",'label'=>"manager.setup.resetPermissions"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"manager.setup.resetPermissions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('class'=>"formButtons"));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormSection(array('class'=>"formButtons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->_assignInScope('buttonId', uniqid(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "submitFormButton","-" ))));?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"submit",'class'=>"submitFormButton",'id'=>$_smarty_tpl->tpl_vars['buttonId']->value,'label'=>"common.save"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormSection(array('class'=>"formButtons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
</form>
<?php }
}
