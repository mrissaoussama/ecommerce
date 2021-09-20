function registersubmit(){
	$.ajax({
		type:'POST',
		url:'site.php',
		data:$('#registerform').serialize(),
		success:function(response) {
			$('#result').html();
	}}
		
		);
var form=document.getElementById('registerform').reset();
document.getElementById(result).innerHTML=document.getElementById(resultvar).value;

return false;}