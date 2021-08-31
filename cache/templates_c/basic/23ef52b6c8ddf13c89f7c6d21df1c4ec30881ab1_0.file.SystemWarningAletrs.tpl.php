<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:25:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/DashBoard/SystemWarningAletrs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6382610341_29142201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23ef52b6c8ddf13c89f7c6d21df1c4ec30881ab1' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/DashBoard/SystemWarningAletrs.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6382610341_29142201 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Base-DashBoard-SystemWarningAletrs" id="systemWarningAletrs"><div class="modal fade static"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="yfi yfi-system-warnings mr-1"></span><?php echo App\Language::translate('LBL_SYSTEM_WARNINGS','Settings:Vtiger');?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="warnings"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WARNINGS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><div class="warning d-none clearfix" data-id="<?php echo get_class($_smarty_tpl->tpl_vars['ITEM']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['ITEM']->value->getTpl()) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['ITEM']->value->getTpl(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?><h3 class="marginTB3"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value->getTitle(),'Settings:SystemWarnings');?>
</h3><p><?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getDescription();?>
</p><div class="float-right"><?php if ($_smarty_tpl->tpl_vars['ITEM']->value->getStatus() != 1 && $_smarty_tpl->tpl_vars['ITEM']->value->getPriority() < 8) {?><button class="btn btn-warning ajaxBtn" type="button" data-params="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getStatus();?>
"><span class="fas fa-minus-circle mr-1"></span><?php echo App\Language::translate('BTN_SET_IGNORE','Settings:SystemWarnings');?>
</button><?php }
if ($_smarty_tpl->tpl_vars['ITEM']->value->getLink()) {?><a class="btn btn-success ml-1" href="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getLink();?>
" target="_blank" rel="noreferrer noopener"><span class="fas fa-link mr-1"></span><?php echo $_smarty_tpl->tpl_vars['ITEM']->value->linkTitle;?>
</a><?php }?><button class="btn btn-danger cancel ml-1" type="button"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div></div></div>
<?php }
}
