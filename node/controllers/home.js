var session=require("express-session");
var Users=require("../models/users");
var cookieParser=require("cookie-parser");

module.exports=function(app){
    app.get("/",function(req,res){
        if(req.session.user){  
            res.render("home",{login:"yes",name:req.session.user.first_name});
        }else{
            res.render("home",{login:"no",name:null});
        }
    app.get("/details",function(req,res){
        
        if(req.session.user){
            res.render("details",{user:req.session.user});

        }
    });

        
    });
}
