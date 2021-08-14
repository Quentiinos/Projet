let logo = document.getElementById('logo');
let logozone = document.getElementById('logozone')
logozone.addEventListener('mouseover', function(){
     logo.src = '/pictures/dogood-y.png';
});
logozone.addEventListener('mouseout', function(){
    logo.src = '/pictures/dogood.png';
});