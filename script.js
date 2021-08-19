function compare(event){

	var email = document.querySelector("#email").value;
	var confirmation = document.querySelector("#confirmation").value;


	if (email != confirmation) {
		event.preventDefault();
		document.querySelector("#errormail").innerHTML = "L'email et la confirmation doivent être identiques";
	}
}