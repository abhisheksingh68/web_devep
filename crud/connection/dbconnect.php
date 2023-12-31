<?php

include_once __DIR__.'/init.php';

try{

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if($conn = mysqli_connect($settings['db:config']['host'],
    $settings['db:config']['user'],
    $settings['db:config']['password'],
    $settings['db:config']['dbname'])){

        if($settings['connection:debug']==true){
            print_r($conn);
            exit();
        }

    }else{
        throw new Exception();
    }


}catch(Exception $e){
    echo $e->getMessage();
    exit('DB connection failed.'.mysqli_connect_error());
}
?>