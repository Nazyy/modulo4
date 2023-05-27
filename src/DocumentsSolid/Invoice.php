<?php

namespace Jaz\session\DocumentsSolid;



use Jaz\session\Solid\ExportablePDF;
use Jaz\session\Solid\ExpotableDataCSV;

class Invoice implements ExpotableDataCSV,ExportablePDF
{
    /**
     * @return array
     */
    public function getDataCSV():array
    {
        $storeLocation = dirname(__DIR__).'/sources/billings.csv';
        if (($open = fopen($storeLocation, "r")) !== FALSE) {
          return fgetcsv($open, 1000, ",");
        }
        return [];
    }

    /**
     * @return string
     */
    public function getPDF():string
    {
        $storeLocation = dirname(__DIR__) . '/sources/ejemplo.pdf';
        $filePDF=popen($storeLocation,'r');
        if ($filePDF !== FALSE){
            $data="";
            while (($linePDF=fgets($filePDF))){
                $data.=$linePDF;
            }
            return $data;
        }
        return 'upss!';
    }

}