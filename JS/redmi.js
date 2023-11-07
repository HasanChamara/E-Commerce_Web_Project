const img=document.querySelector("#product-img");
console.log(img.src);

var images=[{
			path:"../img/",
			src:"redmi green.jpg",
			color:"#11d4b4"
			},
			{
			path:"../img/",
			src:"redmi color.jpg",
			color:"#1565e5"
			},
			{
			path:"../img/",
			src:"redmi black.jpg",
			color:"#000000"
			}]
	
	function pagination(){
		for(let i=0; i<images.length;i++){
		const button=document.createElement("button");
			  button.id=i;
			  button.setAttribute("onclick","changeImage(this)")
			  button.style.backgroundColor=images[i].color;
			  if(i==0){
				 button.classList.add("active"); 
			  }
			  document.querySelector(".pagination").appendChild(button);
		}
	}
	
	function changeImage(element){
		img.src=images[element.id].path + images[element.id].src;
	}
	
	window.onload=pagination();