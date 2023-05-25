<?
function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}
?>


<? date_default_timezone_set('Asia/Omsk');
//echo date('d:m:Y H:i:s', time() + (60 * 60 * 24 * 10));
//$date = getdate();
//debug($date);
//debug(
//    date('d:m:Y H:i:s', strtotime("+ 2 day"))
//);


$date = date_create(date('Y-m-d H:i:s'));

debug($date);

echo date_format($date, 'Y-m-d H:i:s');

date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds'));

echo '<hr>';
echo date_format($date, 'Y-m-d H:i:s');

echo '<hr>';

usleep(1000000 * 5);


echo microtime();