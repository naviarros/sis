$(document).ready(function(){
	$("#chrg1").hide();
	$("#chrg2").hide();
	$("#inf").hide();
	$(".yesexp").hide();

	$('#license').hide();

	$('#passer').on('change', function(){
		if(this.value == 'Yes')
		{
			$('#license').show();
		}
		if(this.value == 'No' || this.value == '')
		{
			$('#license').hide();
		}
	});
	// $("#method").click(function(){
	// 	if(this.value == "DepEd Voucher")
	// 	{
	// 		$("#sect").click(function(){
	// 			if(this.value == "Public")
	// 			{
	// 				$("#chrg2").show();
	// 				$("#inf").show();
	// 				$("#totalfee").val("0.00");
	// 			}

	// 			if(this.value == "Private")
	// 			{
	// 				$("#chrg2").show();
	// 				$("#inf").hide();
	// 				$("#totalfee").val("2500.00");
	// 				$("#modeofpayment").click(function(){
	// 					if(this.value == "Full Payment")
	// 					{
	// 						$("#totalfee").val("2500.00");
	// 					}
	// 					if(this.value == "Two Payment")
	// 					{
	// 						$("#totalfee").val("1250.00");
	// 					}
	// 				});
	// 			}
	// 		});
	// 	}

	// 	if(this.value == "Cash")
	// 	{
	// 		$("#sect").click(function(){
	// 			if(this.value == "Public")
	// 			{
	// 				$("#chrg2").show();
	// 				$("#modeofpayment").click(function(){
	// 					if(this.value == "Full Payment")
	// 					{
	// 						$("#totalfee").val("22500.00");
	// 					}

	// 					if(this.value == "Two Payment")
	// 					{
	// 						$("#totalfee").val("11250.00");
	// 					}
	// 				});
	// 			}
	// 		});
	// 	}
	// });

	$('#addexp').on('click', function(e){
		
	});
	// $("#sect").click(function(){
	// 	if(this.value == "Public")
	// 	{
	// 		$("#chrg2").show();
	// 		if(method.value == "DepEd Voucher")
	// 		{
	// 			$("#inf").show();
	// 		}
	// 	}
	// 	if(this.value == "Private")
	// 	{
	// 		$("#chrg2").show()
	// 	}
	// });
});

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32 || key == 9);
};

function numbersOnly(event) {
  var key = event.keyCode;
  return ((key >= 48 && key <= 57) || key == 8 || key == 9);
};

function experience(){
	$('#xp').on('change', function(){
		if(this.value == 'Yes')
		{
			$(".yesexp").show();
		}
		else if(this.value == 'No')
		{
			$(".yesexp").hide();	
		}
	});
}

function subjects(){
	$("#track").click(function(){
		if (this.value == '') {
			$('#sections').html('');
		}
		if(this.value == 'ABM'){
			var newOptions = {
				'11-1': '11-1',
				'11-2': '11-2',
				'11-3': '11-3',
				'11-4': '11-4'
			};
			var selectedOption = '';
			var select = $('#sections');
			if(select.prop){
				var options = select.prop('options');
			}
			else {
				var options = select.attr('options');
			}
			$('option', select).remove();
			$.each(newOptions, function(val, text){
				options[options.length] = new Option(text, val);
			});
			select.val(selectedOption);
		}
		if(this.value == 'STEM'){
			var newOptions = {
				'11-1': '11-1',
				'11-2': '11-2',
				'11-3': '11-3',
				'11-4': '11-4'
			};
			var selectedOption = '';
			var select = $('#sections');
			if(select.prop){
				var options = select.prop('options');
			}
			else {
				var options = select.attr('options');
			}
			$('option', select).remove();
			$.each(newOptions, function(val, text){
				options[options.length] = new Option(text, val);
			});
			select.val(selectedOption);
		}
	});
}

function enrollsubj(){
	$("#sbjs").click(function(){
		if(this.value == "1")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "2")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "3")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "4")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "5")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "6")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "7")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "8")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "9")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "10")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "11")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "12")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "13")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "14")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "15")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "16")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "17")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "18")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "19")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "20")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "21")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "22")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "23")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "24")
		{
			$("#grsec").css("display", "flex");
		}
		else if(this.value == "25")
		{
			$("#grsec").css("display", "flex");
		}
		else {
			$("#grsec").css("display", "none");
		}
	});
}

function zip(){
	$("#mun").click(function(){
		if(this.value == "-----")
		{
			$("#zipcode").html("-----");
		}
		if(this.value == "Sta. Mesa")
		{
			var newOptions = {
			    '1016' : '1016'
			};
			var selectedOption = '';

			var select = $('#zipcode');
			if(select.prop) {
			  var options = select.prop('options');
			}
			else {
			  var options = select.attr('options');
			}
			$('option', select).remove();

			$.each(newOptions, function(val, text) {
			    options[options.length] = new Option(text, val);
			});
			select.val(selectedOption);
		}
	});
}

function brgy(){
	$("#bgy").click(function(){
		if(this.value == "Barangay 587")
		{
			var newOptions = {
			    '1016' : '1016'
			};
			var selectedOption = '';

			var select = $('#zip');
			if(select.prop) {
			  var options = select.prop('options');
			}
			else {
			  var options = select.attr('options');
			}
			$('option', select).remove();

			$.each(newOptions, function(val, text) {
			    options[options.length] = new Option(text, val);
			});
			select.val(selectedOption);
		}
	});
}

function sch(){
	$("#sections").click(function(){
		if(this.value == "ABM 11-1"){
			$("#sch").css("display", "block");
		}
	});
}
