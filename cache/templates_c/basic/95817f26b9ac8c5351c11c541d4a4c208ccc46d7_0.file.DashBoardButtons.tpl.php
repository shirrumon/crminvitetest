<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a53561c49a8_49303484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95817f26b9ac8c5351c11c541d4a4c208ccc46d7' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardButtons.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a53561c49a8_49303484 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dashboardHeading d-flex ml-auto mb-2 mt-sm-2 pr-sm-1 u-remove-dropdown-icon-down-lg u-w-xs-down-100"><input type="hidden" name="selectedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php $_smarty_tpl->_assignInScope('SPECIAL_WIDGETS', Settings_WidgetsManagement_Module_Model::getSpecialWidgets('Home'));
if ($_smarty_tpl->tpl_vars['MODULE_PERMISSION']->value) {?><div class="js-predefined-widgets" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardWidgetsList.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardFilter')) {?><button class="btn btn-outline-secondary c-btn-block-xs-down addFilter ml-1" data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']->get('linkid');?>
" data-block-id="0" data-width="4" data-height="4"><span class="fas fa-filter mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_FILTER');?>
</span></button><?php }
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardChartFilter')) {?><button class="btn btn-outline-secondary c-btn-block-xs-down js-show-modal ml-1" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
&view=ChartFilter&step=step1"data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']->get('linkid');?>
"data-block-id="0" data-width="4" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"data-modalId="<?php echo \App\Layout::getUniqueId('ChartFilter');?>
"data-height="4"><span class="fas fa-chart-pie mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_CHART_FILTER');?>
</span></button><?php }?></div>
<?php }
}
