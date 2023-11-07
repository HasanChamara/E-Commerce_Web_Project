const img=document.querySelector("#product-img");
console.log(img.src);

var images=[{
			path:"../img/",
			src:"vivo blue.jpg",
			color:"#0066ff"
			},
			{
			path:"../img/",
			src:"vivo white.jpg",
			color:"#ffffff"
			},
			{
			path:"../img/",
			src:"vivo black.jpg",
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