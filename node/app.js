var express=require("express");
var mongoose=require("mongoose");
var config=require("./config/database");

mongoose.connect(config.database);
var db=mongoose.connection;
 db.on("connection",function(){
     console.log("db is working");
 });

var app=express();


app.get("/",function(req,res){
    res.send("working");
});

app.listen(3000);