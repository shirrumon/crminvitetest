<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:08:39
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/ModuleManager/Body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6d97ecb9d5_55466429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e969b960c3af77d2f6ad5da1c668447e43e71103' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/ModuleManager/Body.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6d97ecb9d5_55466429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('LEFTPANELHIDE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide'));?><div class="container-fluid container-fluid-main o-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['MODULE_NAME']->value, 'UTF-8');?>
-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['VIEW']->value, 'UTF-8');?>
-container"><div class="o-base-container js-base-container c-menu--animation <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value) {?> c-menu--open<?php }?>" data-js="container | class: c-menu--animation"><div class="js-sidebar c-menu__container noSpaces" data-js="class: .js-expand"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyLeft.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="basePanel"><div class="mainBody"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyContent.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
