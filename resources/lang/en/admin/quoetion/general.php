<?php

return [

    'audit-log'           => [
        'category'              => 'Khách hàng',
        'msg-index'             => 'Accessed list of Custommer.',
        'msg-show'              => 'Accessed details of Custommer: :name.',
        'msg-store'             => 'Created new Custommer: :name.',
        'msg-edit'              => 'Initiated edit of Custommer: :name.',
        'msg-update'            => 'Submitted edit of Custommer: :name.',
        'msg-destroy'           => 'Deleted Custommer: :name.',
        'msg-enable'            => 'Enabled Custommer: :name.',
        'msg-disabled'          => 'Disabled Custommer: :name.',
        'msg-enabled-selected'  => 'Enabled multiple Custommer.',
        'msg-disabled-selected' => 'Disabled multiple Custommer.',
    ],

    'status'              => [
        'created'                   => 'Custommer successfully created',
        'updated'                   => 'Custommer successfully updated',
        'deleted'                   => 'Custommer successfully deleted',
        'global-enabled'            => 'Selected Custommer enabled.',
        'global-disabled'           => 'Selected Custommer disabled.',
        'enabled'                   => 'Custommer enabled.',
        'disabled'                  => 'Custommer disabled.',
        'no-role-selected'          => 'No Custommer selected.',
    ],

    'error'               => [
        'cant-delete-this-role' => 'This role cannot be deleted',
        'cant-edit-this-role'   => 'This role cannot be edited',
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Quản trị | Khách hàng',
            'description'       => 'Danh sách khách hàng',
            'table-title'       => 'Danh sách khách hàng',
        ],
        'show'              => [
            'title'             => 'Admin | Role | Show',
            'description'       => 'Displaying role: :name',
            'section-title'     => 'Role details'
        ],
        'create'            => [
            'title'            => 'Quản trị | Khách hàng | Khởi tạo',
            'description'      => 'Khởi tạo khách hàng',
            'section-title'    => 'Tạo khách hàng mới'
        ],
        'edit'              => [
            'title'            => 'Admin | Role | Edit',
            'description'      => 'Editing role: :name',
            'section-title'    => 'Edit role'
        ],
    ],

    'columns'           => [
        'id'                        =>  'ID',
        'name'                      =>  'Tên khách hàng',
        'display_name'              =>  'Display name',
        'description'               =>  'Description',
        'permissions'               =>  'Permissions',
        'resync_on_login'           =>  'Re-sync on login',
        'options'                   =>  'Options',
        'users'                     =>  'Users',
        'created'                   =>  'Created',
        'updated'                   =>  'Updated',
        'actions'                   =>  'Tùy chọn',
        'enabled'                   =>  'Kích hoạt',
        'phone'                     =>  'Số điện thoại',
        'zalo'                      =>  'Zalo',
        'viber'                     =>  'Viber',
        'skyper'                    =>  'Skyper',
        'email'                     =>  'Email',
        'address'                   =>  'Địa chỉ',
        'company'                   =>  'Tên công ty',
        'gender'                    =>  'Danh xưng (Anh/Chị)',
        'male'                      =>  'Anh',
        'female'                    =>  'Chị',
        'id'                        =>  'Mã khách hàng',
        'create_by_name'                 =>  'Nhân viên kinh doanh',
        'actions'                   =>  'Tùy chọn',
    ],

    'button'               => [
        'create'    =>  'Create new role',
    ],

];
