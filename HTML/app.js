var http=require('http');
var fs=require('fs');

var server=http.createserver(function(req,res){
	console.log('request was made'+req.url);
	if(req.url==='/home' || req.url==='/')
	{
		res.writeHead(200,{'content-Type':'text/html'});
		fs.createRead()''
	}
});

server.listen(3000,'localhost');
console.log('agf 3000');