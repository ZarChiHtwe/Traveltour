$(document).ready(function(){

	changenavcoloronscroll();
	active();
	togglenavbaricon();
	imagehover();
	// myFunction();
	// showPage();


	function changenavcoloronscroll()
	{
		//change navbar on scroll
		$(window).scroll(function(){
			$('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
		});
	}

	function active()
	{
		// Add active class to the current button (highlight it)
		var header = document.getElementById("navbarSupportedContent");
		var btns = header.getElementsByClassName("nav-link");
		for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function() {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			});
		}
	}

	function togglenavbaricon()
	{
		const nti = document.querySelector('.nti');
		let menuOpen = false;
		nti.addEventListener('click',() => {
			if(!menuOpen){
				nti.classList.add('open');
				menuOpen = true;
			}
			else{
				nti.classList.remove('open');
				menuOpen = false;
			}
		});
	}

	function imagehover()
	{
		var snippet = [].slice.call(document.querySelectorAll('.hover'));
		if (snippet.length) {
			snippet.forEach(function (snippet) {
				snippet.addEventListener('mouseout', function (event) {
					if (event.target.parentNode.tagName === 'figure') {
						event.target.parentNode.classList.remove('hover')
					} else {
						event.target.parentNode.classList.remove('hover')
					}
				});
			});
		}
	}

	// function var(){
	// 	var myVar;
	// }

	// function myFunction() {
	// 	myVar = setTimeout(showPage, 500);
	// 	var();
	// }

	// function showPage() {
	// 	document.getElementById("loader").style.display = "none";
	// 	document.getElementById("myDiv").style.display = "block";
	// }
});

