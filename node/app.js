var express=require("express");
var mongoose=require("mongoose");
var config=require("./config/database");
var Users=require("./models/users");
var login=require("./controllers/login");
var bparser=require("body-parser");
var home=require("./controllers/home");
var shop=require("./controllers/shop");

mongoose.connect(config.database);
var db=mongoose.connection;
 db.on("connection",function(){
     console.log("db is working");
 });

var app=express();
app.set('view engine','ejs');
app.use(express.static('./public'));
app.use(bparser.urlencoded({extended:false}));
app.use(bparser.json());

app.get("/test",function(req,res){
    res.send("working");
});

login(app);
home(app);
shop(app);

app.listen(3000);