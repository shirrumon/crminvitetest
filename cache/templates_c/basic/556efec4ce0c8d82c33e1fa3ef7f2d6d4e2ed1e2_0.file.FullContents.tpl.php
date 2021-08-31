<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:37:28
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/FullContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a745821e9b7_96261539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556efec4ce0c8d82c33e1fa3ef7f2d6d4e2ed1e2' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/FullContents.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a745821e9b7_96261539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'DetailTop'), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/BlocksView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
if ($_smarty_tpl->tpl_vars['MODULE_TYPE']->value == '1') {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/InventoryView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'DetailBottom'), 0, true);
}
}
