<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__e470cfdebf6275a33f449e3daf095d14 */
class __TwigTemplate_f03f4331cb2c49c74e02b021bb750830 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/kelompok1/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/kelompok1/img/app_icon.png\" />

<title>Produk • KELOMPOK 1 S7C</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id-id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Baca pesan';
    var token = 'b3abb2b58d77f8748e6b830b5bfb017a';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '2b0ff85ca808dfd6e2cb4e4d92067ba3';
    var choose_language_translate = 'Pilih Bahasa:';
    var default_language = '1';
    var admin_modules_link = '/kelompok1/admin_parfume/index.php/improve/modules/manage?_token=akyRQz7ISr7LgNEBoZoA1DLIjfq89M2MEgOgb3D1rvw';
    var admin_notification_get_link = '/kelompok1/admin_parfume/index.php/common/notifications?_token=akyRQz7ISr7LgNEBoZoA1DLIjfq89M2MEgOgb3D1rvw';
    var admin_notification_push_link = adminNotificationPushLink = '/kelompok1/admin_parfume/index.php/common/notifications/ack?_token=akyRQz7ISr7LgNEBoZoA1DLIjfq89M2MEgOgb3D1rvw';
    var tab_modules_list = '';
    var update_success_msg = 'update berhasil';
";
        // line 43
        echo "    var search_product_msg = 'Cari produk';
  </script>



<link
      rel=\"preload\"
      href=\"/kelompok1/admin_parfume/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/kelompok1/admin_parfume/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/admin_parfume/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/admin_parfume/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/kelompok1\\/admin_parfume\\/\";
var baseDir = \"\\/kelompok1\\/\";
var changeFormLanguageUrl = \"\\/kelompok1\\/admin_parfume\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=akyRQz7ISr7LgNEBoZoA1DLIjfq89M2MEgOgb3D1rvw\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e";
        // line 70
        echo "\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/admin_parfume/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/admin_parfume/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/admin_parfume/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/admin_parfume/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"tex";
        // line 90
        echo "t/javascript\" src=\"/kelompok1/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/ps_mbo/views/js/recommended-modules.js?v=4.6.1\"></script>


  <link href=\"/kelompok1/admin_parfume/themes/new-theme/public/light_theme.css\" rel=\"stylesheet\" type=\"text/css\">
";
        // line 97
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-id adminproducts\"
  data-base-url=\"/kelompok1/admin_parfume/index.php\"  data-token=\"akyRQz7ISr7LgNEBoZoA1DLIjfq89M2MEgOgb3D1rvw\">

<div id=\"main-div\" class=\"light_display_layout\">
          
      <div class=\"-notoolbar\">
        

        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 113
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        
      </div>
    </div>

";
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 97
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 113
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__e470cfdebf6275a33f449e3daf095d14";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 119,  203 => 113,  192 => 97,  183 => 119,  171 => 113,  150 => 97,  141 => 90,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e470cfdebf6275a33f449e3daf095d14", "");
    }
}
