
// function test()
// {
// 	window.alert("Stargate");
// }

// function change()
// {
// 	var x = document.getElementsByClassName("example");
// 	x[0].innerHTML = "Hello World";
// }

// function tag()
// {
// 	var x = document.getElementsByTagName("div");
// 	x[1].innerHTML = "Hello World";
// }


// function colour()
// {
// 	document.getElementByClassName("example").style ="color:blue";
// }


// function  test()
// {
// 	var person=new Array();
// person["firstname"] ="John";
// person["lastname"] ="Doe";
// person["age"] ="46";

// document.write(person["age"])
// }

function validation()
{
	var x = document.forms["myform"]["username"].value;
	var y = document.forms["myform"]["password"].value;

	if(x=="")
	{
		alert("username must be filled out");
		return false;
	}

	if(y=="")
	{
		alert("password must be filled out");
		return false;
	}
}