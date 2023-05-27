<?php

namespace Jaz\session\Documents;

use Jaz\session\Exportable;

class Invoice implements Exportable
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
     * @return resource|string
     */
    public function getPDF():string
    {
        $storeLocation = dirname(__DIR__) . '/sources/ejemplo.pdf';
        $filePDF=popen($storeLocation,'r');
        if ($filePDF !== FALSE){
            return  $filePDF;
        }
        return 'upss!';
    }

}