var express = require('express');
const Nexmo = require('nexmo');
var app = express()


app.all('/:token/:phnumber/:status', function (req, res) {
  const nexmo = new Nexmo({
    apiKey: '69c89f58',
    apiSecret: 'DQIO0UpNFjypxcjK',
  });
  
  const from = 'FTS';
  const to = req.params.phnumber;
  const text = "Welcome to our File-Tracking System. Your file is "+req.params.status+" and token number is :"+req.params.token;
  
  nexmo.message.sendSms(from, to, text);
  console.log("done")
 res.send('msg sent success');
})
app.listen(5000);
console.log("5000");