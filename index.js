var express = require('express')
var connect = require('connect')
var path = require('path')
var app = express();

app.set('port', (process.env.PORT || 5000))
app.use(connect.compress());
app.use(express.static(__dirname + '/public'))

var html_dir = __dirname +'/public/';

app.get('/', function(req, res) {
    res.sendfile(html_dir + 'index.html');
});

app.get('/home', function(req, res) {
    res.sendfile(html_dir + 'home.html');
});

app.get('/blog', function(req, res) {
    res.sendfile(html_dir + 'blog/index.html');
});

app.get('/events', function(req, res) {
    res.sendfile(html_dir + 'events/index.html');
});

app.get('/team', function(req, res) {
    res.sendfile(html_dir + 'members/index.html');
});

app.get('/members', function(req, res) {
    res.sendfile(html_dir + 'members/index.html');
});

// dont know why the hell is this not working.

app.get('/register', function(req, res) {
    res.sendfile(html_dir + 'register/index.html');
});

app.get('/results', function(req, res) {
    res.sendfile(html_dir + 'results/index.html');
});

// List of resume pages -- start

app.get('/form1', function(req, res) {
    res.sendfile(html_dir + 'resume/index1.html');
});

app.get('/form2', function(req, res) {
    res.sendfile(html_dir + 'resume/index2.html');
});

app.get('/form3', function(req, res) {
    res.sendfile(html_dir + 'resume/index3.html');
});

app.get('/form4', function(req, res) {
    res.sendfile(html_dir + 'resume/index4.html');
});

// end

app.get('/rotoconnect', function(req, res) {
    res.sendfile(html_dir + 'rotoconnect/index.html');
});

app.get('/rotoplay', function(req, res) {
    res.sendfile(html_dir + 'rotoplay/index.html');
});

app.get('/ww', function(req, res) {
    res.sendfile(html_dir + 'ww/index.html');
});

app.get('/whisperingwinds', function(req, res) {
    res.sendfile(html_dir + 'whisperingWinds/index.html');
});


app.listen(app.get('port'), function() {
  console.log("Node app is running at localhost:" + app.get('port'))
})
