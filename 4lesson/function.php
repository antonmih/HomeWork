<?php
function quest() {
$res = file(__DIR__.'/Quest.txt');
    
    return $res;
}


if (!empty($_FILES)) {
    $umploaded = $_FILES['newfile'];
    if ($umploaded['error'] == 0 and $umploaded['type']=="image/jpeg") { // the limitation of the format JPEG
        move_uploaded_file(
            $umploaded['tmp_name'],
            __DIR__.'/images/test.jpeg'
        );
        
    }
    else {
        echo 'OOPS';
    }

}
?>