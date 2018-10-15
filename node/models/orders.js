var mongoose=require("mongoose");
var Users=require("./users");
var InventoryItem=require("./inevntoryItem").InventoryItem;
var ParentItem=require("./inevntoryItem").ParentItem;

var orderSchema=new mongoose.Schema({
    orderId:{type:String},
    userId:{type:mongoose.Schema.Types.ObjectId,ref:"MedEasyUsers"},
    itemId:{type:mongoose.Schema.Types.ObjectId,ref:"ParentItem"},
    dop:{type:Date},
    status:{type:String},
    address:{type:String},
    city:{type:String},
    state:{type:String},
    ZIP:{type:String},
    cardName:{type:String},
    cardNumber:{type:String},
    expMonth:{type:String},
    cvv:{type:Number},
    expYear:{type:Number}



});

var cartSchema=new mongoose.Schema({
    userId:{type:mongoose.Schema.Types.ObjectId,ref:"MedEasyUsers"},
    itemIds:[
        {info:{type:mongoose.Schema.Types.ObjectId,ref:"ParentItem"},
        status:{type:String}}]
    


    
});


var Order=mongoose.model("Order",orderSchema);
var Cart=mongoose.model("Cart",cartSchema);

module.exports.Order=Order;
module.exports.Cart=Cart;
