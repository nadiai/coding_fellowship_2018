<?php

include('ajax_php_include.php');

saveBlogPost($_REQUEST['postContent']);

echo "Blog post saved! Last save date: ".date('Y-m-d h:i:s');

displayBlogPost();
