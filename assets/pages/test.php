<html>
  <head>
    <style>
      @keyframes myfirst {
            0% {left:0px; top:100px;transform: rotate(10);}
            25% {left:100px; top:100px;}
            50% {left:150px; top:50px;}
            75% {left:25px; top:123px;}
            100% {left:0px; top:100px;}
      }
      div {
          width: 100px;
          height: 100px;
          border: 2px solid red;
          position: relative;
          animation: myfirst 1s infinite;
      }
    </style>
  </head>
<body>
    <div></div>
</body>
</html>
