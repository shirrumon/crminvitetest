<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:45
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/Field/Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a643d35aa09_32338662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85782b47089efd9d66c7cdc643caa85bb55a3f29' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/Field/Base.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a643d35aa09_32338662 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-Base u-paragraph-m-0 u-word-break">
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

</div>
<?php }
}
