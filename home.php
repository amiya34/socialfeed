<!DOCTYPE html>
<html lang="en">
<head>
<title>BTS 289</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}


body {
    font-family: Arial;
    margin: 0;
}


.header {
    padding: 80px;
    text-align: center;
    background: #1abc9c;
    color: white;
}


.header h1 {
    font-size: 40px;
}


.navbar {
    overflow: hidden;
    background-color: #333;
}


.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}


.navbar a.right {
    float: right;
}


.navbar a:hover {
    background-color: #ddd;
    color: black;
}


.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}


.side {
    -ms-flex: 30%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: 20px;
}


.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
}


.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}


.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
}


@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}


@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}
</style>
</head>
<body>

<div class="header">
  <h1>My Website</h1>
  <p>A website created by me.</p>
</div>

<div class="navbar">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#" class="right">Link</a>
</div>

<div class="row">
  <div class="side">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p><a class="twitter-timeline" href="https://twitter.com/realDonaldTrump?ref_src=twsrc%5Etfw">Tweets by realDonaldTrump</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
      <h3>More Text</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
      <h2>TITLE HEADING</h2>
      <h5>Homework</h5>
      <div class="" style="height:200px;">Image</div>
      <p>.</p>
      <p> </p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Photo</h5>
      <div class="" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>.</p>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
