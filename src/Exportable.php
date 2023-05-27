<?php
namespace Jaz\session;
interface Exportable
{
    /**
     * @return mixed
     */
    public function getDataCSV();
    public function getPDF();


}