var express = require('express');
const Nexmo = require('nexmo');
var app = express()


app.all('/:token/:phnumber', function (req, res) {
    const nexmo = new Nexmo({
        apiKey: '69c89f58',
        apiSecret: 'DQIO0UpNFjypxcjK',
    });
  
    const from = 'FTS';
    const to = req.params.phnumber;
    const text = "Thanks for using our File-Tracking System. Your file with token number :"+req.params.token+" was Completed and you may collect your documnets in respective department.";
    
    nexmo.message.sendSms(from, to, text);
    console.log("done")
    res.send('msg sent success');
})
app.listen(5002);
console.log("5002");
