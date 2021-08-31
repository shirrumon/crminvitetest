<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:25:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6382591d23_44556106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4bda2e4f4b961165c39154dc50d87737b8dbd0a' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/Index.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6382591d23_44556106 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-Index --><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php if ($_smarty_tpl->tpl_vars['WARNINGS']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SystemWarningAletrs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><div class="o-settings-dashboard js-dashboard-container pt-2 h-100" data-js="container"><div class="container-fluid h-100 px-0"><?php if ($_smarty_tpl->tpl_vars['SYSTEM_MONITORING']->value) {?><div class="c-panel c-panel--collapsible c-panel--white"><div class="c-panel__header collapsed" id="system-monitoring" data-toggle="collapse" data-target="#system-monitoring-collapse" aria-expanded="false" aria-controls="system-monitoring-collapse"><span class="mdi mdi-chevron-up mx-2 u-fs-26px" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span><div class="c-panel__title"><span class="yfi yfi-system-monitoring"></span><h5><?php echo \App\Language::translate('LBL_SYSTEM_MONITORING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><div id="system-monitoring-collapse" class="js-collapse collapse multi-collapse" aria-labelledby="system-monitoring"><div class="c-panel__body px-3"><div class="c-text-divider mb-3"><hr class="c-text-divider__line u-text-gray" /></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SystemMonitoring.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><?php }?><div class="c-panel c-panel--collapsible c-panel--white"><div class="c-panel__header collapsed" id="my-shortcuts" data-toggle="collapse" data-target="#my-shortcuts-collapse" aria-expanded="false" aria-controls="my-shortcuts-collapse"><span class="mdi mdi-chevron-up mx-2 u-fs-26px" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span><div class="c-panel__title"><span class="yfi yfi-my-shortcuts"></span><h5><?php echo \App\Language::translate('LBL_SETTINGS_SHORT_CUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><div id="my-shortcuts-collapse" class="js-collapse collapse multi-collapse" aria-labelledby="my-shortcuts"><div class="c-panel__body px-3"><div class="c-text-divider mb-3"><hr class="c-text-divider__line u-text-gray" /></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SettingsShortCutsContainer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div></div><!-- /tpl-Settings-Base-Index -->
<?php }
}
