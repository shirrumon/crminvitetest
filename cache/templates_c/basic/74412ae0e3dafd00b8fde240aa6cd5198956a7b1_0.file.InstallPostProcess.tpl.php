<?php
/* Smarty version 3.1.39, created on 2021-08-28 15:16:35
  from '/Applications/MAMP/htdocs/install/tpl/InstallPostProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612a5353ec0534_27650002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74412ae0e3dafd00b8fde240aa6cd5198956a7b1' => 
    array (
      0 => '/Applications/MAMP/htdocs/install/tpl/InstallPostProcess.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:JSResources.tpl' => 1,
  ),
),false)) {
function content_612a5353ec0534_27650002 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-install-tpl-InstallPostProcess --><br><footer class="noprint text-center fixed-bottom c-footer"><p class="text-center text-center <?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>u-p-05per<?php }?>"><span class="d-none d-sm-inline ">Copyright &copy; YetiForce.com All rights reserved.<br/><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','Vtiger','open source project');?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce.com All rights reserved.</span></p></footer><?php $_smarty_tpl->_subTemplateRender('file:JSResources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></body></html><!-- /tpl-install-tpl-InstallPostProcess -->
<?php }
}
