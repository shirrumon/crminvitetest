<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:55
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Edit/Field/MultiImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a644745d1e7_75025093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce19ec0637b39c18e4a8c51f6e86b1f733d85ba' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Edit/Field/MultiImage.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a644745d1e7_75025093 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-MultiImage --><?php $_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));?><div class="border rounded px-2 pt-2 clearfix c-multi-image js-multi-image"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_temp[]" type="file" class="d-none js-multi-image__file" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" data-js="jQuery-file-upload"data-url="file.php?module=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
&action=MultiImage&field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();
if ($_smarty_tpl->tpl_vars['RECORD']->value && !$_smarty_tpl->tpl_vars['RECORD']->value->isNew()) {?>&record=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();
}?>" multiple><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"data-validation-engine="validate[funcCall[Vtiger_MultiImage_Validator_Js.invokeValidation]]"  data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' class="js-multi-image__values"data-js="value" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
'<?php }?>><button type="button" class="align-top d-inline mb-2 mr-1 btn btn-sm btn-primary js-multi-image__file-btn" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" data-js="click"><i class="fa fa-plus"></i>&nbsp;<span><?php echo \App\Language::translate('BTN_ADD_FILE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><div class="d-inline js-multi-image__result" data-js="container" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"></div><div class="js-multi-image__progress progress d-none my-2" data-js="container|css:display"><div class="js-multi-image__progress-bar progress-bar progress-bar-striped progress-bar-animated" data-js="css:width" role="progressbar"></div></div></div><!-- /tpl-Base-Edit-Field-MultiImage -->
<?php }
}
