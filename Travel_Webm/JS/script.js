const menubarBtn = document.querySelector('.header-top i')
menubarBtn.addEventListener("click", function(){
    document.querySelector('.header-top ul').classList.toggle('active')
})