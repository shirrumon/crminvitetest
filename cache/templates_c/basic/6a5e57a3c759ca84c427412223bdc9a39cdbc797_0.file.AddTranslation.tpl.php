<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:18:13
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/AddTranslation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6fd548abb1_04116624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5e57a3c759ca84c427412223bdc9a39cdbc797' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/AddTranslation.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6fd548abb1_04116624 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade AddNewTranslationMondal" tabindex="-1" role="dialog" aria-labelledby="AddTranslation" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="AddTranslation" class="modal-title"><?php echo \App\Language::translate('LBL_ADD_Translate',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
				<button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal AddTranslationForm">
					<input type="hidden" name="langs" value="" />
					<div class="form-group">
						<label for="translation_type" class="col-sm-4 col-form-label"><?php echo \App\Language::translate('LBL_TranslationType',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
						<div class="col-sm-8">
							<select name="type" class="form-control" id="translation_type">
								<option value="php"><?php echo \App\Language::translate('LBL_LangPHP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
								<option value="js"><?php echo \App\Language::translate('LBL_LangJS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="variable" class="col-sm-4 col-form-label"><?php echo \App\Language::translate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
						<div class="col-sm-8">
							<input id="variable" name="variable" class="form-control" type="text" placeholder="<?php echo \App\Language::translate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" />
						</div>
					</div>
					<div class="add_translation_block">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary"><?php echo \App\Language::translate('LBL_AddLanguage',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				<button class="btn btn-warning" data-dismiss="modal" aria-hidden="true" type="button"><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<?php }
}
