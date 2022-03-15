function CheckMedia(x) {
  if (x.matches) 
  {
    divs = document.getElementsByClassName("client-row");
    
    for (i = 0; i < divs.length; ++i)
    	divs[i].className = "client-carousel owl-carousel owl-theme";
  } 
  else 
  {
   	divs = document.getElementsByClassName("client-carousel owl-carousel owl-theme");
    
    for(i = 0; i < divs.length; ++i)
    	div[i].className = "client-row");
  }
}

var x = window.matchMedia("(max-width: 476px)")
CheckMedia(x) // Call listener function at run time
x.addListener(CheckMedia) // Attach listener function on state changes