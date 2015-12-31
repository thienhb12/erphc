<?php
return [

    'audit-log'           => [
        'category'              => 'Users',
        'msg-index'             => 'Accessed list of users.',
        'msg-show'              => 'Accessed details of user: :username.',
        'msg-store'             => 'Created new user: :username.',
        'msg-edit'              => 'Initiated edit of user: :username.',
        'msg-replay-edit'       => 'Initiated replay edit of user: :username.',
        'msg-update'            => 'Submitted edit of user: :username.',
        'msg-destroy'           => 'Deleted user: :username.',
        'msg-enable'            => 'Enabled user: :username.',
        'msg-disabled'          => 'Disabled user: :username.',
        'msg-enabled-selected'  => 'Enabled multiple user.',
        'msg-disabled-selected' => 'Disabled multiple user.',
    ],

    'status'              => [
        'created'                   => 'User successfully created',
        'updated'                   => 'User successfully updated',
        'deleted'                   => 'User successfully deleted',
        'global-enabled'            => 'Selected users enabled.',
        'global-disabled'           => 'Selected users disabled.',
        'enabled'                   => 'User enabled.',
        'disabled'                  => 'User disabled.',
        'no-user-selected'          => 'No user selected.',
    ],

    'error'               => [
        'cant-be-edited'                => 'User cannot be edited',
        'cant-be-deleted'               => 'User cannot be deleted',
        'cant-be-disabled'              => 'User cannot be disabled',
        'login-failed-user-disabled'    => 'That account has been disabled.',
        'perm_not_found'                => 'Could not find permission #:id.',
        'user_not_found'                => 'Could not find user #:id.',
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Admin | Users',
            'description'       => 'List of users',
            'table-title'       => 'User list',
        ],
        'show'              => [
            'title'             => 'Admin | User | Show',
            'description'       => 'Displaying user: :full_name',
            'section-title'     => 'User details'
        ],
        'create'            => [
            'title'            => 'Admin | User | Create',
            'description'      => 'Creating a new user',
            'section-title'    => 'New user'
        ],
        'edit'              => [
            'title'            => 'Admin | User | Edit',
            'description'      => 'Editing user: :full_name',
            'section-title'    => 'Edit user'
        ],
    ],

    'columns'           => [
        'id'                        =>  'ID',
        'username'                  =>  'Tên tài khoản',
        'first_name'                =>  'Tên nhân viên',
        'last_name'                 =>  'Last name',
        'name'                      =>  'Name',
        'assigned'                  =>  'Chỉ định hiển thị',
        'roles'                     =>  'Cấp độ tài khoản',
        'roles-not-found'           =>  'Roles not found',
        'email'                     =>  'Email',
        'type'                      =>  'Kiểu',
        'permissions'               =>  'Permissions',
        'permissions-not-found'     =>  'Permissions not found',
        'password'                  =>  'Mật khẩu',
        'password_confirmation'     =>  'Nhập lại mật khẩu',
        'created'                   =>  'Created',
        'updated'                   =>  'Updated',
        'actions'                   =>  'Actions',
        'effective'                 =>  'Hiệu lực',
        'enabled'                   =>  'Kích hoạt',
        'phone'                     =>  'Số điện thoại',
    ],

    'button'               => [
        'create'    =>  'Khởi tạo tài khoản',
    ],



];

