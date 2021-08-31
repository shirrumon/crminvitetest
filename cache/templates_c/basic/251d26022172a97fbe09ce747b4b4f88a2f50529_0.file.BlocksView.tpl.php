<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:45
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/BlocksView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a643d1bc851_58083080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '251d26022172a97fbe09ce747b4b4f88a2f50529' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/BlocksView.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a643d1bc851_58083080 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-BlocksView --><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL_LIST', false, 'BLOCK_LABEL_KEY');
$_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->do_else = false;
$_smarty_tpl->_assignInScope('BLOCK', $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]);
if ($_smarty_tpl->tpl_vars['BLOCK']->value == null || count($_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value) <= 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('IS_HIDDEN', $_smarty_tpl->tpl_vars['BLOCK']->value->isHidden());
$_smarty_tpl->_assignInScope('IS_DYNAMIC', $_smarty_tpl->tpl_vars['BLOCK']->value->isDynamic());
$_smarty_tpl->_assignInScope('BLOCK_ICON', $_smarty_tpl->tpl_vars['BLOCK']->value->get('icon'));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/BlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><!-- /tpl-Base-Detail-BlocksView -->
<?php }
}
