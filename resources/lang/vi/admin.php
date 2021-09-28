<?php

return [
    'sidebar' => [
        'dashboard' => 'Dashboard',
        'categories' => [
            'category' => 'Quản lý danh mục',
            'category_list' => 'Danh sách danh mục',
            'category_add' => 'Thêm danh mục',
        ],
        'products' => [
            'product' => 'Quản lý sản phẩm',
            'product_list' => 'Danh sách sản phẩm',
            'product_add' => 'Thêm sản phẩm',
        ],
        'orders' => [
            'order' => 'Quản lý đơn hàng',
        ],
    ],
    'header' => [
        'language' => [
            'vi' => 'Tiếng Việt',
            'en' => 'Tiếng Anh',
        ],
        'user' => [
            'hi' => 'Xin chào',
            'user_profile' => 'Hồ sơ cá nhân',
        ],
    ],
    'button' => [
        'add' => 'Thêm :name',
        'edit' => 'Sửa',
        'delete' => 'Xóa',
        'detail' => 'Chi tiết',
        'accept' => 'Xác nhận',
        'reject' => 'Từ chối',
    ],
    'label' => [
        'category' => [
            'create' => 'Thên :name',
            'edit' => 'Sửa :name',
        ],
        'product' => [
            'create' => 'Thêm :name',
            'edit' => 'Sửa :name',
        ],
        'order' => [
            'detail' => 'Chi tiết :name',
        ],
    ],
    'column' => [
        'action' => 'Thao tác',
        'category' => [
            'id' => 'STT',
            'name' => 'Tên danh mục',
            'parent_directory' => 'Danh mục cha',
        ],
        'product' => [
            'id' => 'STT',
            'name' => 'Tên sản phẩm',
            'category_name' => 'Tên danh mục',
            'description' => 'Mô tả',
            'price' => 'Giá',
            'price_sale' => 'Giá khuyến mãi',
            'quantity' => 'Số lượng',
            'thumbnail' => 'Ảnh đại diện',
            'gallery' => 'Ảnh liên quan',
            'size' => 'Kích thước',
            'status' => 'Trạng thái',
            'category_id' => 'Id danh mục'
        ],
        'order' => [
            'id' => 'STT',
            'customer_name' => 'Tên khách hàng',
            'order_date' => 'Ngày đặt hàng',
            'total' => 'Tổng tiền',
            'status' => 'Trạng thái đơn hàng',
            'phone' => 'Số điện thoại',
            'subtotal' => 'Thành tiền',
        ],
    ],
    'name_modules' => [
        'category' => 'Danh mục',
        'product' => 'Sản phẩm',
        'order' => 'Đơn hàng',
    ],
    'status' => [
        'product' => [
            'stocking' => 'Còn hàng',
            'out_of_stock' => 'Hết hàng',
        ],
        'order' => [
            'pending' => 'Chờ duyệt',
            'accepted' => 'Xác nhận',
            'reject' => 'Từ chối',
        ],
    ],
    'notification' => [
        'update_success' => 'Cập nhật thành công !',
        'errors' => 'Lỗi cập nhập !',
    ],
];
