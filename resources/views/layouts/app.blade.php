<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Myweb</title>
    <style media="screen">
      body{margin: 0;padding: 0;background-color: #DEDEDE;}
      a{text-decoration: none;}
      .header{padding: 10px 50px 10px 50px;border-bottom: 1px solid #eeeeee;}
      .header>.logo{display: inline-block;}/*选择所有前置父元素关系的子元素*/
      .header>.menu{display: inline-block;margin-left: 20px;}
      .content{}
      .left{background-color: white;margin: 25px 300px 25px 25px;padding: 25px;box-shadow: 1px 1px 2px 1px #848484;}
      .right{background-color: white;width:200px;margin: 25px;padding: 25px; box-shadow: 1px 1px 2px 1px #848484;position: absolute;top:92px;right: 0;}
      .footer{padding: 10px 50px 10px 50px;background-color: gray;}/*看得出来其排列方式也是使用了当时自己的排列方式*/
    </style>
  </head>
  <body>
    <div class="header">
      <div class="logo">
        <a href="#"><h2>Myweb</h2> </a>
      </div>
      <div class="menu">
        <a href="{{route('articles.index')}}">Articles</a>
      </div>
    </div>
    <div class="content">
      <div class="left">
        @yield('content')
      </div>
      <div class="right">

      </div>
    </div>
    <div class="footer">
      <p>contact me :123</p>
    </div>
  </body>
</html>
