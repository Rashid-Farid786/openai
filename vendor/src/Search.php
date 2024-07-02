<?php
namespace App;
use App\loads\Load;
$Load=new Load();
print_r($Load);die;
class Search{
    public $load=$Load->lod;
}
?>