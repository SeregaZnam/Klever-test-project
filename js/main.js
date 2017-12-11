var click = 0;
function clickSum(){
	click++;
	if(click > 2){
		$('#login').prop('disabled', true);
		$('#password').prop('disabled', true);
		setTimeout(function(){
			$('#login').prop('disabled', false);
			$('#password').prop('disabled', false);
		}, 30000);
	}
}