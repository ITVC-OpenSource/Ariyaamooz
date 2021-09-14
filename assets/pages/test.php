<html>
  <head>
    <style>
      @keyframes myfirst {
            0% {left:100px; top:200px;transform: rotate(0deg);}
            25% {left:200px; top:300px;transform: rotate(25deg);}
            50% {left:300px; top:200px;transform: rotate(50deg);}
            75% {left:200px; top:100px;transform: rotate(25deg);}
            100% {left:100px; top:200px;transform: rotate(0deg);}
      }
      div {
          width: 100px;
          height: 100px;
          border: 2px solid red;
          position: relative;
          animation: myfirst 1s infinite;
          border-radius: 25%;
      }
    </style>
  </head>
<body>
    <div></div>
</body>
</html>
