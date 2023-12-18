<?php
/* Smarty version 4.3.1, created on 2023-12-17 23:36:06
  from 'C:\laragon\www\kelompok1\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657f237601f402_44801185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b09c592e75220aa8db570f0ddaadba89dca4c06d' => 
    array (
      0 => 'C:\\laragon\\www\\kelompok1\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678717094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657f237601f402_44801185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\kelompok1\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\b0\\9c\\59\\b09c592e75220aa8db570f0ddaadba89dca4c06d_2.file.helpers.tpl.php',
    'uid' => 'b09c592e75220aa8db570f0ddaadba89dca4c06d',
    'call_name' => 'smarty_template_function_renderLogo_1665079508657f2375f40a99_39208818',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1665079508657f2375f40a99_39208818 */
if (!function_exists('smarty_template_function_renderLogo_1665079508657f2375f40a99_39208818')) {
function smarty_template_function_renderLogo_1665079508657f2375f40a99_39208818(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1665079508657f2375f40a99_39208818 */
}
