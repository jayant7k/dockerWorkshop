var http = require("http");

var handleRequest = function(request, response){
	console.log("Received from : "+request.url);
	response.writeHead(200);
	response.end("Hello world!!!");
}

var www = http.createServer(handleRequest);
www.listen(8080);
