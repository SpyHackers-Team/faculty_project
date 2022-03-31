<?php
function lang( $phrase ) {

    static $lang = array(

        // Login Page

        'WELCOME'   => 'Welcome',
        'USERNAME'  => 'Username',
        'PASSWORD'  => 'Password',
        'LOGIN'     => 'Login',

        // Levels Page

        'FIRST_YEAR'    => 'First Level',
        'SECOND_YEAR'   => 'Second Level',
        'THIRD_YEAR'    => 'Third Level',
        '4TH_YEAR'      => 'Fourth Level',
        'VIEW_SUBJECT'  => 'View Subject',

        // Subject Page
        'SUBJECT_FIRST_YEAR'    => 'Subjects Of First Level',
        'SUBJECT_SECOND_YEAR'   => 'Subjects Of Second Level',
        'SUBJECT_THIRD_YEAR'    => 'Subjects Of Third Level',
        'ADD_SUBJECT'           => 'Add Subject',
        'SUBJECT_NAME'          => 'Subject Name',
        'SUBJECT_DOCTOR'        => 'Subject Doctor',
        'SUBJECT_PHOTO'         => 'Subject Photo',
        'SUBMIT_SUBJECT'        => 'Submit',
        'VIEW_SUBJECT_YEAR'          => 'View',


    );

    return $lang[$phrase];

}
?>