<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:45
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/Field/Text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a643d54fe97_07228277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd282d4b899922c2d9af7393df15484789a81c7cd' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/Field/Text.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a643d54fe97_07228277 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Detail-Field-Text --><?php $_smarty_tpl->_assignInScope('SIZE', 'mini');
if ($_smarty_tpl->tpl_vars['SOURCE_TPL']->value == 'BlockView') {
$_smarty_tpl->_assignInScope('SIZE', 'medium');
}?><div class="u-paragraph-m-0 u-word-break"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value,false,$_smarty_tpl->tpl_vars['SIZE']->value);?>
</div><!-- /tpl-Detail-Field-Text -->
<?php }
}
