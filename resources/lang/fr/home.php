<?php
use App\Models\Contents as Contents;
$contents = Contents::all()->groupBy('block');
if( !empty($contents) ){
    $plucked = [];
    foreach ($contents as $key => $content){
        $plucked[$content[0]->block] = $content->pluck('fr', 'key');
    }
    return $plucked;
}