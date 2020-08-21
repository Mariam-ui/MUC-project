<?php
use App\Content;

$contents = Content::all()->groupBy('block');
$plucked = [];
foreach ($contents as $key => $content){
    $plucked[$content[0]->block] = $content->pluck('en', 'key');
}
return $plucked;