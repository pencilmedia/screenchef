var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { 
    title: 'screenchef',
    classname: 'hmpg',
    companytitle: 'Ralph Adrian Garcia',
    companydescription: 'Interaction Designer and Prototyper'
  });
});

/* GET portfolio. */
router.get('/portfolio', function(req, res, next) {
  res.render('portfolio', {
    title: 'screenchef : Portfolio',
    h1: 'Portfolio',
    classname: 'portfolio',
    companytitle: 'Ralph Adrian Garcia',
    companydescription: 'Interaction Designer and Prototyper'
  });
});

/* GET about. */
router.get('/about', function(req, res, next) {
  res.render('about', {
    title: 'screenchef : About',
    h1: 'About',
    classname: 'about',
    companytitle: 'Ralph Adrian Garcia',
    companydescription: 'Interaction Designer and Prototyper'
  });
});

module.exports = router;
