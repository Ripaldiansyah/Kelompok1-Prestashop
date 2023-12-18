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

/* __string_template__91b731c2a06064cee0806fe922a5abdb */
class __TwigTemplate_e65a2336065956ac589cced24d5bc922 extends Template
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

<title>Parfume Pria • KELOMPOK 1 S7C</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
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
    var token = '0abde5bbd5c7492c9daecfc87a553f26';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = '2b0ff85ca808dfd6e2cb4e4d92067ba3';
    var choose_language_translate = 'Pilih Bahasa:';
    var default_language = '1';
    var admin_modules_link = '/kelompok1/admin_parfume/index.php/improve/modules/manage?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU';
    var admin_notification_get_link = '/kelompok1/admin_parfume/index.php/common/notifications?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU';
    var admin_notification_push_link = adminNotificationPushLink = '/kelompok1/admin_parfume/index.php/common/notifications/ack?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU';
    var tab_modules_list = '';
    var update_success_msg = 'update b";
        // line 42
        echo "erhasil';
    var search_product_msg = 'Cari produk';
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
      <link href=\"/kelompok1/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelompok1/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/kelompok1\\/admin_parfume\\/\";
var baseDir = \"\\/kelompok1\\/\";
var changeFormLanguageUrl = \"\\/kelompok1\\/admin_parfume\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2";
        // line 70
        echo "030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
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
<scri";
        // line 90
        echo "pt type=\"text/javascript\" src=\"/kelompok1/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/ps_mbo/views/js/recommended-modules.js?v=4.6.1\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/kelompok1/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/kelompok1\\/admin_parfume\\/index.php?controller=AdminGamification&token=d23c8c677186bb46b702e63ccde8d96c\";
            var current_id_tab = 11;
        </script>    <script>
        window.userLocale  = 'id';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/kelompok1/admin_parfume/index.php/common/notifications?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 117
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-id admincategories\"
  data-base-url=\"/kelompok1/admin_parfume/index.php\"  data-token=\"929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/kelompok1/admin_parfume/index.php/modules/pseditionbasic/homepage?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=619ffe56266915bd49676717853e45ba\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/kelompok1/admin_parfume/index.php/sell/catalog/categories/new?token=784a6675385afb7cd4d87f544f35a149\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/kelompok1/admin_parfume/index.php/improve/modules/manage?token=784a6675385afb7cd4d87f544f35a149\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/kelompok1/admin_parfume/index.php/sell/orders?token=784a6675385afb7cd4d87f544f35a149\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item quick-row-";
        // line 154
        echo "link new-product-button\"
         href=\"http://localhost/kelompok1/admin_parfume/index.php/sell/catalog/products-v2/create?token=784a6675385afb7cd4d87f544f35a149\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=44879926b8fa84d3247107cde602926b\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"166\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories/12\"
        data-post-link=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminQuickAccesses&token=342a7fa849fa66a6edbbc1d1376a99e0\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Kategori - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminQuickAccesses&token=342a7fa849fa66a6edbbc1d1376a99e0\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/kelompok1/admin_parfume/index.php?controller=AdminSearch&amp;token=f74b9472a09717e00ea673e9df73b043\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" clas";
        // line 194
        echo "s=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Nama\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor invoice\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data";
        // line 208
        echo "-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Batal</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Akses cepat</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=619ffe56266915bd49676717853e45ba\"
             data-item=\"Katalog evaluasi\"
    >Katalog evaluasi</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/kelompok1/admin_parfume/index.php/sell/catalog/categories/new?token=784a6675385afb7cd4d87f544f35a149\"
             data-item=\"Kategori baru\"
    >Kategori baru</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/kelompok1/admin_parfume/index.php/improve/modules/manage?token=784a6675385afb7cd4d87f544f35a149\"
             data-item=\"Modul terpasang\"
    >Modul terpasang</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/kelompok1/admin_parfume/index.php/sell/orders?token=784a6675385afb7cd4d87f544f35a149\"
             data-item=\"Penjualan\"
    >Penjualan</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/kelompok1/admin_parfume/index.php/sell/catalog/products-v2/create?token=784a6675385afb7cd4d87f544f35a149\"
             data-item=\"Produk baru\"
    >Produk baru</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=";
        // line 248
        echo "44879926b8fa84d3247107cde602926b\"
             data-item=\"Voucher baru\"
    >Voucher baru</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"165\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/categories/12\"
      data-post-link=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminQuickAccesses&token=342a7fa849fa66a6edbbc1d1376a99e0\"
      data-prompt-text=\"Harap namai shortcut ini:\"
      data-link=\"Kategori - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminQuickAccesses&token=342a7fa849fa66a6edbbc1d1376a99e0\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/kelompok1/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                        ";
        // line 296
        echo "  <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pesanan<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Pelanggan<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa <strong><a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=242af0e88f5975e6099ef5320e9a8943\">troli yang ditinggalkan</a></strong>?<br>Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Aktifkah Anda di media sosial ak";
        // line 346
        echo "hir-akhir ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/kelompok1/img/pr/default.jpg\" alt=\"Siti\" /></span>
        <span class=\"employee_profile\">Welcome back Siti</span>
      </div>

      <a class=\"dropdo";
        // line 398
        echo "wn-item employee-link profile-link\" href=\"/kelompok1/admin_parfume/index.php/configure/advanced/employees/1/edit?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\">
      <i class=\"material-icons\">edit</i>
      <span>Profile Anda</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-id&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-id&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/kelompok1/admin/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=n1jBlnyVEOT0OXO_9u8LWy44NR2QrKDt0kmvf_K7T-I&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-id&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=h";
        // line 418
        echo "elp-center-id&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminLogin&amp;logout=1&amp;token=7abec8e3344461e8c7eda16b7e5bab3c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/kelompok1/admin_parfume/index.php/configure/advanced/employees/toggle-navigation?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/kelompok1/admin_parfume/index.php/modules/pseditionbasic/homepage?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"144\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/kelompok1/admin_parfume/index.php/modules/pseditionbasic/homepage?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <";
        // line 461
        echo "i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminDashboard&amp;token=6d4d54c4a757a2ea1dd8826cece0beb7\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Jual</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/kelompok1/admin_parfume/index.php/sell/orders/?_token=929lZtAhaRkPTNpIWP9jNqe";
        // line 500
        echo "BqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Penjualan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/orders/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Penjualan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/orders/invoices/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Invoice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/orders/credit-slips/?_token=929lZtA";
        // line 530
        echo "haRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Nota kredit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/orders/delivery-slips/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Nota pengiriman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCarts&amp;token=242af0e88f5975e6099ef5320e9a8943\" class=\"link\"> Daftar belanja
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/kelompok1/admin_parfume/index.php/sell/catalog/products?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                ";
        // line 562
        echo "    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/catalog/products?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/catalog/categories?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Kategori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/catalog/monitoring/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
             ";
        // line 592
        echo "                 
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminAttributesGroups&amp;token=7af6d8b12714f60d1491f1070d3646e6\" class=\"link\"> Atribut dan Fitur
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/catalog/brands/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Brand dan Supplier
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/attachments/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCartRules&amp;token=44879926b8fa84d3247107cde602926b\" class=\"link\"> Diskon
    ";
        // line 620
        echo "                            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/stocks/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Stok
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/kelompok1/admin_parfume/index.php/sell/customers/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/kelompok1/admin_parfume/inde";
        // line 652
        echo "x.php/sell/customers/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/addresses/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Alamat
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCustomerThreads&amp;token=df5c90859a227a65ca6514d2c151017e\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Layanan Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                           ";
        // line 683
        echo " 
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCustomerThreads&amp;token=df5c90859a227a65ca6514d2c151017e\" class=\"link\"> Layanan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/kelompok1/admin_parfume/index.php/sell/customer-service/order-messages/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Pesan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminReturn&amp;token=1b5026b3638891b5eb01828791308821\" class=\"link\"> Retur barang
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/kelompok1/admin_parfume/index.php/modules/metrics/legacy/stats?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
               ";
        // line 713
        echo "       <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistik
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/kelompok1/admin_parfume/index.php/modules/metrics/legacy/stats?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Statistik
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/kelompok1/admin_parfume/index.php/modules/metrics?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Peningkata";
        // line 747
        echo "n</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/kelompok1/admin_parfume/index.php/modules/mbo/modules/catalog/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modul
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/kelompok1/admin_parfume/index.php/modules/mbo/modules/catalog/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/modules/manage?_token=929lZtAhaRkPTNpIWP";
        // line 777
        echo "9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/kelompok1/admin_parfume/index.php/improve/design/themes/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Desain
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/design/themes/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"l";
        // line 809
        echo "ink-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/kelompok1/admin_parfume/index.php/modules/mbo/themes/catalog/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/design/mail_theme/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Tema email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/design/cms-pages/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Halaman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/design/modules/positions/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Posisi
                                </a>
                              </li>

                                                                         ";
        // line 838
        echo "         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminImages&amp;token=d81f883855b79ce7195b931ab0bda990\" class=\"link\"> Pengaturan Gambar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/kelompok1/admin_parfume/index.php/modules/link-widget/list?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Daftar tautan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCarriers&amp;token=7a0017f306ee8024e22d703083e26f16\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Pengiriman
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                    ";
        // line 869
        echo "        </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminCarriers&amp;token=7a0017f306ee8024e22d703083e26f16\" class=\"link\"> Kurir
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/shipping/preferences/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminMbeConfiguration&amp;token=f9177d96a559107f525313959c20924d\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminMbeShipping\">
             ";
        // line 899
        echo "                   <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminMbeShipping&amp;token=dade35c20ce7e51e584abe6f486c2bee\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/kelompok1/admin_parfume/index.php/improve/payment/payment_methods?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pembayaran
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/payment/payment_methods?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Cara Pembayaran
                                </a>
                              </li>

                                                                                  
 ";
        // line 929
        echo "                             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/payment/preferences?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/kelompok1/admin_parfume/index.php/improve/international/localization/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internasional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/international/localization/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Pelok";
        // line 957
        echo "alan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/international/zones/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Lokasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/international/taxes/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Pajak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/kelompok1/admin_parfume/index.php/improve/international/translations/settings?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Terjemahan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-l";
        // line 991
        echo "evelone has_submenu\" data-submenu=\"135\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=267d690114d51927c315ec5a54340b54\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-135\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=267d690114d51927c315ec5a54340b54\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminPsfacebookModule&amp;token=cdb02f3a3e672adb14aa39a5ba60e11b\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
             ";
        // line 1019
        echo "                           </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfigurasi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"146\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/kelompok1/admin_parfume/index.php/modules/pseditionbasic/settings?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/kelompok1/admin_parfume/index.php/configure/shop/preferences/preferences?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parameter Toko
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
         ";
        // line 1057
        echo "                                                   </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/shop/preferences/preferences?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Umum
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/shop/order-preferences/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Pengaturan Order
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/shop/product-preferences/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
        ";
        // line 1087
        echo "                      <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/shop/customer-preferences/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Pengaturan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/shop/contacts/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Kontak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/shop/seo-urls/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminSearchConf&amp;token=d94a627b2e7f98338daf5819d15610de\" class=\"link\"> Cari
                                </a>
                              </li>

           ";
        // line 1116
        echo "                                                                   </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/system-information/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parameter lanjutan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/system-information/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Informasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/kelompok1/admin_parfume/index.";
        // line 1145
        echo "php/configure/advanced/performance/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Kinerja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/administration/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Administrasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/emails/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/import/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Impor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-";
        // line 1176
        echo "leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/employees/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Karyawan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/sql-requests/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/logs/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Log
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/webservice-keys/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                ";
        // line 1205
        echo "                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/feature-flags/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/kelompok1/admin_parfume/index.php/configure/advanced/security/?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminKlaviyoPsConfig&amp;token=ed7515834aeaec3d8269b64762cb7830\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                    ";
        // line 1234
        echo "                                                keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">Lebih</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"163\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost/kelompok1/admin_parfume/index.php?controller=AdminSelfUpgrade&amp;token=aa52f6dca7c32647984fc2339f8951d6\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Katalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/kelompok1/admin_parfume/index.php/sell/catalog/categories?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" aria-current=\"page\">Kategori</a>
            </li>
                  </ol>
      </na";
        // line 1284
        echo "v>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Parfume Pria          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/kelompok1/admin_parfume/index.php/sell/catalog/categories/new?id_parent=12&amp;_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\"                  title=\"Tambah kategori baru\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Tambah kategori baru
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/kelompok1/admin_parfume/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fid%252Fdoc%252FAdminCategories%253Fversion%253D8.1.2%2526country%253Did/Bantuan?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/kelompok1/admin_parfume/index.php/sell/";
        // line 1331
        echo "catalog/categories/new?id_parent=12&amp;_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\"              title=\"Tambah kategori baru\"            >
              Tambah kategori baru
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Bantuan\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/kelompok1/admin_parfume/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fid%252Fdoc%252FAdminCategories%253Fversion%253D8.1.2%2526country%253Did/Bantuan?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\"
            >
              Bantuan
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1360
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"/kelompok1/admin_parfume/index.php/modules/pseditionbasic/homepage?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Kembali
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Connect to Addons marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don&#039;t have an account yet?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Sign up now</a>
                  </p>
                  <p>
                      If you created your account using Google, please follow the forgotten password procedure of Addons Marketplace to create your password : 
                      <a href=\"https://authv2.prestashop.com/pass";
        // line 1403
        echo "word/request \" target=\"_blank\">Reset your password</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/kelompok1/admin_parfume/index.php/modules/mbo/addons/login?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Alamat email</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Password</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Remember me
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Let&#039;s go!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Lupa password Anda?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal conte";
        // line 1441
        echo "nt-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirm logout</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    You are about to log out your Addons account. You might miss important updates of Addons you&#039;ve bought.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Batal\">
          <a class=\"btn btn-primary uppercase\" href=\"/kelompok1/admin_parfume/index.php/modules/mbo/addons/logout?_token=929lZtAhaRkPTNpIWP9jNqeBqGcOeU7DOt_pkCWleMU\" id=\"module-modal-addons-logout-ack\">Yes, log out</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1472
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 117
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1360
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

    // line 1472
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
        return "__string_template__91b731c2a06064cee0806fe922a5abdb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1653 => 1472,  1632 => 1360,  1621 => 117,  1612 => 1472,  1579 => 1441,  1539 => 1403,  1490 => 1360,  1459 => 1331,  1410 => 1284,  1358 => 1234,  1327 => 1205,  1296 => 1176,  1263 => 1145,  1232 => 1116,  1201 => 1087,  1169 => 1057,  1129 => 1019,  1099 => 991,  1063 => 957,  1033 => 929,  1001 => 899,  969 => 869,  936 => 838,  905 => 809,  871 => 777,  839 => 747,  803 => 713,  771 => 683,  738 => 652,  704 => 620,  674 => 592,  642 => 562,  608 => 530,  576 => 500,  535 => 461,  490 => 418,  468 => 398,  414 => 346,  362 => 296,  312 => 248,  270 => 208,  254 => 194,  212 => 154,  170 => 117,  141 => 90,  119 => 70,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__91b731c2a06064cee0806fe922a5abdb", "");
    }
}
