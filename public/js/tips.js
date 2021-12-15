const view_more = document.querySelector('.view_more');
const text = document.querySelector('.text');

view_more.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if(view_more.innerText=== 'Read More'){
        view_more.innerText = 'Read Less';
    }else{
        view_more.innerText = 'Read More';
    }
})