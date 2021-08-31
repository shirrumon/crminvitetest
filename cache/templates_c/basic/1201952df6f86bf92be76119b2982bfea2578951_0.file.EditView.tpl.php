<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:28:54
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Users/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a6446a77257_31789300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1201952df6f86bf92be76119b2982bfea2578951' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Users/EditView.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a6446a77257_31789300 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-EditView --><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE', $_prefixVariable1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewBlocks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><input type="hidden" name="isPreference" value="<?php echo $_smarty_tpl->tpl_vars['IS_PREFERENCE']->value;?>
"/><input type="hidden" name="timeFormatOptions" data-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['DAY_STARTS']->value);?>
"/><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Users-EditView -->

<?php }
}
