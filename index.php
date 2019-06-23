<?php
/**
 * Created by PhpStorm.
 * User: kkham
 * Date: 6/23/2019
 * Time: 6:27 PM
 */

main::start("example.csv");
echo 'test 101 kalpit khamar';

class main  {
    static public function start($filename) {
        $records = csv::getRecords($filename);
        $table = html::generateTable($records);
    }
}