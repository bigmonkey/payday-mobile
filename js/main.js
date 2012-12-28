

function update_date(main,a, b, c){ 
		var month = a.options[a.selectedIndex].value;
		var day = b.options[b.selectedIndex].value;
		var year = c.options[c.selectedIndex].value;
   main.value=year+'-'+month+'-'+day;
} 

function combine_three(main, a, b, c){ 
    main.value=a.value+b.value+c.value;
} 

$(document).ready(function(){
  var options = {
    submitHandler: function(form) {
      $('#fullForm').fadeOut('fast');
      $('#processingMessage').fadeIn('fast');
      form.submit();
    }
  };
  // validation
  $("#fullForm").validate(options);
});           


        