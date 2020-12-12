/** No remove 1st 3 char **/
$(document).ready(function() {
	$(".notrem3char").on("keyup", function() {
		var value = $(this).val();
		$(this).val($(this).data("initial") + value.substring(3));
	});
});

/** Disable form submissions if there are invalid fields **/
(function() {
	'use strict';
	window.addEventListener('load', function() {
		// Get the forms we want to add validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
})();

/** Auto Current Date on Input **/
let today = new Date().toISOString().substr(0, 10);
document.querySelector("input[type=date]").value = today;

/** Filter/Search Data/Info on Table Tag AJAX **/
$(document).ready(function(){
	$(".xfilterData").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$(".xdispDataOnList tbody tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});

/** Back button **/
function goBack() {
	window.history.back();
}

function PwHideShow() {
	var x = document.getElementById("passcode");
	if (x.type === "password") {
		x.type = "text";
		$('#show_hide_password i').removeClass( "fa-eye-slash" );
		$('#show_hide_password i').addClass( "fa-eye" );
	} else {
		x.type = "password";
		$('#show_hide_password i').addClass( "fa-eye-slash" );
		$('#show_hide_password i').removeClass( "fa-eye" );
	}
}

function PwHideShow1() {
	var x = document.getElementById("passcode1");
	if (x.type === "password") {
		x.type = "text";
		$('#show_hide_password1 i').removeClass( "fa-eye-slash" );
		$('#show_hide_password1 i').addClass( "fa-eye" );
	} else {
		x.type = "password";
		$('#show_hide_password1 i').addClass( "fa-eye-slash" );
		$('#show_hide_password1 i').removeClass( "fa-eye" );
	}
}

function PwHideShow2() {
	var x = document.getElementById("passcode2");
	if (x.type === "password") {
		x.type = "text";
		$('#show_hide_password2 i').removeClass( "fa-eye-slash" );
		$('#show_hide_password2 i').addClass( "fa-eye" );
	} else {
		x.type = "password";
		$('#show_hide_password2 i').addClass( "fa-eye-slash" );
		$('#show_hide_password2 i').removeClass( "fa-eye" );
	}
}