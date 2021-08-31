<?php
/* Smarty version 3.1.39, created on 2021-08-29 09:16:30
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Cars/ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612b344e98bfe4_11175234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f386eb9943ebcb6564e3c925fc1494e304ab39c' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Cars/ListViewHeader.tpl',
      1 => 1630221383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612b344e98bfe4_11175234 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="btn btn-primary js-show-modal" id="carsBtn" data-url="index.php?module=Cars&view=GenerateRatesModal&record=117">Button</button><?php echo '<script'; ?>
>document.getElementById('carsBtn').onclick = function (){alert(<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
);}<?php echo '</script'; ?>
><?php }
}
