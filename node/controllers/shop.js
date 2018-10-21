var mongoose=require("mongoose");
var session=require("express-session");
var cookie=require("cookie-parser");
var ParentItem=require("../models/inevntoryItem").ParentItem;
var InventoryItem=require("../models/inevntoryItem").InventoryItem;
var Cart=require("../models/orders").Cart;


module.exports=function(app){
    app.get("/shop",function(req,res){
        
        ParentItem.find().then(function(data){
            res.render("shop",{items:data,login:"yes",name:req.session.user.name});
            
        });
    });
    app.get("/shop/product/:item",function(req,res){
        
        ParentItem.find({_id:req.params.item}).then(function(data){
            var parent_item=data[0];
            if(parent_item["quantity"]>0)
            {
                res.render("product",{product:parent_item,availibity:true});
            }else
            {
                res.render("product",{product:parent_item,availibity:false});
            }
            
        });
    });
    app.get("/user/cart/:item",function(req,res){
        
        Cart.findOneAndUpdate({userId:req.session.user._id},{$push:{itemIds:{info:req.params.item,status:"ADD"}}}).then(function(data){
            res.redirect("/cart");

        
        });    
    });
    app.get("/cart",function(req,res){

        var reuslt=Cart.find({userId:req.session.user._id}).populate({path:"itemIds.info"}).then(function(data){
            // console.log(data[0]['itemIds'][0]['status']);
            // console.log(data);
            var cartItems=data[0]["itemIds"];
            // var status=data[0]["itemIds"][0]["status"];
            // console.log(status);
            console.log(cartItems);

            res.render("cart",{items:data[0]["itemIds"]});

        });

    });
    app.get("/cart/remove/:item",function(req,res){
        Cart.findOneAndUpdate({userId:req.session.user._id},{$pull:{itemIds:{info:req.params.item}}}).then(function(data){
            console.log("removed");
            console.log(data);
            res.redirect("/cart");

        })
    });
    
    app.get("/checkout",function(req,res){
        
        Cart.find({userId:req.session.user._id}).populate({path:"itemIds.info"}).then(function(data){
            var total=0;
            
            for(var i=0;i<data[0]["itemIds"].length;i++){
                if(data[0]["itemIds"][i]["status"]==="ADD"){
                    total+=(Number(req.query[data[0]["itemIds"][i]["info"]["name"]])*data[0]["itemIds"][i]["info"]["cost"]);
                    }
            }
            res.render("checkout",{total:total,products:data[0]["itemIds"],user:req.session.user});
        
        });

    });
        
    app.get("/inventorycheck",function(res,req){
        InventoryItem.find().populate("parentItems").then(function(data){
            console.log(data);
        });
    });
        
    
}