<?php
return [
    'roles' => [
        'user' => [
            'listBuku',
            'pengajuan.create',
            'pengajuan.store',
            'buku.detail',
            'profile.profile',
            'profile.update',
            'user.dashboard',
        ],
        'staff' => [
            'staff.dashboard',
            'listBuku',
            'buku.staffdetail',
            'approve',
            'showapprove',
            'reject',

        ],
        'editor' => [
            'profile',
            'buku.editordetail',
            'editor.dashboard',
        ],
    ],
];
