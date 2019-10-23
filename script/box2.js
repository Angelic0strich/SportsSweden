
var box2;

function box2Main(){
	box2=document.getElementById("bar2").querySelector("#box2");
	
	events();
}

function events(){
	box2.addEventListener("mouseover",function(){
		var content=box2.querySelector(".content");
		content.style.display="inline";
	});
	box2.addEventListener("mouseout",function(){
		var content=box2.querySelector(".content");
		content.style.display="none";
	});
}


