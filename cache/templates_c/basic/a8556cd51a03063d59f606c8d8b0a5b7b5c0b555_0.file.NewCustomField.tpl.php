<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:19
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LayoutEditor/NewCustomField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6423f16a87_03084482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8556cd51a03063d59f606c8d8b0a5b7b5c0b555' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LayoutEditor/NewCustomField.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6423f16a87_03084482 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="newCustomFieldCopy d-none"><div class="opacity js-custom-field ml-0 border1px" data-block-id="" data-field-id="" data-sequence=""><div class="px-2 py-1"><div class="col-12 pr-0 fieldContainer" style="word-wrap: break-word;"><?php if ($_smarty_tpl->tpl_vars['IS_SORTABLE']->value) {?><a class="mr-3"><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a><?php }?><span class="fieldLabel"></span><span class="float-right actions"><input type="hidden" value="" id="relatedFieldValue" /><?php if ($_smarty_tpl->tpl_vars['IS_SORTABLE']->value) {?><button class="btn btn-success btn-xs editFieldDetails ml-1"><span class="yfi yfi-full-editing-view" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button class="btn btn-primary btn-xs copyFieldLabel ml-1" data-target="relatedFieldValue"><span class="fas fa-copy" title="<?php echo App\Language::translate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><button class="btn btn-danger btn-xs deleteCustomField ml-1" data-field-id=""><span class="fas fa-trash-alt" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button></span></div></div></div></li>
<?php }
}
