<?php
/* Smarty version 3.1.39, created on 2021-08-28 17:16:37
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/menu/Label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5355743502_60074924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f3fab59760384bd9951e94327e28e63f6dad1c9' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/menu/Label.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612a5355743502_60074924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('ICON', Vtiger_Menu_Model::getMenuIcon($_smarty_tpl->tpl_vars['MENU']->value,Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU_MODULE']->value)));
if (((isset($_smarty_tpl->tpl_vars['MENU']->value['active'])) && $_smarty_tpl->tpl_vars['MENU']->value['active']) || $_smarty_tpl->tpl_vars['PARENT_MODULE']->value == $_smarty_tpl->tpl_vars['MENU']->value['id']) {
$_smarty_tpl->_assignInScope('ACTIVE', 'true');
} else {
$_smarty_tpl->_assignInScope('ACTIVE', 'false');
}?><li class="tpl-menu-Label c-menu__item js-menu__item nav-item menuLabel <?php if (!$_smarty_tpl->tpl_vars['HASCHILDS']->value) {?>hasParentMenu<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" data-js="mouseenter mouseleave"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == 'true') {?>active<?php } else { ?>collapsed<?php }
if ($_smarty_tpl->tpl_vars['ICON']->value) {?> hasIcon<?php }
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> js-submenu-toggler is-submenu-toggler<?php }?>" href="#"<?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> data-toggle="collapse" data-target="#submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" role="button" aria-haspopup="true" aria-expanded="<?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
" aria-controls="submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
"<?php } else { ?> role="heading"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
<span class="c-menu__item__text js-menu__item__text" title="<?php echo Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU_MODULE']->value);?>
" data-js="class: u-white-space-n"><?php echo Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU_MODULE']->value);?>
</span><?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?><span class="toggler" aria-hidden="true"><span class="fas fa-plus-circle"></span><span class="fas fa-minus-circle"></span></span><?php }?></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('menu/SubMenu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li>
<?php }
}
