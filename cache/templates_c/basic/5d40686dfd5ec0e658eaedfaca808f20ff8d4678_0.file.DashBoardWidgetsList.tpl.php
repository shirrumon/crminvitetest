<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardWidgetsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5356212677_85326238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d40686dfd5ec0e658eaedfaca808f20ff8d4678' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardWidgetsList.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a5356212677_85326238 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="js-widget-predefined btn btn-outline-secondary c-btn-block-xs-down addButton dropdown-toggle u-remove-dropdown-icon<?php if (!count($_smarty_tpl->tpl_vars['WIDGETS']->value) > 0) {?> d-none<?php }?> tpl-Base-dashboards-DashBoardWidgetsList"data-js="class: d-none" data-toggle="dropdown"><span class="c-icon--tripple"><span class="c-icon--tripple__top fas fa-chart-pie"></span><span class="c-icon--tripple__left fas fa-chart-line"></span><span class="c-icon--tripple__right fas fa-chart-area"></span></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_PREDEFINED_WIDGETS');?>
</span></button><div class="js-widget-list dropdown-menu widgetsList addWidgetDropDown" data-js="container"><?php $_smarty_tpl->_assignInScope('WIDGET', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
?><a class="js-widget-list__item dropdown-item d-flex" data-js="remove | click" href="#" data-widget-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('deleteFromList')) {?><span class="text-danger pl-5 ml-auto"><span class="fas fa-trash-alt removeWidgetFromList u-hover-opacity" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
" data-js="click"></span></span><?php }?></a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
<?php }
}
