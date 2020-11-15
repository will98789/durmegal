var socket = io.connect("http://167.172.60.28:8080");

// ask username
var username = prompt('Please tell me your name');
socket.emit('username', username);