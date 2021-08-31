<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:30:40
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Users/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a64b04f72d5_77382028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec804fcae0f27535e02607f22061b004e6b8bf3' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Users/Login.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a64b04f72d5_77382028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('_DefaultLoginTemplate', \App\Layout::getTemplatePath('Login.Default.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplate', \App\Layout::getTemplatePath('Login.Custom.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplateFullPath', "layouts/basic/".((string)$_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value));?>

<?php if (file_exists($_smarty_tpl->tpl_vars['_CustomLoginTemplateFullPath']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_DefaultLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
