<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:37
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Home/dashboards/DashBoardPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a53554d6216_00281593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb4c7d60ee0fe33aa2af37835ccdc755241ac33' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Home/dashboards/DashBoardPreProcess.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a53554d6216_00281593 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Home-dashboards-DashBoardPreProcess --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer"><div class="contentsDiv mx-md-0 dashboardContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>\App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?><div class="dashboardViewContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardPreProcessAjax.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Home-dashboards-DashBoardPreProcess -->
<?php }
}
