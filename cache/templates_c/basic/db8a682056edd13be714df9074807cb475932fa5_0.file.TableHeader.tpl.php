<?php
/* Smarty version 3.1.39, created on 2021-08-30 12:35:13
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/ListView/TableHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612cb461cc5766_25991720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db8a682056edd13be714df9074807cb475932fa5' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/ListView/TableHeader.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612cb461cc5766_25991720 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-ListView-TableHeader --><thead><tr class="listViewHeaders"><?php if ((isset($_smarty_tpl->tpl_vars['EMPTY_COLUMN']->value)) && 1 === $_smarty_tpl->tpl_vars['EMPTY_COLUMN']->value) {?><th width="1%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_5_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
if (empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('moduleName'))) {
$_smarty_tpl->_assignInScope('MODULE_NAME_FOR_LABEL', $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
$_smarty_tpl->_assignInScope('MODULE_NAME_FOR_LABEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('moduleName'));
}?><th width="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
%" nowrap <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last) {?>colspan="2" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a <?php if (!($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->has('sort'))) {?> class="listViewHeaderValues u-cursor-pointer js-listview_header" data-js="click" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')) {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME_FOR_LABEL']->value);
if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')) {?>&nbsp;&nbsp;<span class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"></span><?php }?></a></th><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><!-- /tpl-Settings-Base-ListView-TableHeader -->
<?php }
}
