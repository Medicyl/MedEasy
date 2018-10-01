var session=require("express-session");
var Users=require("../models/users");
var cookieParser=require("cookie-parser");

module.exports=function(app){
    app.get("/",function(req,res){
        res.send(req.session.user.first_name);
    });
}