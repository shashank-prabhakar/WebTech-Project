const express = require('express')
const app = express();
app.use(express.static('app'))


app.listen((process.env.PORT || 5000), function(){
    console.log('Listening at 5000');
})
