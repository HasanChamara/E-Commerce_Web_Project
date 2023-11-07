const img=document.querySelector("#product-img");
console.log(img.src);

var images=[{
			path:"../img/",
			src:"apple xr red.jpg",
			color:"#ff3333"
			},
			{
			path:"../img/",
			src:"apple xr white.jpg",
			color:"#ffffff"
			},
			{
			path:"../img/",
			src:"apple xr black.jpg",
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