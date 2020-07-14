<?php
if (isset($_POST['newUser'])) :
    //print_r($_POST);
    $userdata = array(
        'user_login'    =>   $_POST['username'],
        'user_email'    =>   $_POST['email'],
        'user_pass'     =>   $_POST['password'],
        'user_url'      =>   $_POST['website'],
        'first_name'    =>   $_POST['fname'],
        'last_name'     =>   $_POST['lname'],
        'nickname'      =>   $_POST['nickname'],
        'd  escription'   =>   $_POST['bio']
    );
    $user = wp_insert_user( $userdata );
    print_r($user);
endif;
?>