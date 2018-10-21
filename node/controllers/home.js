var session=require("express-session");
var Users=require("../models/users");
var cookieParser=require("cookie-parser");
var Order=require("../models/orders").Order;

module.exports=function(app){
    app.get("/",function(req,res){
        if(req.session.user){ 
            console.log(req.session.user);
            
            res.render("home",{login:"yes",name:req.session.user.first_name});
        }else{
            res.render("home",{login:"no",name:null});
        }
 
        
    });

    app.get("/details",function(req,res){
        Order.find({userId:req.session.user._id}).populate("itemId").then(function(data){
            console.log(data); 
            console.log(data[0]['itemId']);   
            res.render("details",{user:req.session.user,orders:data});
    
            
        });        

    });

}
