<?php
/* Smarty version 3.1.39, created on 2021-08-28 18:25:38
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/DashBoard/WidgetDescription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a638276ee05_51905656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb21cbfa9dcb5d31fd92f552eb75471fa6369e89' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/Vtiger/DashBoard/WidgetDescription.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a638276ee05_51905656 (Smarty_Internal_Template $_smarty_tpl) {
?><p class="font-small u-font-weight-450 ellipsis-2-lines <?php if ((isset($_smarty_tpl->tpl_vars['CLASS']->value))) {
echo $_smarty_tpl->tpl_vars['CLASS']->value;
}?>" title="<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</p>
<?php }
}
