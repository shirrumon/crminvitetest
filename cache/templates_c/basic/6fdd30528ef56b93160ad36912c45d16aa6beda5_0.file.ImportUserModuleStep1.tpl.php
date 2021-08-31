<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:08:40
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/ModuleManager/ImportUserModuleStep1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6d9851a419_91280111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fdd30528ef56b93160ad36912c45d16aa6beda5' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/ModuleManager/ImportUserModuleStep1.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6d9851a419_91280111 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-ModuleManager-ImportUserModuleStep1" id="importModules"><div class="o-breadcrumb widget_header row mb-2"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php $_smarty_tpl->_assignInScope('MAXUPLOADSIZE', vtlib\Functions::getMaxUploadSize());
if ($_smarty_tpl->tpl_vars['MAXUPLOADSIZE']->value < 5242880) {?><div class="alert alert-block alert-danger fade show" role="alert"><button type="button" class="close" data-dismiss="alert">×</button><h4 class="alert-heading"><?php echo \App\Language::translate('LBL_TOO_SMALL_UPLOAD_LIMIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><p><?php echo \App\Language::translateArgs('LBL_TOO_SMALL_UPLOAD_LIMIT_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtlib\Functions::showBytes($_smarty_tpl->tpl_vars['MAXUPLOADSIZE']->value),(('<a href="index.php?parent=Settings&module=ConfReport&view=Index">').(\App\Language::translate('LBL_CHECK_SERVER_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value))).('</a>'));?>
</p></div><?php }?><div class="contents"><div><form class="form-horizontal js-validation-engine" id="importUserModule" name="importUserModule" action='index.php' method="POST" enctype="multipart/form-data" data-js="container"><input type="hidden" name="module" value="ModuleManager"/><input type="hidden" name="moduleAction" value="Import"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" name="view" value="ModuleImport"/><input type="hidden" name="mode" value="importUserModuleStep2"/><div name="uploadUserModule"><table class="massEditTable table table-bordered"><thead><tr class="blockHeader"><th class="fieldLabel"><strong><?php echo \App\Language::translate('LBL_IMPORT_MODULE_FROM_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><tr><td><div class="fieldValue position-relative"><input type="file" class="js-validation-zip" data-js="container" name="moduleZip" id="moduleZip" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" accept=".ZIP" /></div></td></tr></tbody></table></div><div class="d-flex justify-content-end"><button class="btn btn-success mr-1" type="submit" name="saveButton"><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_IMPORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><div class="cancelLinkContainer"><a role="button" class="cancelLink btn btn-danger" href="index.php?module=ModuleManager&parent=Settings&view=List"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></form></div></div></div>
<?php }
}
