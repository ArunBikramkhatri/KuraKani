

function checkname(event)
{
	var username = document.getElementById("name").value;
	var pass = document.getElementById("password").value;
	if(username ==="Arun")
	{
		if(pass === "7270")
		{
			window.location.href="register.html";
		}
		else{
			alert("wrong password");
		}
	}

	else{
		alert("Wrong username");
	}
}

