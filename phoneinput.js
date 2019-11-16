function movefocus(current,nextfield){
	if (current.getAttribute&&current.value.length==current.getAttribute("maxlength"))
		nextfield.focus()
}
function movefocus1(current,prevfield,nextfield){
	if (current.getAttribute&&current.value.length==current.getAttribute("maxlength"))
		nextfield.focus()
	if (current.getAttribute&&(current.value.length==0))
		{
				prevfield.focus()
		}
}
function movefocus2(current,prevfield){
	if (current.getAttribute&&(current.value.length==0))
		{
			prevfield.focus()
		}
		if (current.getAttribute&&current.value.length==current.getAttribute("maxlength"))
		{
			var request = new XMLHttpRequest();
			var data = new FormData(document.callback);
			var backmessage = document.querySelector(".backmessage");
			var inputphone = document.querySelector(".inputphone");
			request.open("POST", "callback.php", true);
			request.onload = function() {
								    if (request.status == 200) {
											      backmessage.innerHTML = JSON.parse(request.responseText);
												  inputphone.style.display = "none";
							      } 
								    };
			request.send(data);
		}
}