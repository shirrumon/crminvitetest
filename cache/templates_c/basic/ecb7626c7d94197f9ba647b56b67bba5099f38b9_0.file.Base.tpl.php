<?php
/* Smarty version 3.1.39, created on 2021-08-31 07:54:55
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Edit/DefaultField/Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612dc42fbf9f56_75164956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb7626c7d94197f9ba647b56b67bba5099f38b9' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Edit/DefaultField/Base.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612dc42fbf9f56_75164956 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-DefaultBase --><?php $_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD'=>false,'MODULE'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), 0, true);
}
}
