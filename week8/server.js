// console.log("hello world!");
var http = require('http');
const { exit } = require('process');
var url = require('url');

function onRequest(req,res){
    let parseUrl = url.parse(req.url,true);
    let pathName = parseUrl.pathname;


    if(pathName == "/home"){
        res.writeHead(200,{"Content-Type":"text/html"});
        res.write("<h1>welcome to the home page</h1>");
        res.end();
    }else{

        if(pathName == "/getData"){
        res.writeHead(200,{"Content-Type":"application/json"});
            let data = {"name":"Eduardo Huamani", "class":"CSE341(cs313)"};
            let json = JSON.stringify(data);
            res.write(json);
            res.end();
        }
        else{
            if(pathName == "/sum"){ //localhost:8080/sum?numer1=12&numer2=13
                let query = parseUrl.query;
                let sum = 0;
                Object.values(query).forEach(val => sum=sum+val*10/10);
                res.writeHead(200,{"Content-Type":"text/html"});
                res.write('<h1>The sum is:'+sum+'</h1>');
                res.end();
            }
            else{

                res.writeHead(404,{"Content-Type": "text/html"});
                res.write("Page Not Found");
                res.end();
            }


        }
    }
    // console.log(reqUrl);
}


var server = http.createServer(onRequest);
server.listen(8888);