<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:37:27
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/DetailViewHeaderTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a7457d266a2_53006638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '662e7dcda9fa40ea59f2fed49578ad22c79b5456' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/DetailViewHeaderTitle.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a7457d266a2_53006638 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-DetailViewHeaderTitle --><div class="d-flex flex-wrap flex-md-nowrap px-md-3 px-1 w-100"><div class="u-min-w-md-70 w-100"><?php $_smarty_tpl->_assignInScope('COUNT_IN_HIERARCHY', App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'COUNT_IN_HIERARCHY'));?><div class="moduleIcon<?php if ($_smarty_tpl->tpl_vars['COUNT_IN_HIERARCHY']->value) {?> mt-3<?php }?>"><span class="o-detail__icon js-detail__icon yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
if ($_smarty_tpl->tpl_vars['COUNT_IN_HIERARCHY']->value) {?> u-cursor-pointer js-detail-hierarchy<?php }?>"></span><?php if ($_smarty_tpl->tpl_vars['COUNT_IN_HIERARCHY']->value) {?><span class="hierarchy"><span class="badge <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('active')) {?> bgGreen <?php } else { ?> bgOrange <?php }?>"></span></span><?php }?></div><div class="pl-1"><div class="d-flex flex-nowrap align-items-center js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getName());?>
" data-toggle="popover" data-js="popover | mouseenter"><h4 class="recordLabel h6 mb-0 js-popover-text" data-js="clone"><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo \App\Utils\Completions::decode(Vtiger_Util_Helper::toVtiger6SafeHTML(\App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getName())));?>
</span></h4><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span><?php $_smarty_tpl->_assignInScope('RECORD_STATE', \App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()));
if ($_smarty_tpl->tpl_vars['RECORD_STATE']->value !== 'Active') {
$_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><span class="badge badge-secondary"<?php if ($_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value]) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value];?>
;"<?php }?>><?php if (\App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()) === 'Trash') {
echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');
} else {
echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');
}?></span><?php }?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderValues.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="ml-md-2 pr-md-2 u-min-w-md-30 w-100"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderButtons.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderHighlights.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderProgress.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Base-DetailViewHeaderTitle -->
<?php }
}
