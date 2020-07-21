<?php
$pageTitle = "Some title";

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

if (!array_key_exists('health', $queries)) {
    $requestTimeInSeconds = $queries['requestTimeInSeconds'] ?: 10;
    for ($i=0; $i<$requestTimeInSeconds; $i++) {
        sleep(1);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title><?= $pageTitle ?></title>
    </head>
    <body>
        <p>
            Hello. Today is <?= date('l \t\h\e jS') ?>.
        </p>
    </body>
</html>
