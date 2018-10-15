var mongoose=require("mongoose");

var inventoryItemSchema=new mongoose.Schema({
    parentItems:{type:mongoose.Schema.Types.ObjectId,ref:"ParentItem"},
    inventoryItemId:{type:String},
    mod:{type:Date},
    expiry:{type:String},
    status:{type:String}
    
});
var ParentItemSchema=new mongoose.Schema({
    parentItemId:{type:String},
    name:{type:String},
    quantity:{type:Number},
    cost:{type:Number},
    brand:{type:String},
    itemImage:{type:String}

});

var InventoryItem=mongoose.model("InventoryItem",inventoryItemSchema);
var ParentItem=mongoose.model("ParentItem",ParentItemSchema);

module.exports.InventoryItem=InventoryItem;
module.exports.ParentItem=ParentItem;