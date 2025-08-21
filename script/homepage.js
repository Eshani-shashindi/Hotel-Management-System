 /*IT23164826
DISANAYAKA E.S*/ 
  var i=0;
  var images=[];
  var time=3000;
  
  images[0]="images/Eslide1.jpg";
  images[1]="images/Eslide3.jpg";
  images[2]="images/Eslide2.jpg";
  
  function changeimg(){
      document.slide.src=images[i];
	  
	  if(i<images.length-1){
	       i++;
		 }else{
		    i=0;
			}
		
	setTimeout("changeimg()",time);	
		
		}
		
window.onload=changeimg;



	
