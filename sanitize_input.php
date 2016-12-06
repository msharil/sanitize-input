<?php

function cleanInput($data)
{
    // buangkan whitespaces di mula dan akhir
    $data = trim($data);

    // gunakan stripslashes untuk elakkan  double escape if magic_quotes_gpc is enabledif(get_magic_quotes_gpc()){
    $data = stripslashes($data);}

    return $data;
}

?>
