<?php

namespace Jaz\session\Documents;

use Jaz\session\Exportable;

class NotaDeCredito implements Exportable
{
    /**
     * @return array|false|void|null
     */
    public function getDataCSV():array
    {
        $storeLocation = dirname(__DIR__).'/sources/billings.csv';
        if (($open = fopen($storeLocation, "r")) !== FALSE) {
            return fgetcsv($open, 1000, ",");
        }
    }

    /**
     * @return string
     */
    public function getPDF():string
    {
        // TODO: Implement getPDF() method.
    }


}