<?php
define("URL_BASE", "https://joannadeangelis.ca/");
$link = mysqli_connect("192.185.176.250", "joannade_prod_us", "4?fe~?hmjPga", "joannade_prod_db");
$link->query('set character_set_client=utf8');
$link->query('set character_set_connection=utf8');
$link->query('set character_set_results=utf8');
$link->query('set character_set_server=utf8');
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} 
function RemoveEspaco($str){
    $str = strtolower(utf8_decode($str)); $i=1;
    $str = strtr($str, utf8_decode('àáâãäåæçèéêëìíîïñòóôõöøùúûýýÿ'), 'aaaaaaaceeeeiiiinoooooouuuyyy');
    $str = preg_replace("/([^a-z0-9])/",'-',utf8_encode($str));
    while($i>0) $str = str_replace('--','-',$str,$i);
    if (substr($str, -1) == '-') $str = substr($str, 0, -1);
    return $str;
}
function cortaString($val, $qtd){
    $val = strip_tags(urldecode($val));
    $a = substr(html_entity_decode($val),0,$qtd);
    return htmlentities($a.'...');
}
?>