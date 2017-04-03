<?php

function cate_parent($data, $parent =1,$str="--", $select=24){
    foreach($data as $key => $val){
        $name = $val["name"];
        $id = $val["id"];
        if($val["parent_id"] == $parent){
            if($select != 0 && $id == $select){
                echo "<option value='$id' selected='selected'>$name</option>";
            }else{
                echo "<option value='$id'>$name</option>";
            }cate_parent($data, $id, $str."--");
        }

    }
}