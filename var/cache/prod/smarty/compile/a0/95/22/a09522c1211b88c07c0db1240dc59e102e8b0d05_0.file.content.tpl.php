<?php
/* Smarty version 4.3.1, created on 2023-12-17 23:36:03
  from 'C:\laragon\www\kelompok1\admin_parfume\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657f2373ddd7c1_50503781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a09522c1211b88c07c0db1240dc59e102e8b0d05' => 
    array (
      0 => 'C:\\laragon\\www\\kelompok1\\admin_parfume\\themes\\default\\template\\content.tpl',
      1 => 1701933548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657f2373ddd7c1_50503781 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
