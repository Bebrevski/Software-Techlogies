const mongoose = require('mongoose');

let animeSchema = mongoose.Schema({
    rating: {type: 'number', required: 'true'},
    name: {type: 'String', required:'true'},
    description: {type: 'String', required:  'true'},
    watched: {type: 'String', required: 'true'}
});

let Anime = mongoose.model('Anime', animeSchema);

module.exports = Anime;