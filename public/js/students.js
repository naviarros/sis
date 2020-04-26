$(document).ready(function(){
	$('#grade11').hide();
	$('#grade12').hide();
	$('#level').on('change', function(){
		if(this.value == '')
		{
			$('#grade11').hide();
			$('#grade12').hide();
		}

		if(this.value == '11')
		{
			$('#grade12').hide();
			$('#grade11').show();
		}

		if(this.value == '12')
		{
			$('#grade12').show();
			$('#grade11').hide();
		}
	});
});