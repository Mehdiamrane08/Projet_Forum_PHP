 const navigation = document.querySelector('.navbar');
  
 window.addEventListener('scroll', () => {

     if(window.scrollY > 20 ){
         navigation.classList.add('navbar1');

     }else{
         navigation.classList.remove('navbar1');
     }
    
 });

//  LOADER   //

    setTimeout(function(){

        const loader = document.getElementById('loader');
        loader.classList.add('disable_loader'); 

    },1000)   

   

 