<?php

return [
    'sidebar' => [
        'dashboard' => 'Dashboard',
        'categories' => [
            'category' => 'Category Manager',
            'category_list' => 'Category List',
            'category_add' => 'Category Add',
        ],
        'products' => [
            'product' => 'Product Manager',
            'product_list' => 'Product List',
            'product_add' => 'Product Add',
        ],
        'orders'=> [
            'order' => 'Order Manager',
        ]
    ],
    'header' => [
        'language' => [
            'vi' => 'Vietnamese',
            'en' => 'English',
        ],
        'user' => [
            'hi' => 'Hi',
            'user_profile' => 'User Profile',
        ],
    ],
    'button' => [
        'add' => ':Name Add',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'detail' => 'Detail',
        'accept' => 'Accept',
        'reject' => 'Reject',
    ],
    'label' => [
        'category' => [
            'create' => ':Name Create',
            'edit' => ':Name Edit',
        ],
        'product' => [
            'create' => ':Name Create',
            'edit' => ':Name Edit',
        ],
        'order' => [
            'detail' => ':Name Detail',
        ],
    ],
    'column' => [
        'action' => 'Action',
        'category' => [
            'id' => 'ID',
            'name' => 'Category Name',
            'parent_directory' => 'Parent directory',
        ],
        'product' => [
            'id' => 'ID',
            'name' => 'Product Name',
            'category_name' => 'Category Name',
            'description' => 'Description',
            'price' => 'Price',
            'price_sale' => 'Price Sale',
            'quantity' => 'Quantity',
            'thumbnail' => 'Thumbnail',
            'gallery' => 'Gallery',
            'size' => 'Size',
            'status' => 'Status',
            'category_id' => 'Category ID',
        ],
        'order' => [
            'id' => 'ID',
            'customer_name' => 'Customer Name',
            'order_date' => 'Order Date',
            'total' => 'Total',
            'status' => 'Status',
            'phone' => 'Phone',
            'subtotal' => 'Subtotal',
        ],
    ],
    'name_modules' => [
        'category' => 'Category',
        'product' => 'Product',
        'order' => 'Order',
    ],
    'status' => [
        'product' => [
            'stocking' => 'Stocking',
            'out_of_stock' => 'Out of Stock',
        ],
        'order' => [
            'pending' => 'Pending',
            'accepted' => 'Accept',
            'reject' => 'Reject',
        ],
    ],
    'notification' => [
        'update_success' => 'Update Successfully !',
        'errors' => 'Update Error !',
    ],
];
