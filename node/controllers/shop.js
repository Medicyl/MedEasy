var mongoose=require("mongoose");
var session=require("express-session");
var cookie=require("cookie-parser");
var ParentItem=require("../models/inevntoryItem").ParentItem;
var InventoryItem=require("../models/inevntoryItem").InventoryItem;



module.exports=function(app){
    app.get("/shop",function(req,res){
        ParentItem.find().then(function(data){
            res.render("shop",{items:data});
        });
        
    });
}