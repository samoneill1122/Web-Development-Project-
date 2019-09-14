function changeOpacity()
{
	var text = document.getElementsByClassName('p');
	var i;
	for(i=0; i<3; i++)
	{
		text[i].style.opacity = 0.2;
	}
}
function resetOpacity()
{
	var text = document.getElementsByClassName('p');
	var i;
	for(i=0; i<3; i++)
	{
		text[i].style.opacity = 1;
	}
}
var prevScrollPos = window.pageYOffset;
window.onscroll = function()
{
	var currScrollPos = window.pageYOffset;
	if(prevScrollPos > currScrollPos)
	{
		document.getElementById("header").style.top = "0";
	}
	else
	{
		document.getElementById("header").style.top = "-130px";
	}
	prevScrollPos = currScrollPos;
} 

function onSubmit()
{
	console.log("nachos");
	var q1 = document.forms['quiz']['q1'].value;
	var q2 = document.forms['quiz']['q2'].value;
	var q3 = document.forms['quiz']['q3'].value;
	var q4 = document.forms['quiz']['q4'].value;
	var q5 = document.forms['quiz']['q5'].value;
	var mvg=0;
	var pt=0;
	var rvb=0;
	var answers=["mvg", "pt", "rvb"];

	for(var i=1; i<=5; i++)
	{
		if(eval('q' + i) == '')
		{
			alert("You missed question number " + i);
		}
	}

	for(var i=1; i<=5; i++)
	{
		if(eval('q' + i) == answers[0])
		{
			mvg++;
		}
		else if(eval('q' + i) == answers[1])
		{
			pt++;
		}
		else if(eval('q' + i) == answers[2])
		{
			rvb++;
		}
		console.log("mvg="+mvg+" pt="+pt+" rvb="+rvb);
	}

	var result = document.getElementById("result");
	if((mvg > pt && mvg > rvb) || (mvg == pt && mvg > rvb) || (mvg == rvb && mvg > pt))
	{
		result.textContent = "You are none other than 'Mighty Mike', Michael Van Gerwen!";
		result.style.color = "blue";
	}
	else if((pt > mvg && pt > rvb) || (pt == rvb && pt > mvg))
	{
		result.textContent = "You've got the power! You are Phil 'The Power' Taylor!";
		result.style.color = "blue";
	}
	else if(rvb > mvg && rvb > pt)
	{
		result.textContent = "Barney! You're probably the nicest guy in world darts, Raymond Van Barneveld!";
		result.style.color = "blue";
	}
	document.documentElement.scrollTop = 0;
	return false;
}

function reload()
{
	document.location.reload(true);
	document.documentElement.scrollTop = 0;
}