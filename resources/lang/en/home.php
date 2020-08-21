<?php
use App\Models\Contents as Contents;
$contents = Contents::all()->groupBy('block');
$plucked = [];
foreach ($contents as $key => $content){
    $plucked[$content[0]->block] = $content->pluck('en', 'key');
}
return $plucked;