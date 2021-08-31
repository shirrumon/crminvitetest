<?php
/* Smarty version 3.1.39, created on 2021-08-31 08:18:27
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Cars/GenerateRatesModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612dc9b37d1880_73988144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00adc5fea51f19cf2e8e59c3199903258a2e9136' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Cars/GenerateRatesModal.tpl',
      1 => 1630390700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612dc9b37d1880_73988144 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="generateRatesModal modal-body js-modal-body mb-0 pt-0" data-js="container" id="changeForm"><div class="col-3"><label>Data początku eksploatacji: </label><input class="form-control" type="date" id="startDate"><input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><br></br><label>Data końca eksploatacji: </label><input class="form-control" type="date" id="endDate"><input type="hidden" id="fuel" value="<?php echo $_smarty_tpl->tpl_vars['PALIWO']->value;?>
"></div></form><?php }
}
