<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a53560a71f7_74752081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9501683f6dd0832384a559b6ddc4a9a65dd7ca6' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/dashboards/DashBoardHeader.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a53560a71f7_74752081 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row"><nav class="o-breadcrumb widget_header col-12 px-3 d-xsm-flex align-items-center flex-xsm-row" aria-label="<?php echo \App\Language::translate("LBL_BREADCRUMB");?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 != 'Home') {?><div class="listViewMassActions px-2"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'BTN_GROUP'=>false,'CLASS'=>'buttonTextHolder'), 0, true);
?></div><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></nav></div>
<?php }
}
