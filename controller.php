<?php

function home_action()
{
    $posts =  get_all('posts');
    $categories =  get_all('categories');
    $authors = get_all('authors');

    include 'views/home.php';

}

function show_action($id){
	$article = get_single_post($id);

	include 'views/item.php';
}