<?php
function lang( $phrase ) {

    static $lang = array(

        // Login Page

        'WELCOME'   => 'مرحبا',
        'USERNAME'  => 'اسم المستخدم',
        'PASSWORD'  => 'الرقم السري',
        'LOGIN'     => 'تسجيل الدخول',

        //----------------- Levels Page

        'USER'          => 'مستخدم',
        'EDIT'          => 'تعديل الحساب',
        'OUT'           => 'تسجيل خروج',
        'FIRST_YEAR'    => 'المستوى الأول',
        'SECOND_YEAR'   => 'المستوى الثاني',
        'THIRD_YEAR'    => 'المستوى الثالث',
        '4TH_YEAR'      => 'المستوى الرابع',
        'VIEW_SUBJECT'  => 'الدخول للمادة',

        // Subject Page
        'SUBJECT_FIRST_YEAR'    => 'مواد المستوى الأول',
        'SUBJECT_SECOND_YEAR'   => 'مواد المستوى الثاني',
        'SUBJECT_THIRD_YEAR'    => 'مواد المستوى الثالث',
        'ADD_SUBJECT'           => 'إضافة مادة',
        'SUBJECT_NAME'          => 'إسم المادة',
        'SUBJECT_DOCTOR'        => 'دكتور المادة',
        'SUBJECT_PHOTO'         => 'صورة المادة',
        'SUBMIT_SUBJECT'        => 'تسجيل',
        'VIEW_SUBJECT_YEAR'          => 'الدخول',

    );

    return $lang[$phrase];

}
?>