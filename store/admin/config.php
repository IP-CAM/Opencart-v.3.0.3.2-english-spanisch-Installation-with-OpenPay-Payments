<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // HTTP
    define('HTTP_SERVER', 'http://localhost:81/porkys/carniceriaporkys.com/store/admin/');
    define('HTTP_CATALOG', 'http://localhost:81/porkys/carniceriaporkys.com/store/');

    // HTTPS
    define('HTTPS_SERVER', 'http://localhost:81/porkys/carniceriaporkys.com/store/admin/');
    define('HTTPS_CATALOG', 'http://localhost:81/porkys/carniceriaporkys.com/store/');

    // DIR
    define('DIR_APPLICATION', 'C:/xampp/htdocs/porkys/carniceriaporkys.com/store/admin/');
    define('DIR_SYSTEM', 'C:/xampp/htdocs/porkys/carniceriaporkys.com/store/system/');
    define('DIR_IMAGE', 'C:/xampp/htdocs/porkys/carniceriaporkys.com/store/image/');
    define('DIR_STORAGE', 'C:/xampp/htdocs/porkys/carniceriaporkys.com/store_storage/');
    define('DIR_CATALOG', 'C:/xampp/htdocs/porkys/carniceriaporkys.com/store/catalog/');
    define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
    define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
    define('DIR_CONFIG', DIR_SYSTEM . 'config/');
    define('DIR_CACHE', DIR_STORAGE . 'cache/');
    define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
    define('DIR_LOGS', DIR_STORAGE . 'logs/');
    define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
    define('DIR_SESSION', DIR_STORAGE . 'session/');
    define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

    // DB
    define('DB_DRIVER', 'mpdo');
    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '123123');
    define('DB_DATABASE', 'porkystore');
    define('DB_PORT', '3306');
    define('DB_PREFIX', 'oc_');

    // OpenCart API
    define('OPENCART_SERVER', 'https://www.opencart.com/');
}
else {
    // HTTP
    define('HTTP_SERVER', 'http://tienda.carniceriaporkys.com/admin/');
    define('HTTP_CATALOG', 'http://tienda.carniceriaporkys.com/');

    // HTTPS
    define('HTTPS_SERVER', 'http://tienda.carniceriaporkys.com/admin/');
    define('HTTPS_CATALOG', 'http://tienda.carniceriaporkys.com/');

    // DIR
    define('DIR_APPLICATION', '/home/prbukzibs3ed/public_html/store/admin/');
    define('DIR_SYSTEM', '/home/prbukzibs3ed/public_html/store/system/');
    define('DIR_IMAGE', '/home/prbukzibs3ed/public_html/store/image/');
    define('DIR_STORAGE', '/home/prbukzibs3ed/public_html/store_storage/');
    define('DIR_CATALOG', '/home/prbukzibs3ed/public_html/store/catalog/');
    define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
    define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
    define('DIR_CONFIG', DIR_SYSTEM . 'config/');
    define('DIR_CACHE', DIR_STORAGE . 'cache/');
    define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
    define('DIR_LOGS', DIR_STORAGE . 'logs/');
    define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
    define('DIR_SESSION', DIR_STORAGE . 'session/');
    define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

    // DB
    define('DB_DRIVER', 'mpdo');
    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'porkys');
    define('DB_PASSWORD', 'C4rniceriaporkys.com');
    define('DB_DATABASE', 'porkystore');
    define('DB_PORT', '3306');
    define('DB_PREFIX', 'oc_');

    // OpenCart API
    define('OPENCART_SERVER', 'https://www.opencart.com/');
}