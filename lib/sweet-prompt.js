function sweetPrompt(title, text, cbutton, abutton, after){

swal({   title: title,   text: text,   type: "",   showCancelButton: true,   confirmButtonColor: "#f39c12",  cancelButtonText: abutton, confirmButtonText: cbutton,   closeOnConfirm: true }, function(){

var prompt = $('#sweet-input').val();

after(prompt);

});

// Trasformo lo sweet in un prompt
$('.sweet-alert > p').append('<input id="sweet-input" class="form-control">');
$('#sweet-input').focus();


	$('#sweet-input').keydown(function (e) { // On space 'key' press
	     if (e.keyCode == 32) { 
	       $(this).val($(this).val() + " "); // append ' ' to input
	       return false; // return false to prevent space from being added
	     }
	});






}
