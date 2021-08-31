<?php
/* Smarty version 3.1.39, created on 2021-08-28 19:18:13
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/Stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6fd5394011_76396412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80fa928aae2568b5638325f8c34d20aee68037ac' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/LangManagement/Stats.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6fd5394011_76396412 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="statsContainer">
	<div class="form-horizontal">
		<div class="form-group form-row">
			<label for="langs_list" class="col-form-label col-md-2" ><?php echo \App\Language::translate('LBL_BASE_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select class="form-control select2" name="langs_basic">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGS']->value, 'LABEL', false, 'PREFIX');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<label class="col-md-2 col-form-label"><?php echo \App\Language::translate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select multiple="multiple" class="form-control select2" name="langs" placeholder="<?php echo \App\Language::translate('LBL_SELECT_SOME_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" >
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGS']->value, 'LABEL', false, 'PREFIX');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<div class="col-md-2">
				<button class="btn btn-success showStats"><?php echo \App\Language::translate('LBL_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="alert alert-warning col-md-10">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<?php echo \App\Language::translate('LBL_STATS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="chartBlock row" id="chartBlock">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="widgetChartContainer" id="widgetChartContainer" style="position:relative;">
					<canvas id="language-stats-chart"></canvas>
				</div>
			</div>
			<div class="col-md-2"></div>
			<input class="widgetData" type="hidden" value=''>
		</div>
		<br />
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 statsData"></div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>
<?php }
}
