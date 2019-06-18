<htm>
<head>
<title>@yield('title')</title>
<style>
body {
  font-size: 16px;
  color: #999;
  margin: 5px;
}
h1 {
  font-size: 100px;
  text-align: right;
  color: #f6f6f6;
  margin: -50px 0px -100px 0px;
  letter-spacing: -4pt;
}
ul {
  font-size: 12px;
}
hr {
  margin: 25px 100px;
  border-top: 1px dashed #ddd;
}
.menutitle {
  text-align: right;
  font-size: 10px;
  margin: 10px;
  border-bottom: solid 1px #ccc;
  color: #ccc;
}
</style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <p class="menutitle">※メニュー</p>
    <ul>
      <li>1223</li>
      <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      @yield('footer')
    </div>
</body>
</html>
