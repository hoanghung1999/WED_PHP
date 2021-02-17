/*Chèn Fontawesome dô nghen:  https://kit.fontawesome.com/a076d05399.js*/

var input = document.querySelector('.pswrd');
var show = document.querySelector('.show');
show.addEventListener('click', active);
function active(){
    if(input.type === "password"){
        input.type = "text";
        show.style.color = "#1DA1F2";
        show.textContent = "ẩn";
    }else{
        input.type = "password";
        show.textContent = "hiển thị";
        show.style.color = "#111";
    }
}
