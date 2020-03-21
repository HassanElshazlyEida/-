var filtersObject = {};
AOS.init();
//on filter change
$(".filter").on("change",function() {
	var filterName = $(this).data("filter"),
		filterVal = $(this).val();
	
	if (filterVal == "") {
		delete filtersObject[filterName];
	} else {
		filtersObject[filterName] = filterVal;
	}
	
	var filters = "";
	
	for (var key in filtersObject) {
	  	if (filtersObject.hasOwnProperty(key)) {
			filters += "[data-"+key+"='"+filtersObject[key]+"']";
	 	}
	}
	
	if (filters == "") {
		$(".product").show();
	} else {
		$(".product").hide();
		$(".product").hide().filter(filters).show();
	}
	/*
	 Search info
	 */
	
});
var updateTimer;
var $search = $("#search");
$search.keyup(function() {
  if (updateTimer) {
	clearTimeout(updateTimer);
  }

  var v = $(this).val().toLowerCase();

  updateTimer = setTimeout(function() {    
	$(".filter-categories .product").each(function() {
	  var text = $(this).text().toLowerCase();
	  text.indexOf(v) == -1
		? $(this).removeClass("displayed")
		: $(this).addClass("displayed");
	});

	$(".filter-categories .product").hide("fast", function() {
		$(".filter-categories .product.displayed").show();
	  });
 	 }, 100);
	});

  $(".filter-categories .product .product-contain div .call-us").click(function(){
	$(this).hide();
	$(this).next("span").fadeIn();
	$(this).next("span").css({"display":"block","margin":"22px 5px"});
  });
  $( ".reviews .product-review a" ).click(function( event ) {
	event.preventDefault();
	$("html, body").animate({ scrollTop: $(".show-reviews").offset().top }, 1000);
	});

  $(".photos .overlay").click(function() {
	$(".photos .overlay").hide();
	$(".photos .displayed").fadeIn();
  });

/* Start Calender Jq */
  // Variables
const select = document.getElementById('select');
let listNumbers = document.getElementById('list-numbers');
let monthHeading = document.getElementById('month-heading');
let dateSpan = document.getElementById('date-span');

// Date
let fullYear = new Date().getFullYear();

// Event
select.onchange = () => {
	let month = select.value;
	let days;
	
	if(month === 'فبراير'){
		 days = 29;
	} else if(month === 'سبتمبر' ||month === 'يوليو' || month === 'ابريل' || month === 'نوفمبر') {
		days = 30;
	} else {
		days = 31; 
	}
	
	createCalendar(days, month);
}

// Functions
const createCalendar = (days, month) => {
	dateSpan.textContent = fullYear;
	dateSpan.style.fontWeight = 'bold';
	monthHeading.textContent = month + ',';
	
  listNumbers.innerHTML = '';
	
	for(let i = 1; i <= days; i++){
		let numberDiv = document.createElement('div');
		let numberEl = document.createElement('p');
		numberEl.textContent = i;
		numberDiv.classList.add(i+month);
		numberEl.classList.add('box');
		numberDiv.appendChild(numberEl);
		listNumbers.appendChild(numberDiv);
		/*
		for unavailable days
		if(i==7){
			numberEl.classList.add('be-disabled');
		}
		and you can add attribute disabled
		*/
	}
	
}


$(document).on('click', '.appointment  .fadeIn div p', function() {
	$('.appointment .time').fadeIn();
	$('.appointment  .fadeIn div p').removeClass('change-color');
	$(this).addClass('change-color');
});

$(document).on('click', '.appointment .time', function() {
	$(".appointment .book-action").fadeIn();
});