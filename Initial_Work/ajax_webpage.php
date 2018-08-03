<html>
    <head>
        <title>AJAX Example</title>
        <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>

        <script type='text/javascript'>
            function saveDraft(){
                //get the content of the "blogPost" field
                var postContent = $('#blogPost').val();

                //send the content to the server to be saved
                $.post('save_post_endpoint.php', {postContent}, function(contentEchoedFromServer){
                    $('#confirmContentFromServer').html(contentEchoedFromServer);
                })
            }
        </script>
    </head>
    <body>
        <textarea name='blogPost' id='blogPost'></textarea><br/>
        <input type='button' onclick='saveDraft()' value='Save Post' name='blogSubmitButton' />
				<?php
				if(isset($_REQUEST['blogSubmitButton'])){

				}
				 ?>
        <div id='confirmContentFromServer'></div>
    </body>
</html>
