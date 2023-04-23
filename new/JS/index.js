



window.onload=function(){
   document.getElementById('loading-screen').style.display = 'block';
   document.getElementById('loading-screen').style.opacity = '1';
   document.getElementById('header-style').style.display='flex';
   setTimeout(function() {
     setInterval(()=>{
      
     },100);

     document.getElementById('loading-screen').style.opacity = '0';
    
   }, 1800); // Display loading screen for 1.8 seconds
   setTimeout(function() {document.getElementById('loading-screen').style.display = 'none';},2800);
var about = document.getElementById('about-det');
var building = document.getElementById('building');
var ex = document.getElementById('about-ex');

building.addEventListener('click',()=>{
about.style.display='flex';
window.scrollTo(0, 2500);
});
ex.addEventListener('click',()=>{
    about.style.display='none';
 });

 
 }