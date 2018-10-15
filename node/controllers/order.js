var session=require("express-session");
var cookie=require("cookie-parser");
var InventoryItem=require("../models/inevntoryItem").InventoryItem;
var ParentItem=require("../models/inevntoryItem").ParentItem;
var Order=require("../models/orders").Order;
var Cart=require("../models/orders").Cart;

module.exports=function(app){
    app.post("/checkout",function(req,res){
        var address=req.body.address;
        var city=req.body.city;
        var state=req.body.state;
        var zip=req.body.zip;
        var cardName=req.body.cardname;
        var cardNumber=req.body.cardnumber;
        var expMnth=req.body.expmonth;
        var expYear=req.body.expyear;
        var cvv=req.body.cvv;
        var total=req.body.total;
        var NewOrder=new  Order({
            userId:req.session.user._id,
            address:address,
            city:city,
            state:state,
            ZIP:zip,
            cardName:cardName,
            cardNumber:cardNumber,
            expMonth:expMnth,
            cvv:cvv,
            expYear:expYear
        });
        
        Cart.find({userId:req.session.user._id}).populate({path:"itemIds.info"}).then(function(data){
            var items=data[0]["itemIds"]
            for(var i=0;i<data[0]["itemIds"].length;i++){
                if(items[i]["status"]==="ADD"){
                    ParentItem.findOneAndUpdate({_id:items[i]['info']['_id']},{$inc:{quantity:-1}}).then(function(data2){
                        NewOrder["itemId"]=data2['_id'];
                        NewOrder.save(function(err){
                            console.log(err);
                            console.log("done");
    
                        });
    
                        
                    });

                    // InventoryItem.findOneAndUpdate({parentItem:items[i]['info']['_id'],status:"AVA"},{$set:{status:'DEL'}}).then(function(data){
                    //     console.log(NewOrder);
                    //     res.render("bill",{total:total});
                    // });
                }
            }
        });
    });

    // app.get("/parent",function(res,req){
    //     ParentItem.find({_id:"5bc437f1e5a05f06f7c9b226"}).then(function(data){
    //         console.log(data);
    //     });
    // });
  
}