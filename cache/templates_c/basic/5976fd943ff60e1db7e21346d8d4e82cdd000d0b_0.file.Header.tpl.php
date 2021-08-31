<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:41
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Modals/Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5359447453_52967393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5976fd943ff60e1db7e21346d8d4e82cdd000d0b' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Modals/Header.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a5359447453_52967393 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-Header --><div class="modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static" data-keyboard="false<?php }?>" tabindex="-1" data-js="data" role="dialog" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalData, 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><div class="modal-dialog <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalSize;?>
" role="document"><div class="modal-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_CSS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
?><link rel="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getHref();?>
"/><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_SCRIPTS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['REGISTER_EVENTS']->value) {
echo '<script'; ?>
 type="text/javascript">app.registerModalController('<?php echo $_smarty_tpl->tpl_vars['MODAL_ID']->value;?>
');<?php echo '</script'; ?>
><?php }?><div class="modal-header<?php if ((isset($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass))) {?> <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass;
}?>"><h5 class="modal-title"><?php if ($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon) {?><span class="modal-header-icon <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon;?>
 mr-2"></span><?php }
echo $_smarty_tpl->tpl_vars['MODAL_TITLE']->value;?>
</h5><?php if (!$_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CANCEL');?>
"><span aria-hidden="true">&times;</span></button><?php }?></div><!-- /tpl-Base-Modals-Header -->
<?php }
}
