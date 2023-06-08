

<?php $connect_db = new mysqli('localhost', 'root', '', 'dream_estate_db');

    if($connect_db->connect_error) {
        die ('failed to connect' . $connect_db-> error);
    }
   

?>