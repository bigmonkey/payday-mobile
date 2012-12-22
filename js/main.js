function update_birth_date(){ 

		var birthMonth = document.getElementById("birthMonth");
		var birthDay = document.getElementById("birthDay");
		var birthYear = document.getElementById("birthYear");
		var month = birthMonth.options[birthMonth.selectedIndex].value;
		var day = birthDay.options[birthDay.selectedIndex].value;
		var year = birthYear.options[birthYear.selectedIndex].value;

    document.getElementById("birth_date").value=year+'-'+month+'-'+day;
} 

function combine_three(main, a, b, c){ 
		
		//console.log('phone is ', phone);
		//console.log('a is ', a.value);
		//console.log('b is ', b.value);
		//console.log('c is ', c.value);
    main.value=a.value+b.value+c.value;
} 

function showCalendar(a){
		var actualDate = new Date(); // holds today's date
		var futureDate = new Date(); // variable to hold future date
		futureDate.setDate(futureDate.getDate()+30); // sets future date to 30 days ahead

    $(a).mobiscroll().date({
        invalid: { daysOfWeek: [0,6], daysOfMonth: ['1/1','1/21','2/18','5/27','7/4','9/2','10/14','11/11','11/28','12/25'] }, // holidays for 2013
        theme: 'ios',
        display: 'inline',
        mode: 'scroller',
        dateOrder: 'mmD ddyy',
        minDate: actualDate, 
        maxDate: futureDate,
    });    

    $(a).scroller('setDate', actualDate, true)

}

function update_paydates(a){
	var payMonthRaw = $(a).mobiscroll('getDate').getMonth()+1;
	var payMonth = (payMonthRaw < 10 ? '0' : '') + payMonthRaw;;
	var payDate = $(a).mobiscroll('getDate').getDate();
	var payYear = $(a).mobiscroll('getDate').getFullYear();
	document.getElementById("pd1m").value= payMonth;
	document.getElementById("pd1d").value= payDate;
	document.getElementById("pd1y").value= payYear;
	document.getElementById("next_pay_date").value= payYear+'-'+payMonth+'-'+payDate;

}
