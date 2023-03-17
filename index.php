<?php

/* Format Date From (2023-03-17 12:08:33) To (17 March 2023) */

function dateFormat($created_at)
{
    // site language it will be arabic or english
    $getLocale = 'en';


    // months
    $months_ar = ['01' => 'يناير','02' => 'فبراير','03' => 'مارس', '04' => 'أبريل', '05' => 'مايو', '06' => 'يونيو','07' => 'يوليو','08' => 'أغسطس','09' => 'سبتمبر','10' => 'أكتوبر','11' => 'نوفمبر','12' => 'ديسمبر'];
    $months_en = ['01' => 'January','02' => 'February','03' => 'March', '04' => 'April', '05' => 'May', '06' => 'June','07' => 'July','08' => 'August','09' => 'September','10' => 'October','11' => 'November','12' => 'December'];


    $createdAt = explode(' ', $created_at);
    $date = $createdAt[0]; // get date
    $time = $createdAt[1]; // get time


    $dt = explode('-', $date);
    $dt_Y = $dt[0];
    $dt_M = $dt[1];
    $dt_D = $dt[2];


    $today = date('Y-m-d');
    $Before1Day = date('Y-m-d', strtotime('-1 day'));
    $Before2Day = date('Y-m-d', strtotime('-2 day'));
    $Before3Day = date('Y-m-d', strtotime('-3 day'));
    $Before4Day = date('Y-m-d', strtotime('-4 day'));
    $Before5Day = date('Y-m-d', strtotime('-5 day'));
    $Before6Day = date('Y-m-d', strtotime('-6 day'));
    $Before7Day = date('Y-m-d', strtotime('-7 day'));


    switch($date) {
        case($Before1Day):
            $result = '1 day ago';
            break;
        case($Before2Day):
            $result = '2 day ago';
            break;
        case($Before3Day):
            $result = '3 day ago';
            break;
        case($Before4Day):
            $result = '4 day ago';
            break;
        case($Before5Day):
            $result = '5 day ago';
            break;
        case($Before6Day):
            $result = '6 day ago';
            break;
        case($Before7Day):
            $result = '1 week ago';
            break;
        default:

            // check language.
            if ($getLocale == 'ar'):
                $thisMonth = $months_ar[$dt_M];
            else:
                $thisMonth = $months_en[$dt_M];
            endif;


            $result = $dt_D .' '. $thisMonth .' '. $dt_Y;
    }

    return $result;
}


echo dateFormat('2023-03-17 12:08:33');

?>