




function checkname(event)
{
	var username = document.getElementById("name").value;
	var pass = document.getElementById("password").value;
	if(username ==="Arun")
	{
		if(pass === "7270")
		{
			alert(10);
		}
		else{
			alert("wrong password");
		}
	}

	else{
		alert("Wrong username");
	}
}

