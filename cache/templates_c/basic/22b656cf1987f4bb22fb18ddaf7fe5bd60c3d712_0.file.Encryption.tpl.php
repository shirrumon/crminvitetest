<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:25:47
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Password/Encryption.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a638b8fae77_63297422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b656cf1987f4bb22fb18ddaf7fe5bd60c3d712' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Password/Encryption.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a638b8fae77_63297422 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Password-Encryption --><div class="verticalScroll"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="encryptionContainer mt-3"><div class="alert alert-info alert-dismissible fade show" role="alert"><span class="mdi mdi-information-outline mr-2 u-fs-44px float-left"></span><?php echo App\Language::translate('LBL_ENCRYPT_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div><?php if (!$_smarty_tpl->tpl_vars['ENCRYPT']->value->isActive()) {?><div class="alert alert-danger alert-dismissible fade show" role="alert"><span class="mdi mdi-alert mr-2 u-fs-lg float-left"></span><?php echo App\Language::translate('LBL_ENCRYPT_IS_NOT_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['CRON_TASK']->value->isDisabled()) {?><div class="alert alert-danger alert-dismissible fade show" role="alert"><span class="mdi mdi-alert mr-2 u-fs-lg float-left"></span><?php echo App\Language::translate('LBL_ENCRYPTION_CRON_BATCH_METHODS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['IS_RUN_ENCRYPT']->value == 1) {?><div class="alert alert-info alert-dismissible fade show" role="alert"><span class="mdi mdi-progress-clock mr-2 u-fs-lg float-left"></span><?php echo App\Language::translate('LBL_ENCRYPTION_WAITING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="float-right"><?php if ($_smarty_tpl->tpl_vars['CRON_TASK']->value->getLastStartDateTime()) {
echo App\Language::translate('LBL_CRON_TASK_LAST_START','Settings:CronTasks');?>
: <?php echo $_smarty_tpl->tpl_vars['CRON_TASK']->value->getLastStartDateTime();
}?></span></div><?php } elseif ($_smarty_tpl->tpl_vars['IS_RUN_ENCRYPT']->value == 2) {?><div class="alert alert-info alert-dismissible fade show" role="alert"><span class="mdi mdi-progress-wrench mr-2 u-fs-lg float-left"></span><?php echo App\Language::translate('LBL_ENCRYPTION_RUN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }?><input type="hidden" name="lengthVectors" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['MAP_LENGTH_VECTORS_METHODS']->value));?>
"><form class="formEncryption"><input type="hidden" name="parent" value="Settings"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><input type="hidden" name="action" value="Save"><input type="hidden" name="mode" value="encryption"><table class="table table-bordered table-sm themeTableColor"><thead><tr class="blockHeader"><th colspan="2" class="mediumWidthType"><span class="fas fa-key mr-2"></span><?php echo \App\Language::translate('LBL_ENCRYPTION_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_METHOD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="border-left-0"><div class="form-row px-3"><div class="col-5 px-0"><select name="methods" class="select2" data-placeholder="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-select="allowClear"><optgroup class="p-0"><option value=""><?php echo App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup><optgroup label="<?php echo \App\Language::translate('LBL_RECOMENDED_METHODS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECOMENDED_METHODS']->value, 'METHOD');
$_smarty_tpl->tpl_vars['METHOD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['METHOD']->value) {
$_smarty_tpl->tpl_vars['METHOD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ENCRYPT']->value->get('method') === $_smarty_tpl->tpl_vars['METHOD']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><optgroup label="<?php echo \App\Language::translate('LBL_OTHER_METHODS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVAILABLE_METHODS']->value, 'METHOD');
$_smarty_tpl->tpl_vars['METHOD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['METHOD']->value) {
$_smarty_tpl->tpl_vars['METHOD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ENCRYPT']->value->get('method') === $_smarty_tpl->tpl_vars['METHOD']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div></div></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_ENCRYPTION_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="border-left-0"><div class="form-row px-3"><div class="col-5 px-0"><div class="input-group "><input type="password" name="password" id="password" class="form-control"<?php echo ' ';?>
data-validation-engine="validate[required,minSize[8],maxSize[64]]" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ENCRYPT']->value->get('pass'));?>
"><span class="input-group-append"><button class="btn btn-outline-secondary previewPassword" type="button" data-id="password"><span class="fas fa-eye"></span></button></span></div></div></div></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_ENCRYPTION_VECTOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="border-left-0"><div class="form-row px-3"><div class="col-5 px-0"><div class="input-group "><input type="password" name="vector" id="vector" class="form-control"<?php echo ' ';
if (!$_smarty_tpl->tpl_vars['ENCRYPT']->value->isEmpty('method') && $_smarty_tpl->tpl_vars['MAP_LENGTH_VECTORS_METHODS']->value[$_smarty_tpl->tpl_vars['ENCRYPT']->value->get('method')] === 0) {?>disabled="disabled"<?php }
echo ' ';?>
data-validation-engine="<?php if ($_smarty_tpl->tpl_vars['ENCRYPT']->value->isEmpty('method')) {?>validate[required]<?php } else { ?>validate[required,maxSize[<?php echo $_smarty_tpl->tpl_vars['MAP_LENGTH_VECTORS_METHODS']->value[$_smarty_tpl->tpl_vars['ENCRYPT']->value->get('method')];?>
],minSize[<?php echo $_smarty_tpl->tpl_vars['MAP_LENGTH_VECTORS_METHODS']->value[$_smarty_tpl->tpl_vars['ENCRYPT']->value->get('method')];?>
]]<?php }?>"<?php echo ' ';?>
value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ENCRYPT']->value->get('vector'));?>
"><span class="input-group-append"><button class="btn btn-outline-secondary previewPassword" type="button" data-id="vector"><span class="fas fa-eye"></span></button></span></div></div><div class="js-password-alert alert alert-info show mb-0 ml-4 py-1 float-right d-none" role="alert" data-js="container|class:d-none"><span class="mdi mdi-alert mr-2"></span><?php echo \App\Language::translateArgs('LBL_PASSWORD_LENGTH_IS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,"<span class='js-password-length' data-js='text'></span>");?>
</div></div></td></tr></tbody></table><div class="c-form__action-panel"><button type="submit" class="btn btn-success"><span class="fas fa-check mr-2"></span><strong><?php echo App\Language::translate('LBL_SAVE');?>
</strong></button></div></form></div></div><!-- /tpl-Settings-Password-Encryption -->
<?php }
}
