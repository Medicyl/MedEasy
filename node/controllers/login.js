var session=require("express-session");
var cookieParser=require("cookie-parser");
var bparser=require("body-parser");
var bcrypt=require("bcryptjs");
var Users=require('../models/users');


module.exports=function(app){
    app.use(cookieParser());
    app.use(session({
        key:"user_sid",
        secret:"sometext",
        resave:false,
        saveUninitialized: false,
    }));
    var sessionCheck=function(req,res,next){
        if(req.session.user && user.cookie.user_sid){
            res.redirect("/");
        }else{
            next();
        }
    }
    app.get("/signup",function(req,res){

        res.render("createaccount",{});
    });
    app.post("/signup",sessionCheck,function(req,res){
        var first_name=req.body.ufname;
        var last_name=req.body.ulname;
        var umail=req.body.umail;
        var uphone=req.body.uphone;
        var ubdate=req.body.ubdate;
        var password=req.body.password;
        const saltRounds=10;
        
        var NewUser=new Users({
            first_name:first_name,
            last_name:last_name,
            email:umail,
            phone_no:uphone,
            dob:ubdate,
            password:password
        });

        Users.findOne({email:umail}).then(function(user){
            if(!user){
    
                bcrypt.genSalt(saltRounds,function(err,salt){
                    bcrypt.hash(password,salt,function(err,hash){
                        if(err) throw err;
                
                        NewUser.password=hash;
                        NewUser.save(function(err){
                            console.log(err);                                                
                        });
                        req.session.user=NewUser;
                        console.log(req.session.user.first_name);
                        res.redirect("/");
                        
                    });
                });
            }else{
                res.render("login",{});
            }
        });
        
    });
    app.get("/signin",function(req,res){
        res.render("signin",{message:null});
    });
    app.post("/signin",function(req,res){
        var email=req.body.mail;
    
        var password=req.body.password;
        var check=function(isMatch,user){
            if(isMatch){
                req.session.user=user;
                console.log(req.session.user);
            
                res.redirect("/");
            }else{
                
                res.render("signin",{message:"incorrect passowrd"});
            }
        }
        Users.findOne({email:email}).then(function(user){
            if(!user){
                res.render("signin",{message:"email does not exists"});
            }else{
                bcrypt.compare(password,user.password,function(err,isMatch){
                    check(isMatch,user);
                });  
            }
        
        });
        
    });

    app.get("/logout",function(req,res){
        req.session.destroy(function(){
            console.log("you are logged out");
        });
        res.redirect("/signin");
    });

}