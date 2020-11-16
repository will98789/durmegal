//Set settings for connection
const socket = io("http://167.172.60.28:8080", {
  withCredentials: false,
  extraHeaders: {
    "con": "client"
  },
  transports: ['websocket']
});

//Submit text message without reload/refresh the page
$('form').submit(function(e){
    e.preventDefault(); // prevents page reloading
    //Emit chat message
    socket.emit('chat_message', $('#txt').val());
    $('#txt').val('');
    return false;
});

//Append the chat text message
socket.on('chat_message', function(msg){
    $('#messages').append($('<li>').html(msg));
    updateScroll();
});

//Append text if someone is online
socket.on('is_online', function(username) {
    $('#messages').append($('<li>').html(username));
});

//Open text box
socket.on('found_partner',function(){
    document.getElementById('txt').readOnly = false;
})

//Get username
var username = prompt('Please tell me your name');
socket.emit('username', username);

//Keep text box scrolled to bottom
function updateScroll(){
  var element = document.getElementById("messagesBox");
  element.scrollTop = element.scrollHeight;
}