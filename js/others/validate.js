var validate = function(myform){
				var myemail = myform.email;
				var regx = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@(([a-z0-9]+[-])+[a-z0-9]+\.?)+[a-z]{2,}$/i;
				if (!regx.test(myemail.value))
				{
					alert("invalid email format");
					return false;
				}
}

function showDesc(paraId)
			{
					var paras = document.getElementsByClassName("formdesc");
					for (var i = 0; i < paras.length; i++)
					{
						paras[i].style.visibility = "hidden";
					}
					
					document.getElementById(paraId).style.visibility = "visible";
			}