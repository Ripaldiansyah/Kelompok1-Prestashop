<?php
/* Smarty version 4.3.1, created on 2023-12-17 23:34:25
  from 'C:\laragon\www\kelompok1\admin_parfume\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657f23119a75a8_91527938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3630c926ad3c2867c8e351f5cf3ce37149d98042' => 
    array (
      0 => 'C:\\laragon\\www\\kelompok1\\admin_parfume\\themes\\new-theme\\template\\content.tpl',
      1 => 1701933548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657f23119a75a8_91527938 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
