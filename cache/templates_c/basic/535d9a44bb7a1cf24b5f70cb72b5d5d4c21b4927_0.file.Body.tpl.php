<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:44
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Users/Body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a643c9d5448_78227948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535d9a44bb7a1cf24b5f70cb72b5d5d4c21b4927' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Users/Body.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a643c9d5448_78227948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('ANNOUNCEMENTS', Vtiger_Module_Model::getInstance('Announcements'));
if ($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value->checkActive()) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Announcement.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_assignInScope('LEFTPANELHIDE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide'));?><div class="container-fluid container-fluid-main"><div class="o-base-container js-base-container c-menu--animation <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value) {?> c-menu--open<?php }?> <?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>userInfoFooter<?php }?>" data-js="container | class: c-menu--animation"><?php if ($_smarty_tpl->tpl_vars['VIEW']->value != 'Login') {
if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?><span class="caret"></span><?php }?><div class="js-sidebar c-menu__container noSpaces" data-js="class: .js-expand"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyLeft.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="basePanel"><div class="mainBody"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyContent.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
