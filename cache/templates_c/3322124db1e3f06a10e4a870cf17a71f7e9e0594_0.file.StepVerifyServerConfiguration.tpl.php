<?php
/* Smarty version 3.1.39, created on 2021-08-28 15:12:41
  from '/Applications/MAMP/htdocs/install/tpl/StepVerifyServerConfiguration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a526907bc30_73564377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3322124db1e3f06a10e4a870cf17a71f7e9e0594' => 
    array (
      0 => '/Applications/MAMP/htdocs/install/tpl/StepVerifyServerConfiguration.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a526907bc30_73564377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'SHOW_HELP_TEXT' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/cache/templates_c/3322124db1e3f06a10e4a870cf17a71f7e9e0594_0.file.StepVerifyServerConfiguration.tpl.php',
    'uid' => '3322124db1e3f06a10e4a870cf17a71f7e9e0594',
    'call_name' => 'smarty_template_function_SHOW_HELP_TEXT_2040277927612a5268d7c6b1_22890271',
  ),
  'SHOW_RECOMMENDED' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/cache/templates_c/3322124db1e3f06a10e4a870cf17a71f7e9e0594_0.file.StepVerifyServerConfiguration.tpl.php',
    'uid' => '3322124db1e3f06a10e4a870cf17a71f7e9e0594',
    'call_name' => 'smarty_template_function_SHOW_RECOMMENDED_2040277927612a5268d7c6b1_22890271',
  ),
  'HIGHLIGHT_ROW' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/cache/templates_c/3322124db1e3f06a10e4a870cf17a71f7e9e0594_0.file.StepVerifyServerConfiguration.tpl.php',
    'uid' => '3322124db1e3f06a10e4a870cf17a71f7e9e0594',
    'call_name' => 'smarty_template_function_HIGHLIGHT_ROW_2040277927612a5268d7c6b1_22890271',
  ),
));
?><!-- tpl-install-tpl-StepVerifyServerConfiguration --><div class="container px-2 px-sm-3"><main class="main-container"><div class="inner-container"><form class="js-confirm" name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="Install.php" data-js="submit"><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['NEXT_STEP']->value;?>
"><input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
"><div class="row"><div class="col-12 text-center"><h2><?php echo App\Language::translate('LBL_INSTALL_PREREQUISITES','Install');?>
</h2></div></div><hr><div><div class="float-right"><div class="button-container"><button type="button" class="btn btn-default" id="recheck"><span class="fas fa-redo-alt m-1"></span><?php echo App\Language::translate('LBL_RECHECK','Install');?>
</button></div></div><?php echo \App\Language::translate('LBL_STEP3_DESCRIPTION','Install');?>
&nbsp;<a target="_blank" rel="noreferrer noopener" href="https://yetiforce.com/en/knowledge-base/documentation/implementer-documentation/item/web-server-requirements" aria-label="https://yetiforce.com/en/knowledge-base/documentation/implementer-documentation/item/web-server-requirements"><span class="fas fa-link"></span></a><div class="offset2"><div><table class="config-table table u-word-break-all" data-type="libraries"><thead><tr><th colspan="1" scope="col" class="text-left"><?php echo App\Language::translate('LBL_LIBRARY','ConfReport');?>
</th><th colspan="1" scope="col"><?php echo App\Language::translate('LBL_MANDATORY','ConfReport');?>
</th><th colspan="1" scope="col"><?php echo App\Language::translate('LBL_INSTALLED','ConfReport');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL']->value['libraries'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><?php if ((isset($_smarty_tpl->tpl_vars['ITEM']->value['mandatory']))) {?><td><?php if ($_smarty_tpl->tpl_vars['ITEM']->value['mandatory']) {
echo App\Language::translate('LBL_MANDATORY','ConfReport');
} else {
echo App\Language::translate('LBL_OPTIONAL','ConfReport');
}?></td><td><?php } else { ?><td colspan="2" class="u-word-break-keep-all"><?php }
if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['www'])) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><br><table class="config-table table u-word-break-all" data-type="security"><caption class="sr-only"><?php echo App\Language::translate('LBL_SECURITY_RECOMMENDED_SETTINGS','Install');?>
</caption><thead><tr><th><?php echo App\Language::translate('LBL_SECURITY_RECOMMENDED_SETTINGS','Install');?>
</th><th><?php echo App\Language::translate('LBL_REQUIRED_VALUE','Install');?>
</th><th><?php echo App\Language::translate('LBL_PRESENT_VALUE','Install');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL']->value['security'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td class="bg-light text-left u-word-break-keep-all"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_RECOMMENDED', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
</td><td><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['www'])) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><br><table class="config-table table u-word-break-all" data-type="stability"><caption class="sr-only"><?php echo App\Language::translate('LBL_PHP_RECOMMENDED_SETTINGS','Install');?>
</caption><thead><tr><th><?php echo App\Language::translate('LBL_PHP_RECOMMENDED_SETTINGS','Install');?>
</th><th><?php echo App\Language::translate('LBL_REQUIRED_VALUE','Install');?>
</th><th><?php echo App\Language::translate('LBL_PRESENT_VALUE','Install');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL']->value['stability'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_RECOMMENDED', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
</td><td colspan="2"><?php if ((isset($_smarty_tpl->tpl_vars['ITEM']->value['www']))) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><br><table class="config-table table u-word-break-all" data-type="performance"><caption class="sr-only"><?php echo App\Language::translate('LBL_PERFORMANCE_VERIFICATION','ConfReport');?>
</caption><thead><tr><th colspan="1" scope="col" class="text-left"><?php echo App\Language::translate('LBL_PARAMETER','ConfReport');?>
</th><th colspan="1" scope="col"><?php echo App\Language::translate('LBL_RECOMMENDED','ConfReport');?>
</th><th colspan="1" scope="col"><?php echo App\Language::translate('LBL_PRESENT_VALUE','Install');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL']->value['performance'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_RECOMMENDED', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
</td><td><?php if ((isset($_smarty_tpl->tpl_vars['ITEM']->value['www']))) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><br><table class="config-table table u-word-break-all" data-type="publicDirectoryAccess"><caption class="sr-only"><?php echo App\Language::translate('LBL_DENY_PUBLIC_DIR_TITLE','ConfReport');?>
</caption><thead><tr><th colspan="1" scope="col" class="text-left"><?php echo App\Language::translate('LBL_PUBLIC_DIR','ConfReport');?>
</th><th colspan="1" scope="col"><?php echo App\Language::translate('LBL_DENY_PUBLIC_DIR_STATUS','ConfReport');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL']->value['publicDirectoryAccess'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><td colspan="2"><?php if ($_smarty_tpl->tpl_vars['ITEM']->value['status']) {
echo App\Language::translate('LBL_YES','ConfReport');
} else {
echo App\Language::translate('LBL_NO','ConfReport');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><br><table class="config-table table u-word-break-all" data-type="environment"><caption class="sr-only"><?php echo App\Language::translate('LBL_ENVIRONMENTAL_INFORMATION','ConfReport');?>
</caption><thead><tr><th colspan="1" scope="col" class="text-left"><?php echo App\Language::translate('LBL_PARAMETER','ConfReport');?>
</th><th colspan="1" scope="col"><?php echo App\Language::translate('LBL_PRESENT_VALUE','Install');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL']->value['environment'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><td><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['www'])) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div><div class="offset2"><div><?php if (!empty($_smarty_tpl->tpl_vars['ALL']->value['writableFilesAndFolders'])) {?><table class="config-table table u-word-break-all" data-type="writableFilesAndFolders"><thead><tr class="blockHeader"><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_PATH','ConfReport');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_PERMISSION','ConfReport');?>
</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL']->value['writableFilesAndFolders'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><td><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['www'])) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><?php }?></div></div></div><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><a class="btn btn-lg c-btn-block-xs-down btn-danger mr-sm-1 mb-1 mb-sm-0" href="Install.php?mode=stepChooseHost" role="button"><span class="fas fa-lg fa-arrow-circle-left mr-2"></span><?php echo App\Language::translate('LBL_BACK','Install');?>
</a><button type="submit" class="btn btn-lg c-btn-block-xs-down btn-primary"><?php echo App\Language::translate('LBL_NEXT','Install');?>
<span class="fas fa-lg fa-arrow-circle-right ml-2"></span></button></div></div></form></div></main></div><!-- /tpl-install-tpl-StepVerifyServerConfiguration -->
<?php }
/* smarty_template_function_SHOW_HELP_TEXT_2040277927612a5268d7c6b1_22890271 */
if (!function_exists('smarty_template_function_SHOW_HELP_TEXT_2040277927612a5268d7c6b1_22890271')) {
function smarty_template_function_SHOW_HELP_TEXT_2040277927612a5268d7c6b1_22890271(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('ITEM'=>array(),'KEY'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (empty($_smarty_tpl->tpl_vars['ITEM']->value['label'])) {
echo $_smarty_tpl->tpl_vars['KEY']->value;
} else {
echo \App\Language::translate(('LBL_LABEL_').($_smarty_tpl->tpl_vars['ITEM']->value['label']),'ConfReport');
}
if (!$_smarty_tpl->tpl_vars['ITEM']->value['status']) {
$_smarty_tpl->_assignInScope('HELP_TEXT', ('LBL_HELP_').(strtoupper(\App\Colors::sanitizeValue($_smarty_tpl->tpl_vars['KEY']->value))));
$_smarty_tpl->_assignInScope('HELP_TEXT_TRANS', \App\Language::translateEncodeHtml($_smarty_tpl->tpl_vars['HELP_TEXT']->value,'ConfReport'));
if (!empty($_smarty_tpl->tpl_vars['HELP_TEXT_TRANS']->value) && $_smarty_tpl->tpl_vars['HELP_TEXT_TRANS']->value !== $_smarty_tpl->tpl_vars['HELP_TEXT']->value) {?><a href="#" class="js-popover-tooltip float-right" data-js="popover" data-trigger="focus hover" data-placement="right" data-content="<?php echo $_smarty_tpl->tpl_vars['HELP_TEXT_TRANS']->value;?>
"><span class="fas fa-info-circle"></span></a><?php }
}
}}
/*/ smarty_template_function_SHOW_HELP_TEXT_2040277927612a5268d7c6b1_22890271 */
/* smarty_template_function_SHOW_RECOMMENDED_2040277927612a5268d7c6b1_22890271 */
if (!function_exists('smarty_template_function_SHOW_RECOMMENDED_2040277927612a5268d7c6b1_22890271')) {
function smarty_template_function_SHOW_RECOMMENDED_2040277927612a5268d7c6b1_22890271(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('ITEM'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if ((isset($_smarty_tpl->tpl_vars['ITEM']->value['recommended']))) {
echo App\Purifier::decodeHtml(App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['recommended'],'ConfReport'));
} else { ?>-<?php }
}}
/*/ smarty_template_function_SHOW_RECOMMENDED_2040277927612a5268d7c6b1_22890271 */
/* smarty_template_function_HIGHLIGHT_ROW_2040277927612a5268d7c6b1_22890271 */
if (!function_exists('smarty_template_function_HIGHLIGHT_ROW_2040277927612a5268d7c6b1_22890271')) {
function smarty_template_function_HIGHLIGHT_ROW_2040277927612a5268d7c6b1_22890271(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('ITEM'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (!$_smarty_tpl->tpl_vars['ITEM']->value['status'] && (empty($_smarty_tpl->tpl_vars['ITEM']->value['mode']) || $_smarty_tpl->tpl_vars['ITEM']->value['mode'] == 'showErrors')) {?>class="table-danger font-weight-bold js-wrong-status" data-js="length"<?php } elseif (!$_smarty_tpl->tpl_vars['ITEM']->value['status'] && (isset($_smarty_tpl->tpl_vars['ITEM']->value['mode'])) && $_smarty_tpl->tpl_vars['ITEM']->value['mode'] == 'showWarnings') {?>class="table-warning font-weight-bold js-wrong-status" data-js="length"<?php } elseif (!$_smarty_tpl->tpl_vars['ITEM']->value['status'] && (isset($_smarty_tpl->tpl_vars['ITEM']->value['mode'])) && $_smarty_tpl->tpl_vars['ITEM']->value['mode'] == 'showInfo') {?>class=""<?php }
}}
/*/ smarty_template_function_HIGHLIGHT_ROW_2040277927612a5268d7c6b1_22890271 */
}
