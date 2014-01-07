// $(document).ready(function(){
// var showtext ="more details";
// $('#data').hide();

// });

// $('#a_btn').click(function(){

// $('#data').show('slow','linear');
// showtext ="less details";
// });
$('#a_btn').toggle(function  () {
	// body...
	$('#a_btn').text('more details');
},function(){

$('#a_btn').text('less details');

});	
