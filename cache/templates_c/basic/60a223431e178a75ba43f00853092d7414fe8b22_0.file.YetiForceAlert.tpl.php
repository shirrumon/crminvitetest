<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:41
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Users/Modals/YetiForceAlert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5359476b12_48857443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a223431e178a75ba43f00853092d7414fe8b22' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Users/Modals/YetiForceAlert.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a5359476b12_48857443 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Modals-RegistrationAlert --><div class="modal-body pb-3"><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'registration') {?><div class="alert alert-danger"><span class="yfi yfi-yeti-register-alert color-red-600 u-fs-5x mr-4 float-left"></span><h3 class="alert-heading"><?php echo \App\Language::translate('LBL_SYSTEM_NOT_REGISTERED','Settings::Companies');?>
</h3></div><?php if (\App\Security\AdminAccess::isPermitted('Companies')) {?><a href="index.php?module=Companies&parent=Settings&view=List&displayModal=online" target="_blank" class="btn btn-success mr-1 float-right"><span class="adminIcon-company-detlis mr-2"></span><?php echo App\Language::translate('LBL_COMPANY_DATA','Settings:SystemWarnings');?>
</a><?php }
} else { ?><div class="alert alert-danger"><span class="yfi yfi-shop-alert text-warning u-fs-5x mr-4 float-left"></span><h3 class="alert-heading"><?php echo \App\Language::translateArgs('LBL_PAID_FN_NO_SUBSCRIPTION','Settings::Companies',$_smarty_tpl->tpl_vars['PRODUCTS']->value);?>
</h3></div><?php if (\App\Security\AdminAccess::isPermitted('YetiForce')) {?><a href="index.php?module=YetiForce&parent=Settings&view=Shop" target="_blank" class="btn btn-success mr-1 float-right"><span class="yfi yfi-shop mr-2"></span><?php echo App\Language::translate('LBL_YETIFORCE_SHOP');?>
</a><?php }
}?><div class="clearfix"></div><div class="mt-3"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated js-progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" data-js="container"><span class="sr-only"></span></div></div></div></div><!-- /tpl-Users-Modals-RegistrationAlert -->
<?php }
}
