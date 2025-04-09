<?php 
/*این فانکشن که زیر تعریف شد یک نوع api است که ما تعریف کردیم که کارش اضافه کردن یک منوی کاستوم است */
function simple_plugin_add_menu()
{
    add_menu_page('منوی سفارشی',
    'منوی سفارشی',
    'manage_options',
    'simple_menu',
    'simple_menu_callvack'
                );
}

add_action('admin_menu','simple_plugin_add_menu');


