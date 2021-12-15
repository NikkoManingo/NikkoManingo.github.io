function sendMessage(){
    var message = document.getElementById("typing_box").value;

    var html = '<div class="message-box my-message-box">' + 
    '<div class="message my-message"> ' + message + ' </div>' + 
    '<div class="separator"></div>' +
    '</div>';

    document.getElementById("message-area").innerHTML += html;
    
}