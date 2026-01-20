<?php

function language_list(...$languages)
{
    return $languages;
}

function add_to_language_list($language_list, $new_language){
    $language_list[] = $new_language;
    return $language_list;
}

function prune_language_list($language_list){
    return array_splice($language_list,1);
}

function current_language($language_list){
    return $language_list[0];
}

function language_list_length ($language_list){
    return count($language_list);
}