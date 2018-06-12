<script src="/Blog/include/jquery.js"></script>
<script type='text/javascript'>

function ToggleTheBox(){
	//console.log("We're in the function"); //use this to var_dump// use single quotes inside console.log
	//Error load in the console
	$('.theBox').toggle();
}

</script>

<a href='#'onclick='ToggleTheBox();'> Toggle the box</a>
<div class='theBox' style='background-color: #eee'>
	This is the box
</div>


<!--other examples that worked-->

<script type='text/javascript'>
	console.log("I'm here");
	$('myInterests.php').ready(function(){
		$('.javaTest').fadeIn('slow');
	})
</script>

<!-- .javaTest{
	display: none;
} -->
