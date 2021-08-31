<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:18:13
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6fd522da90_21953837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad81b7b7d79d91cb0583fedc6d4de204e2166af' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/Index.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6fd522da90_21953837 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" LangManagement"><div class="o-breadcrumb widget_header row"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="mt-2"><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="nav-item"><a data-toggle="tab" href="#lang_list" class="nav-link active"><strong><?php echo \App\Language::translate('LBL_TAB_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="edit_lang nav-item"><a data-toggle="tab" href="#edit_lang" data-mode="editLang" class="nav-link"><strong><?php echo \App\Language::translate('LBL_TAB_EDITLANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="lang_stats nav-item"><a data-toggle="tab" href="#lang_stats" class="nav-link"><strong><?php echo \App\Language::translate('LBL_TAB_STATS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent padding10 themeTableColor overflowVisible"><div class="tab-pane active" id="lang_list"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('LangList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="tab-pane" id="edit_lang" data-mode="editLang"></div><div class="tab-pane" id="lang_stats"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Stats.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div><div class="clearfix"></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AddLanguage.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AddTranslation.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
