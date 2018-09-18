var session=require("express-session");
var cookieParser=require("cookie-parser");
var bparser=require("body-parser");


module.exports=function(app){
    app.use(cookieParser());
    app.use(session({
        key:"user_sid",
        secret:"sometext",
        resave:false,
        saveUninitialized: false,
    }));
    // var sessionCheck=function(req,res,next){

    // }
    app.get("/signup",function(req,res){
        res.render("createaccount",{});
    });
    app.post("/signup",function(req,res){
        
    });

    app.get("/signin",function(req,res){
        res.render("signin",{});
    });
}