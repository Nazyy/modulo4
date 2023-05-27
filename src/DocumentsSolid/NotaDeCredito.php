<?php

namespace Jaz\session\DocumentsSolid;


use Jaz\session\Solid\ExpotableDataCSV;

class NotaDeCredito implements ExpotableDataCSV
{
    /**
     * @return array
     */
    public function getDataCSV():array
    {
        $storeLocation = dirname(__DIR__) . '/sources/billings.csv';
        if (($open = fopen($storeLocation, "r")) !== FALSE) {
            $data = fgetcsv($open, 1000, ",");
            for ($i=0 ; $i <= count($data); $i++) {


                $nc[] = [
                    'fecha' => $data[0],
                    'uuid' => $data[1],
                ];
            }
        }

        return $nc;
    }


}