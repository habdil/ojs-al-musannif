<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:06:26
  from 'app:controllerstabsettingsfor' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8bf25fdc13_18050982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a33c991d0f6935883ab2dab4b97bcaa5ca9b7e02' => 
    array (
      0 => 'app:controllerstabsettingsfor',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/fileUploadContainer.tpl' => 1,
  ),
),false)) {
function content_68ba8bf25fdc13_18050982 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the file upload form handler.
	$(function() {
		$('#uploadForm').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				$uploader: $('#plupload'),
				uploaderOptions: {
					uploadUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"uploadFile",'fileSettingName'=>$_smarty_tpl->tpl_vars['fileSettingName']->value,'fileType'=>$_smarty_tpl->tpl_vars['fileType']->value,'escape'=>false),$_smarty_tpl ) ));?>
,
					baseUrl: <?php echo json_encode($_smarty_tpl->tpl_vars['baseUrl']->value);?>
,
					filters: {
						mime_types : [
							{ title : "Image files", extensions : "jpg,jpeg,png,svg,gif" }
						]
					}
				}
			}
		);
	});
<?php echo '</script'; ?>
>

<form id="uploadForm" class="pkp_form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"saveFile",'fileSettingName'=>$_smarty_tpl->tpl_vars['fileSettingName']->value,'fileType'=>$_smarty_tpl->tpl_vars['fileType']->value),$_smarty_tpl ) );?>
" method="post">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"file"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"file"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.file"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.file"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/fileUploadContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"plupload"), 0, false);
?>
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"extraFileData"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"extraFileData"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.altText"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"common.altText"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"common.altTextInstructions",'multilingual'=>true,'id'=>"imageAltText",'value'=>$_smarty_tpl->tpl_vars['imageAltText']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"common.altText"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"extraFileData"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

</form>
<?php }
}
