const mongoose = require('mongoose');

let tripSchema = mongoose.Schema({
    origin: {type: 'String', required: 'true'},
    destination: {type: 'String', required:'true'},
    business: {type: 'number', required:  'true'},
    economy:{type: 'number', required: 'true'}
});

let Trip = mongoose.model('Trip', tripSchema);

module.exports = Trip;