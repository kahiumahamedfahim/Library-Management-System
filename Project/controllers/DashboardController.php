<?php

require_once __DIR__ .
'/../helpers/auth_helper.php';

class DashboardController
{
    // MEMBER

    public function member()
    {
        auth_check('member');

        require_once __DIR__ .
        '/../views/dashboard/member.php';
    }


    // LIBRARIAN

    public function librarian()
    {
        auth_check('librarian');

        require_once __DIR__ .
        '/../views/dashboard/librarian.php';
    }


    // ADMIN

    public function admin()
    {
        auth_check('admin');

        require_once __DIR__ .
        '/../views/dashboard/admin.php';
    }
}