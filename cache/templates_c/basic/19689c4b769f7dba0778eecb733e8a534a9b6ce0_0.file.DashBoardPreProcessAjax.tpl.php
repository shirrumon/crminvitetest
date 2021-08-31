<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardPreProcessAjax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5356255a61_94501969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19689c4b769f7dba0778eecb733e8a534a9b6ce0' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardPreProcessAjax.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a5356255a61_94501969 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-dashboards-DashBoardPreProcessAjax mt-2 mb-2"><ul class="nav nav-tabs massEditTabs selectDashboard<?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value) === 1) {?> d-none<?php }?> ml-sm-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value, 'DASHBOARD');
$_smarty_tpl->tpl_vars['DASHBOARD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DASHBOARD']->value) {
$_smarty_tpl->tpl_vars['DASHBOARD']->do_else = false;
?><li class="nav-item" data-id="<?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id'];?>
" data-js="data-id"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value == $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id']) {?> active <?php }?>"href="#" data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DASHBOARD']->value['name']);?>
</strong></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value) {
$_smarty_tpl->_assignInScope('COUNT', count($_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value));?><ul class="nav nav-inverted-tabs massEditTabs selectDashboradView ml-sm-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value, 'MODULE_WIDGET');
$_smarty_tpl->tpl_vars['MODULE_WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {
$_smarty_tpl->tpl_vars['MODULE_WIDGET']->do_else = false;
?><li class="nav-item" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
"><a class="nav-link pt-1 pb-1 <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {?> active <?php }
if ($_smarty_tpl->tpl_vars['COUNT']->value === 1) {?> d-none<?php }?>"href="#" data-toggle="tab"><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
 mx-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_WIDGET']->value,$_smarty_tpl->tpl_vars['MODULE_WIDGET']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></div>
<?php }
}
