<?php
/* Smarty version 4.3.1, created on 2023-12-17 23:36:11
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657f237b4ff112_87359307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1678717094,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_657f237b4ff112_87359307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\kelompok1\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\b0\\9c\\59\\b09c592e75220aa8db570f0ddaadba89dca4c06d_2.file.helpers.tpl.php',
    'uid' => 'b09c592e75220aa8db570f0ddaadba89dca4c06d',
    'call_name' => 'smarty_template_function_renderLogo_1665079508657f2375f40a99_39208818',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/kelompok1/index.php?controller=my-account" rel="nofollow">
      Akun Anda
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Akun Anda</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/kelompok1/index.php?controller=guest-tracking" title="Order tracking" rel="nofollow">Order tracking</a></li>
        <li><a href="http://localhost/kelompok1/index.php?controller=my-account" title="Login ke akun pelanggan" rel="nofollow">Login</a></li>
        <li><a href="http://localhost/kelompok1/index.php?controller=registration" title="Buat akun" rel="nofollow">Buat akun</a></li>
        <li>
  <a href="//localhost/kelompok1/index.php?fc=module&module=ps_emailalerts&controller=account" title="Notifikasi saya">
    Notifikasi saya
  </a>
</li>

       
	</ul>
</div>
<?php }
}
