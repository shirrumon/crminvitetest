<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:38:18
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/List/Field/Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a748a66bae6_44312811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74e5b4c30e2a452237dad1aba6d007204971c300' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/List/Field/Base.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a748a66bae6_44312811 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-List-Field-Base --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', '');
}?><div class="searchField <?php if ((isset($_smarty_tpl->tpl_vars['CLASS_SIZE']->value))) {
echo $_smarty_tpl->tpl_vars['CLASS_SIZE']->value;
}?> u-min-w-150pxr"><?php if (!empty($_smarty_tpl->tpl_vars['MODULE_MODEL']->value) && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getAlphabetSearchField() == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()) {?><div class="input-group col-12 px-0"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?> data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
" <?php }?> class="listSearchContributor form-control" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUE']->value;?>
" title='<?php echo $_smarty_tpl->tpl_vars['LABEL']->value['label'];?>
' data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/><div class="input-group-append alphabetBtnContainer"><?php if (empty($_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value)) {?><button class=" btn btn-outline-secondary alphabetBtn" type="button"><span class="fas fa-font" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ALPHABETIC_FILTERING');?>
</span></button><?php } else { ?><button class=" btn btn-primary alphabetBtn" type="button"><?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
</button><?php }?></div></div><?php } else { ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?> data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }?> class="listSearchContributor form-control" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUE']->value;?>
" title='<?php echo $_smarty_tpl->tpl_vars['LABEL']->value['label'];?>
' data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?>/><?php }?></div><!-- /tpl-List-Field-Base -->
<?php }
}
