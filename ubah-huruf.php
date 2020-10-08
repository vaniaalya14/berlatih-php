<?php
$char = '';
function ubah_huruf($string){
    for ($i=0;$i < count($string); $i++){
        global $char;
        $char = substr($i, 1);
        $char = ('z' === $char ? 'a' : ++$char);
        echo $char;
    };
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>