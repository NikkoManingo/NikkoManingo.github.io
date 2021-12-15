let menu_icon = document.querySelector("#menu_icon")
let sidebar = document.querySelector(".sidebar")
        
    menu_icon.onclick = function(){
        sidebar.classList.toggle("active")
    }



    const right_menu = document.querySelector("#right_menu")
    const right_content = document.querySelector(".right_content")

    right_menu.onclick = function(){
        right_content.classList.toggle("active")
    }

    
    var ctr=1;
    setInterval(function(){
        document.getElementById('radio' + ctr).checked = true;
        ctr++;
        if(ctr > 4){
            ctr = 1;
        }
    }, 5000);
        
