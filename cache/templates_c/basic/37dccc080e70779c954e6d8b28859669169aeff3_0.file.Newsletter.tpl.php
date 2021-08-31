<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:25:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6382671a44_94541561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37dccc080e70779c954e6d8b28859669169aeff3' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Newsletter.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6382671a44_94541561 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-SystemWarnings-YetiForce-Newsletter -->
<h6 class="h3"><?php echo App\Language::translate('LBL_NEWSLETTER','Settings:SystemWarnings');?>
</h6><p><strong><?php echo App\Language::translate('LBL_NEWSLETTER_NO_COMPANY_DATA','Settings:SystemWarnings');?>
</strong></p><p><?php echo App\Language::translate('LBL_EMAIL_NEWSLETTER_INFO','Settings:Companies');?>
</p><form class="validateForm" method="post" action="index.php"><div class="float-right mr-2"><?php if (\App\Security\AdminAccess::isPermitted('Companies')) {?><a href="index.php?module=Companies&parent=Settings&view=List&displayModal=online" target="_blank" class="btn btn-success mr-1"><span class="fas fa-check mr-1"></span><?php echo App\Language::translate('LBL_COMPANY_DATA','Settings:SystemWarnings');?>
</a><?php }?><button type="button" class="btn btn-danger cancel"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div></form>
<!-- /tpl-Settings-SystemWarnings-YetiForce-Newsletter -->
<?php }
}
