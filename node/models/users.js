var mongoose=require("mongoose");

var user_schema= new mongoose.Schema({
   first_name:{type:String},
   last_name:{type:String},
   email:{type:String},
   password:{type:String},
   dob:{type:Date},
   phone_no:{type:String}


});

var Users=mongoose.model("MedEasyUsers",user_schema);

module.exports=Users;