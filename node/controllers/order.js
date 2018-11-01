var session=require("express-session");
var cookie=require("cookie-parser");
var InventoryItem=require("../models/inevntoryItem").InventoryItem;
var ParentItem=require("../models/inevntoryItem").ParentItem;
var Order=require("../models/orders").Order;
var Cart=require("../models/orders").Cart;
const sendmail=require('sendmail')();


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
            itemId:[],
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
                        NewOrder["itemId"].push(data2['_id']);
     
                        // console.log(NewOrder);
                        
                    });


                    // InventoryItem.findOneAndUpdate({parentItem:items[i]['info']['_id'],status:"AVA"},{$set:{status:'DEL'}}).then(function(data){
                    //     console.log(NewOrder);
                    //     res.render("bill",{total:total});
                    // });
                }
            }
            Cart.findOneAndUpdate({userId:req.session.user._id},{$set:{itemIds:[]}}).then(function(data){

            });
            
            NewOrder.save(function(err,data){
                console.log(err);
                console.log("done");
                console.log(data['itemId']);
                Order.findOneAndUpdate({_id:data.id},{$set:{itemId:data['itemId']}}).then(function(result){
                    console.log(result);
                });
                // sendmail({
                //     form:'devansh.solanki@somaiya.edu',
                //     to:req.session.user.email,
                //     subject:'order confirmation',
                //     html:'your order has been confirmed'

                // },function(err,reply){
                //     console.log(reply);
                // });

                res.render("final",{total:total,address:address,login:"yes",name:req.session.user.name,orderId:data.id});
                  
            });
            
        });
    });

    // app.get("/orders",function(res,req){
        
    //     Order.find({userId:req.session.user._id}).populate("itemId").then(function(data){
    //         console.log(data);
    //     });
    // });
  
}