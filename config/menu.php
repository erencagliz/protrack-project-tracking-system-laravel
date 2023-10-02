<?php

return [
    'dashboard' => [
        'route' => 'dashboard',
        'icon' => 'fa fa-home',
        'permission_key' => 'dashboard_view',
        'title' => 'Ana Sayfa',
    ],
    'my_sales' => [
        'route' => 'sales.my-sales',
        'icon' => 'fa fa-basket-shopping',
        'permission_key' => 'my_sales_view',
        'title' => 'Satışlarım',
    ],
    'team_sales' => [
        'route' => 'sales.team-sales',
        'icon' => 'fa fa-basket-shopping',
        'permission_key' => 'my_sales_view',
        'title' => 'Takım Satışları',
    ],
    'all_sales' => [
        'route' => 'sales.all-sales',
        'icon' => 'fa fa-basket-shopping',
        'permission_key' => 'team_sales_view',
        'title' => 'Satışlar',
    ],
    'teams' => [
        'route' => 'teams',
        'icon' => 'fa fa-users',
        'permission_key' => 'teams_view',
        'title' => 'Takımlar',
    ],
    'calendar' => [
        'route' => 'calendar',
        'icon' => 'fa fa-calendar',
        'permission_key' => 'calendar_view',
        'title' => 'Takvim',
    ],
    'users_listing' => [
        'route' => 'users.listing',
        'icon' => 'fa fa-user',
        'permission_key' => 'users_listing_view',
        'title' => 'Kullanıcı Listesi',
    ],
    'user_groups_listing' => [
        'route' => 'user-groups.listing',
        'icon' => 'fa fa-scale-balanced',
        'permission_key' => 'user_groups_listing_view',
        'title' => 'Kullanıcı Grup Listesi',
    ],
    'add_sale_for_everyone' => [
        'route' => 'sales.add-sale-for-everyone',
        'icon' => 'fa fa-plus',
        'permission_key' => 'add_sale_for_everyone_view',
        'title' => 'Satış Ekle',
    ],
    'add_sale_for_team' => [
        'route' => 'sales.add-sale-for-team',
        'icon' => 'fa fa-plus',
        'permission_key' => 'add_sale_for_team_view',
        'title' => 'Satış Ekle',
    ],
    'pending_sales_for_everyone' => [
        'route' => 'sales.pending-sales-for-everyone',
        'icon' => 'fa fa-cart-shopping',
        'permission_key' => 'pending_sales_for_everyone_view',
        'title' => 'Bekleyen Satışlar',
    ],
    'pending_sales_for_team' => [
        'route' => 'sales.pending-sales-for-team',
        'icon' => 'fa fa-cart-shopping',
        'permission_key' => 'pending_sales_for_team_view',
        'title' => 'Bekleyen Satışlar',
    ],
    'bonuses' => [
        'route' => 'bonus.listing',
        'icon' => 'fa fa-money-bill',
        'permission_key' => 'bonuses_view',
        'title' => 'Primler',
    ],
    'files' => [
        'route' => 'files.listing',
        'icon' => 'fa fa-file',
        'permission_key' => 'files_view',
        'title' => 'Dosyalar',
    ],
    'offices' => [
        'route' => 'offices.listing',
        'icon' => 'fa fa-building',
        'permission_key' => 'offices_view',
        'title' => 'Ofisler',
    ],
    'projects' => [
        'route' => 'projects.listing',
        'icon' => 'fa fa-briefcase',
        'permission_key' => 'projects_view',
        'title' => 'Projeler',
    ],
    'offdays' => [
        'route' => 'offdays.listing',
        'icon' => 'fa fa-power-off',
        'permission_key' => 'offdays_view',
        'title' => 'İzinler',
    ],
    'products' => [
        'route' => 'products.listing',
        'icon' => 'fa fa-box',
        'permission_key' => 'products_view',
        'title' => 'Ürünler',
    ],
    'reporting' => [
        'route' => 'reporting',
        'icon' => 'fa fa-filter',
        'permission_key' => 'reporting_view',
        'title' => 'Raporlar',
    ],
    'targets' => [
        'route' => 'targets.listing',
        'icon' => 'fa fa-bullseye',
        'permission_key' => 'targets_view',
        'title' => 'Hedefler',
    ],
    'pauses' => [
        'route' => 'pauses',
        'icon' => 'fa fa-pause',
        'permission_key' => 'pauses_view',
        'title' => 'Molalar',
    ],
    'my_bonus' => [
        'route' => 'bonus.my',
        'icon' => 'fa fa-money-bill',
        'permission_key' => 'my_bonus_view',
        'title' => 'Primlerim',
    ],
    'human_resources' => [
        'route' => 'human-resources.listing',
        'icon' => 'fa fa-users',
        'permission_key' => 'human_resources_view',
        'title' => 'İnsan Kaynakları',
    ],
];
