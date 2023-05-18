<?

error_reporting(-1);

//header("Location: https://mahog55.ru/");
//header('refresh: 5; url=index.php');
//header('HTTP/1.1 200 OK');
//header('HTTP/1.1 304 Not Modified');
header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="test.txt"');


//die();


$arrTest = [
    'one' => [
        '1',
        '2'
    ]
];

$arr2 = [
    'one' => 'sdf',
    'two' => 'gfdgf',
    'three' => [
        1, 2, 3
    ]
];

extract($arr2);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




<pre>
   <? echo $one; ?>

    hello!!!!!
</pre>

<script>
    console.log({
        'RESULT': <?= json_encode() ?>,
    })
</script>


</body>
</html>




