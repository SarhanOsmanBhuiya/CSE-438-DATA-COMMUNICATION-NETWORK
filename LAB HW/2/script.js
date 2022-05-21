
function validation()
{
	var x = document.forms["myform"]["name"].value;
	var y = document.forms["myform"]["username"].value;
	var z = document.forms["myform"]["password"].value;
	var n= document.forms["myform"]["contact"].value;


	//NAME CANNOT BE EMPTY
	if(x=="")
	{
		alert("Name must be filled out");
		return false;
	}


	//USERNAME CANNOT BE EMPTY and CANNOT HAVE WHITE SPACES
	if(y=="")
	{
		alert("Username must be filled out");
		return false;
	}

	if(y.includes(" "))
	{
		alert("Username can not be filled with whitespace");
		return false;
	}


	//PASSWORD CANNOT BE EMPTY
	if(z=="")
	{
		alert("Password must be filled out");
		return false;
	}


	// //PASSWORD LENGTH SHOULD BE BETWEEN 8-32 CHARACTERS
	if(z.length <= 8 || z.length >= 32 ) 
	{
     	alert("Please enter a password between 8-32 characters");
        return false;
    }



    //GENDER MUST BE CHECKED IS WRITTEN IN HTML SECTION IN index.html


    //CONTACT NUMBER MUST CONTAIN NUMBERS
 	if(!n.match(/^\d+/))
    {
        alert("Please Enter Only Numeric Characters for Contact No.!")
        return false;
    }

	
}