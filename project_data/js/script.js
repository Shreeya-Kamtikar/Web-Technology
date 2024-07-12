let navbar = document.querySelector('.header .flex .navbar');
let profile = document.querySelector('.header .flex .profile');

document.querySelector('#menu-btn').onclick = () =>{        
   navbar.classList.toggle('active');           //currently on cart btn
   profile.classList.remove('active'); 
}

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');       //currently on user btn
   navbar.classList.remove('active');
}

window.onscroll = () =>{         //when window scrolled, both not active
   navbar.classList.remove('active');
   profile.classList.remove('active');
}
