<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:45
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/DetailViewBlockLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a643d171d40_68301651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31dff315762b56221f1fe7f9d4418a767c155bc3' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/DetailViewBlockLink.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a643d171d40_68301651 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="detailViewBlockLinks"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->getBlocks($_smarty_tpl->tpl_vars['TYPE_VIEW']->value), 'BLOCK_MODEL');
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getRelatedModuleName());?><div class="js-toggle-panel c-panel detailViewBlockLink" data-js="click" data-url="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getUrl();?>
" data-reference="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getRelatedModuleName();?>
" data-count="<?php echo intval(App\Config::relation('SHOW_RECORDS_COUNT'));?>
"><div class="blockHeader c-panel__header"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide" data-id="<?php echo $_smarty_tpl->tpl_vars['TYPE_VIEW']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 d-none" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show" data-id="<?php echo $_smarty_tpl->tpl_vars['TYPE_VIEW']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"></span><h5><span class="moduleIcon yfm-<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);
if (App\Config::relation('SHOW_RECORDS_COUNT')) {?>&nbsp;<span class="count badge">0</span><?php }?><span class="fas fa-link js-popover-tooltip ml-2" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_RELATED_RECORDS_LIST');?>
" data-placement="left"></span></h5></div><div class="blockContent c-panel__body d-none"></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
<?php }
}
