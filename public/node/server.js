var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
   res.send('<h1>Server is Running...</h1>');
});

io.on('connection', function(socket){ 

  socket.on('new_incident_notifs', function(msg){
    io.emit('new_incident_notifs', msg);
  });

});

http.listen(3000, function(){
  console.log('listening on *:3000');
});