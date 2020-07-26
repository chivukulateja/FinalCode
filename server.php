<?php

// Create connection
$con = mysqli_connect( '127.0.0.1', 'root', '', 'feetech' );

if ( $con ) {

    if ( isset( $_POST['signIn'] ) ) {
        $htno = $_POST['htno'];
        $pwd =  $_POST['password'];
        // $pwd = md5( $_POST['password'] );

        $checkAccount = "SELECT * from users_data where id='$htno' AND password='$pwd' AND role = 1";
        $row = mysqli_query( $con, $checkAccount );
        // var_dump( $checkAccount );

        if ( mysqli_num_rows( $row )>0 ) {
            header( 'location: studentPage.html' );
        } else {
            $checkAccount = "SELECT * from users_data where id='$htno' AND password='$pwd' AND role = 2";
            $row = mysqli_query( $con, $checkAccount );
            // var_dump( $checkAccount );

            if ( mysqli_num_rows( $row )>0 ) {

                header( 'location: adminPage.html' );
            } else {
                header( ' location: error.html' );

            }
        }

    }
}
?>