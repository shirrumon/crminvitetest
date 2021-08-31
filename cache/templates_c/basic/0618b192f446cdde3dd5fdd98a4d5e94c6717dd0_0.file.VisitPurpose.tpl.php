<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:48
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Users/VisitPurpose.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5360b72bd4_57526348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0618b192f446cdde3dd5fdd98a4d5e94c6717dd0' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Users/VisitPurpose.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a5360b72bd4_57526348 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-VisitPurpose --><form name="VisitPurpose" class="form-horizontal validateForm"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"/><input type="hidden" name="action" value="VisitPurpose"/><div class="modal-body"><div class="row"><div class="col-md-12"><textarea id="visitPurpose" maxlength="501" class="" name="visitPurpose" data-validation-engine="validate[required,maxSize[500]]"></textarea></div></div><?php if (!$_smarty_tpl->tpl_vars['CURRENT_USER']->value->isSuperUser()) {?><div class="alert alert-primary" role="alert"><span class="mdi mdi-information-outline u-fs-4x mr-2 float-left"></span><?php echo \App\Language::translate("LBL_VISIT_PURPOSE_ALERT");?>
</div><?php }
if (\App\Security\AdminAccess::isPermitted('AdminAccess')) {?><a href="index.php?parent=Settings&module=AdminAccess&view=Index&tab=visitPurpose" class="btn btn-primary mr-2"><span class="ayfi yfi-admin-access mr-2"></span><?php echo App\Language::translate('LBL_ADMIN_ACCESS','Settings::AdminAccess');?>
 > <?php echo App\Language::translate('LBL_HISTORY_ADMINS_VISIT_PURPOSE','Settings::AdminAccess');?>
</a><?php }?></div></form><!-- /tpl-Users-VisitPurpose -->
<?php }
}
