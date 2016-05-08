$( document ).ready(function() {
	$('#input_form').submit(function () {
		command = document.getElementById('input_text').value;
        $.post(ajax_route,$('#input_form').serialize(),function(data)
            {
            	document.getElementById('input_text').value = "";
            	$( "<div class='output'>"+data+"</div>" ).insertAfter( "#input_form" );
            });
        //
        return false;
    });
});