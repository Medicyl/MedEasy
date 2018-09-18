var mongoose=require("mongoose");

var user_schema= new mongoose.Schema({
   first_name:{type:String},
   Last_name:{type:String},
   email:{type:String},
   Password:{type:String},
   dob:{type:Date},
   phone_no:{type:String}


});

var Users=mongoose.model("MedEasyUsers",user_schema);

module.exports=Users;