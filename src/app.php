<?php


use Jaz\session\Documents\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';


/**
 * remision no tiene pdf solo ordenes
 */

$invoice= new Invoice();
$result=$invoice->getDataCSV();

var_dump($result);