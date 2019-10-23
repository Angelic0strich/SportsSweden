
var newsImage1;
var newsImage2;
var newsImage3;
var selectedNewsId=0;

function box1Main(){
	newsImage1=document.getElementById("newsImage1");
	newsImage2=document.getElementById("newsImage2");
	newsImage3=document.getElementById("newsImage3");
	
	startNewsTimer();
}

function startNewsTimer(){
	loopNewsTimer();
}

function loopNewsTimer(){
	
	switch(selectedNewsId){
		case 3:
			selectedNewsId=1;
			break;
		default:
			selectedNewsId++;
	}
	
	newsImage1.style.display="none";
	newsImage2.style.display="none";
	newsImage3.style.display="none";
	
	switch(selectedNewsId){
		case 1:
			newsImage1.style.display="block";
			break;
		case 2:
			newsImage2.style.display="block";
			break;
		case 3:
			newsImage3.style.display="block";
			break;
	}
	
	
	setTimeout(function(){
		loopNewsTimer();
	},3000);
}