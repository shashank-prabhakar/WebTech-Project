const express = require('express')
const app = express();
app.use(express.static('app'))


app.listen(3000, function(){
    console.log('Listening at 3000');
})
