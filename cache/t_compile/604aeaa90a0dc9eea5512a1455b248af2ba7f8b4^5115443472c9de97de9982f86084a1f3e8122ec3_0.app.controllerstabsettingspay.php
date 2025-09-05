<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:14:31
  from 'app:controllerstabsettingspay' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8dd78fc967_29920323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5115443472c9de97de9982f86084a1f3e8122ec3' => 
    array (
      0 => 'app:controllerstabsettingspay',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:controllers/tab/settings/wizardMode.tpl' => 1,
  ),
),false)) {
function content_68ba8dd78fc967_29920323 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"distribution",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#paymentMethodContainerDiv').pkpHandler(
			'$.pkp.controllers.tab.settings.paymentMethod.PaymentMethodHandler',
			{
				paymentMethodFormUrlTemplate: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"getPaymentFormContents",'paymentPluginName'=>'PAYMENT_PLUGIN_NAME','escape'=>false),$_smarty_tpl ) ));?>

			}
		);
		// Attach the container handler. (Triggers e.g. selectMonograph event.)
		$('#paymentMethodSelector').pkpHandler(
			'$.pkp.controllers.form.DropdownHandler',
			{
				getOptionsUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"getPaymentMethods",'escape'=>false),$_smarty_tpl ) ));?>
,
				defaultKey: <?php echo json_encode($_smarty_tpl->tpl_vars['paymentPluginName']->value);?>
,
				eventName: 'selectPaymentMethod'
			}
		);
		// Attach the AJAX form handler to the actual payment method config form.
		$('#paymentMethodForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<div id="paymentMethodContainerDiv">
	<form class="pkp_form" id="paymentMethodForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.DistributionSettingsTabHandler",'op'=>"saveFormData",'tab'=>"paymentMethod"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<input type="hidden" name="paymentPluginName" id="paymentPluginName" />
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"paymentMethodFormNotification"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/tab/settings/wizardMode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wizardMode'=>$_smarty_tpl->tpl_vars['wizardMode']->value), 0, false);
?>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"paymentMethod"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"paymentMethod"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.payment.generalOptions",'list'=>true));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.payment.generalOptions",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"paymentsEnabled",'id'=>"paymentsEnabled",'checked'=>$_smarty_tpl->tpl_vars['paymentsEnabled']->value,'label'=>"manager.payment.options.enablePayments",'value'=>"1"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.payment.generalOptions",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.paymentMethod.currency",'description'=>"manager.paymentMethod.currency.description"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.paymentMethod.currency",'description'=>"manager.paymentMethod.currency.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('required'=>"true",'type'=>"select",'id'=>"currency",'from'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected'=>$_smarty_tpl->tpl_vars['currency']->value,'translate'=>false),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.paymentMethod.currency",'description'=>"manager.paymentMethod.currency.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<div id="paymentMethodSelector">
				<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.paymentMethod.method"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.paymentMethod.method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"pluginSelect",'from'=>$_smarty_tpl->tpl_vars['pluginNames']->value,'translate'=>false),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.paymentMethod.method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"paymentMethod"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"paymentMethodFormContainer"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"paymentMethodFormContainer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"paymentMethodFormContainer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<div class="separator"></div>

	<?php if (!$_smarty_tpl->tpl_vars['wizardMode']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"paymentFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

	<?php }?>
	</form>
	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
</div>
<?php }
}
