const mongoose = require ("mongoose")
const Schema = mongoose.Schema

const UserSchema =new Schema({
    full_name:{
        type: String
    },
    address:{
        type: String
    },
    mobileno:{
        type: String
    },
    email:{
        type: String,
        require: true
    },
    password:{
        type: String
    },
    confirmpassword:{
        type:String,
        required : true
    }
})

module.exports =User=mongoose.model('users', UserSchema)