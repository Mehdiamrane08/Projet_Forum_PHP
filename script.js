const navigation = document.querySelector('.navbar');
  
window.addEventListener('scroll', () => {

    if(window.scrollY > 20 ){
        navigation.classList.add('navbar1');

    }else{
        navigation.classList.remove('navbar1');
    }
    
});

const btn = document.querySelector('#btnLogin');


