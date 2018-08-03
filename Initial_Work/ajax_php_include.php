<?php

include('Blog/config/config.php');
include('Blog/include/db_query.php');

function saveBlogPost($content){
    $result = dbQuery("
			INSERT INTO ajaxpractice(content)
			VALUES (:content)
		",
		array('content' => $content)
		)->fetchAll();
}

function displayBlogPost(){
	$result = dbQuery("
		SELECT *
		FROM comments
	")->fetchAll();

	return $result;
}
