<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:37
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/BrowsingHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5355ebfe64_51893432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '635e44a602164b3dc6f79c374bb09142dd61d6e9' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/BrowsingHistory.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a5355ebfe64_51893432 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-BrowsingHistory dropdown-menu historyList js-scrollbar" aria-labelledby="showHistoryBtn" role="list" data-js="perfectscrollbar"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BROWSING_HISTORY']->value, 'HISTORY');
$_smarty_tpl->tpl_vars['HISTORY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HISTORY']->value) {
$_smarty_tpl->tpl_vars['HISTORY']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewToday']))) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_TODAY');?>
</h6><?php } elseif ((isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewYesterday']))) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</h6><?php } elseif ((isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewOlder']))) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</h6><?php }?><a class="item dropdown-item" href="/<?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['url'];?>
" role="listitem"><?php if ($_smarty_tpl->tpl_vars['HISTORY']->value['hour']) {?><span class="historyHour"><?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];
}
echo " | ";
echo $_smarty_tpl->tpl_vars['HISTORY']->value['title'];?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="dropdown-divider"></div><a class="dropdown-item js-clear-history" data-js="click" href="#" role="listitem"><?php echo \App\Language::translate('LBL_CLEAR_HISTORY');?>
</a></div>
<?php }
}
