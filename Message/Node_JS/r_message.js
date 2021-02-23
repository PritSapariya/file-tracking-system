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
    const text = "Welcome to our Flie-Tracking System. Your file with token number :"+req.params.token+" was "+req.params.status+"  because of insufficient documents.";
    
    nexmo.message.sendSms(from, to, text);
    console.log("done")
    res.send('msg sent success');
})
app.listen(5001);
console.log("5001");
