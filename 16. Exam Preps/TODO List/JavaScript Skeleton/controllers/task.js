const Task = require('../models/Task');

module.exports = {
    index: (req, res) => {
        Task.find().then(tasks => {
            res.render('task/index', {'tasks': tasks});
        });
    },
    createGet: (req, res) => {
        res.render('task/create');
    },
    createPost: (req, res) => {

        if (!req.body.title || !req.body.comments){
            return res.redirect('/create');
        }

        Task.create({
            title: req.body.title,
            comments: req.body.comments
        }).then(task => {
            res.redirect('/');
        })
    },
    deleteGet: (req, res) => {
        let taskId = req.params.id;
        Task.findById(taskId).then(task => {
            if (task) {
                return res.render('task/delete', task);
            }
            else {
                return res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
    },
    deletePost: (req, res) => {
        let taskId = req.params.id;
        Task.findByIdAndRemove(taskId).then(task => {
            res.redirect('/');
        }).catch(err => res.redirect('/'));
    }
};