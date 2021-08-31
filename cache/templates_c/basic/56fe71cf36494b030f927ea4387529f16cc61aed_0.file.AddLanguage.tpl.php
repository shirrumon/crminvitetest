<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:18:13
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/AddLanguage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6fd544f9c8_49384889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56fe71cf36494b030f927ea4387529f16cc61aed' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/AddLanguage.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6fd544f9c8_49384889 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade AddNewLangMondal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="myModalLabel" class="modal-title"><?php echo \App\Language::translate('LBL_ADD_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
				<button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form-horizontal">
				<div class="form-group">
					<label class="col-form-label col-md-3">
						<?php echo \App\Language::translate('LBL_Lang_label',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:
					</label>
					<div class="col-md-7"><input name="label" class="form-control" type="text"/></div>
				</div>
				<div class="form-group">
					<label class="col-form-label col-md-3">
						<?php echo \App\Language::translate('LBL_Lang_name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:
					</label>
					<div class="col-md-7"><input name="name" class="form-control" type="text"/></div>
				</div>
				<div class="form-group">
					<label class="col-form-label col-md-3"><?php echo \App\Language::translate('LBL_Lang_prefix',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						<span class="js-popover-tooltip" data-js="popover" data-placement="top"
							  data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_IETF_LANGUAGE_TAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
">
							<span class="fas fa-info-circle"></span>
						</span>:
					</label>
					<div class="col-md-7"><input name="prefix" class="form-control" type="text"/></div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary"><?php echo \App\Language::translate('LBL_AddLanguage',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				<button class="btn btn-warning" data-dismiss="modal" type="button" aria-hidden="true"><?php echo \App\Language::translate('LBL_Cancel',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<?php }
}
