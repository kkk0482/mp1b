<?php
// new class htmlTable that extends the page class
// gets the filename (ie. csv file) from the server and opens it for processing
// loads the file into an array
// puts the datasets ($data) form the array into the table class object
class htmlTable extends page{
    public function get(){

        $fname = $_REQUEST['filename'];
        $file = fopen("uploads/".$fname,"r");
        $table="";
//$data = array();
        $i=0;
        $table .='<table border : 3 px solid black; border-collapse :collapse; table style="width :80%" ; table>';
        while(! feof($file))
        {
            $data= fgetcsv($file);
            $count_total=count($data);
            $table .='<tr>';
            for($i=0;$i<$count_total;$i++){
                $table .='<td>'.$data[$i].'</td>';
            }
            $table .='</tr>';

        }
        $table .='</table>';
        fclose($file);
        stringFunctions::printThis($table);

    }
}
?>