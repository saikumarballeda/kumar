var img_show  = document.getElementById("image-changer");

var array = ["test.jpg","b2school.jpg","adm_slide.jpg"];

var counter = 0;

function changeCol(){

	if(counter >= array.length){

		counter=0;
	}

	img_show.style.backgroundImage = "url("+array[counter]+")";

	counter++;

}

setInterval(changeCol,3000);