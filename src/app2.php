<?php


use Jaz\session\Documents\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';

$nc = new \Jaz\session\DocumentsSolid\NotaDeCredito();
$csv= $nc->getDataCSV();
var_dump($csv);
/**
 * remision no tiene pdf solo ordenes
 */


