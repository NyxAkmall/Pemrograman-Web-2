<?php
function kelulusan($_nilai){
    if ($_nilai > 55){
        return 'Selamat Anda Lulus';
    }else{
        return 'Anda Tidak Lulus';
    }
}

function grade($_nilai){
    if ($_nilai > 0&&85){
        return 'A';
    }elseif ($_nilai >= 85){
        return 'B';
    }elseif($_nilai >= 56){
        return 'C';
    }elseif($_nilai >= 36){
        return 'D';
    }elseif($_nilai >= 10){
        return 'E';
    }else{
        return "Tidak ada Nilai";
    }
}
?>