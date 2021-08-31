<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:19
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LayoutEditor/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6423e4c2b9_04725435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cce14108f43f65a0b0301555dc7af235074b20b' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LayoutEditor/Index.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6423e4c2b9_04725435 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-LayoutEditor-Index" id="layoutEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"/><div class="o-breadcrumb widget_header row"><div class="col-md-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="float-right col-md-6 form-inline"><div class="form-group float-right col-md-6"><select class="select2 form-control" name="layoutEditorModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group float-right"><div class="btn-group"><button class="js-switch--inventory btn btn-outline-primary<?php if (!$_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?> active<?php }?>" type="button"	data-js="click" <?php if ($_smarty_tpl->tpl_vars['CHANGE_MODULE_TYPE_DISABLED']->value) {?>disabled="disabled"<?php }?> data-value="<?php echo Vtiger_Module_Model::STANDARD_TYPE;?>
" autocomplete="off"><?php echo App\Language::translate('LBL_BASIC_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="js-switch--inventory btn btn-outline-primary<?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?> active<?php }?>" type="button" data-js="click" <?php if ($_smarty_tpl->tpl_vars['CHANGE_MODULE_TYPE_DISABLED']->value) {?>disabled="disabled"<?php }?> data-value="<?php echo Vtiger_Module_Model::ADVANCED_TYPE;?>
" autocomplete="off"><?php echo App\Language::translate('LBL_ADVANCED_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div><hr><div class="alert alert-block alert-warning mb-2"><span class="mdi mdi-information-outline u-fs-xlg mr-2 float-left"></span><span><?php echo \App\Language::translate('LBL_EDIT_MAY_AFFECT_STABILITY_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs" role="tablist"><li class="nav-item"><a class="nav-link active" data-toggle="tab" role="tab" href="#detailViewLayout" aria-selected="true"><strong><?php echo App\Language::translate('LBL_DETAILVIEW_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><li class="nav-item inventoryNav"><a class="nav-link" data-toggle="tab" role="tab" href="#inventoryViewLayout" aria-selected="false"><strong><?php echo App\Language::translate('LBL_MANAGING_AN_ADVANCED_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php }?></ul><div class="tab-content layoutContent pt-3 themeTableColor overflowVisible"><div class="tab-pane fade show active" id="detailViewLayout" role="tabpanel" aria-labelledby="detailViewLayout"><?php $_smarty_tpl->_assignInScope('FIELD_TYPE_INFO', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getAddFieldTypeInfo());
$_smarty_tpl->_assignInScope('IS_SORTABLE', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isSortableAllowed());
$_smarty_tpl->_assignInScope('IS_BLOCK_SORTABLE', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isBlockSortableAllowed());
$_smarty_tpl->_assignInScope('ALL_BLOCK_LABELS', array());
if ($_smarty_tpl->tpl_vars['IS_SORTABLE']->value) {?><div class="btn-toolbar" id="layoutEditorButtons"><button class="btn btn-success addButton addCustomBlock"><span class="fas fa-plus mr-2"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success saveFieldSequence ml-3 d-none"><span class="fas fa-check mr-2"></span><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-default ml-3 js-inactive-fields-btn"><span class="fas fa-ban mr-2"></span><?php echo App\Language::translate('LBL_INACTIVE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><?php }?><div class="moduleBlocks"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'BLOCK_MODEL', false, 'BLOCK_LABEL_KEY');
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value => $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELDS_LIST', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getLayoutBlockActiveFields());
$_smarty_tpl->_assignInScope('BLOCK_ID', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id'));
$_smarty_tpl->_assignInScope('BLOCK_ICON', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('icon'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']) ? $_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['BLOCK_ID']->value] = $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;
$_smarty_tpl->_assignInScope('ALL_BLOCK_LABELS', $_tmp_array);?><div id="block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"class="editFieldsTable block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
 mb-2 border1px <?php if ($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value) {?> blockSortable<?php }?> js-block-container"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('sequence');?>
"style="border-radius: 4px;background: white;" data-js="container"><div class="layoutBlockHeader d-flex flex-wrap justify-content-between m-0 p-1 pt-1 w-100"><div class="blockLabel u-white-space-nowrap"><?php if ($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value) {?><img class="align-middle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" alt=""/>&nbsp;&nbsp;<?php }?><strong class="align-middle js-block-label" title="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;?>
" data-js="container"><?php if (!empty($_smarty_tpl->tpl_vars['BLOCK_ICON']->value)) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ICON']->value;?>
 mr-2"></span><?php }
echo App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</strong></div><div class="btn-toolbar pl-1" role="toolbar" aria-label="Toolbar with button groups"><?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isAddCustomFieldEnabled()) {?><div class="btn-group btn-group-sm u-h-fit mr-1 mt-1"><button class="btn btn-success addCustomField" type="button"><span class="fas fa-plus u-mr-5px"></span><strong><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="btn-group btn-group-sm u-h-fit mr-1 mt-1"><button class="btn btn-warning js-add-system-field" type="button" data-js="click"><span class="fas fa-plus-circle u-mr-5px"></span><strong><?php echo App\Language::translate('BTN_ADD_SYSTEM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }?><div class="btn-group btn-group-sm btn-group-toggle mt-1" data-toggle="buttons"><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?> active<?php }?>" data-visible="0"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option1" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?> checked<?php }?>><span class="fas fa-fw mr-1 fa-eye-slash"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_ALWAYS_HIDE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if (!$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden() && !$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> active<?php }?>" data-visible="1"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option2" autocomplete="off" <?php if (!$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden() && !$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> checked<?php }?>><span class="fas fa-fw mr-1  fa-eye"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_ALWAYS_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> active<?php }?>" data-visible="2"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option3" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> checked<?php }?>><span class="fas fa-fw mr-1  fa-atom"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_DYNAMIC_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label></div><?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isCustomized()) {?><div class="btn-group btn-group-sm ml-1 mt-1 u-h-fit" role="group" aria-label="Third group"><button class="js-delete-custom-block-btn c-btn-collapsible btn btn-danger js-popover-tooltip" data-js="click"><span class="fas fa-trash-alt mr-1"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_DELETE_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></button></div><?php }?></div></div><div class="blockFieldsList blockFieldsSortable row m-0 p-1 u-min-height-50"><ul name="<?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isFieldsSortableAllowed($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value)) {?>sortable1<?php }?>"class="sortTableUl js-sort-table1 connectedSortable col-md-6 mb-0" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'FIELD_MODEL', false, NULL, 'fieldlist', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index'] : null)%2 == 0) {?><li><div class="opacity editFields ml-0 border1px" data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="px-2 py-1"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());?><div class="col-12 pr-0 fieldContainer" style="word-wrap: break-word;"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a class="mr-3"><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a><?php }?><span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);
if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?><span class="ml-3 font-weight-normal">[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
]</span></span><span class="float-right actions"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" id="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"/><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><button class="btn btn-success btn-xs editFieldDetails ml-1"><span class="yfi yfi-full-editing-view" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button class="btn btn-primary btn-xs copyFieldLabel ml-1" data-target="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-copy" title="<?php echo App\Language::translate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isCustomField() == 'true') {?><button class="btn btn-danger btn-xs deleteCustomField ml-1" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-trash-alt" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button class="btn btn-info btn-xs js-context-help ml-1" data-js="click" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-url="index.php?module=LayoutEditor&parent=Settings&view=HelpInfo&field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
&source=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"><span class="fas fa-info-circle" title="<?php echo App\Language::translate('LBL_CONTEXT_HELP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button></span></div></div></div></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><ul <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isFieldsSortableAllowed($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value)) {?>name="sortable2"<?php }?>class="connectedSortable js-sort-table2 sortTableUl col-md-6 mb-0"data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'FIELD_MODEL', false, NULL, 'fieldlist1', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index'] : null)%2 != 0) {?><li><div class="opacity editFields ml-0 border1px" data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="px-2 py-1"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());?><div class="col-12 pr-0 fieldContainer" style="word-wrap: break-word;"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a class="mr-3"><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a><?php }?><span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);
if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?><span class="ml-3 font-weight-normal">[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
]</span></span><span class="float-right actions"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" id="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"/><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><button class="btn btn-success btn-xs editFieldDetails ml-1"><span class="yfi yfi-full-editing-view" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button class="btn btn-primary btn-xs copyFieldLabel ml-1" data-target="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-copy" title="<?php echo App\Language::translate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isCustomField() == 'true') {?><button class="btn btn-danger btn-xs deleteCustomField ml-1" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"><span class="fas fa-trash-alt" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button class="btn btn-info btn-xs js-context-help ml-1" data-js="click" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-url="index.php?module=LayoutEditor&parent=Settings&view=HelpInfo&field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
&source=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"><span class="fas fa-info-circle" title="<?php echo App\Language::translate('LBL_CONTEXT_HELP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button></span></div></div></div></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><input type="hidden" class="inActiveFieldsArray" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['IN_ACTIVE_FIELDS']->value));?>
'/><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('NewCustomBlock.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('NewCustomField.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AddBlockModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CreateFieldModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InactiveFieldModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><div class="tab-pane mt-0" id="inventoryViewLayout" role="tabpanel" aria-labelledby="inventoryViewLayout"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Inventory.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }?></div></div></div>
<?php }
}
