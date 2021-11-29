<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
    @keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:900px; top:0px;}
  50%  {background-color:blue; left:900px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}
</style>
</head>
<body>
    <div class="container bg-dark" style="height: 900px;">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h2 class="p-4">Selecciona metodo</h2>
                <button><a href="./proyecto" style="text-decoration: none;">Tareas</a></button>
                <button><a href="./usuarios" style="text-decoration: none;">Usuarios</a></button>
                <div style="width: 100px;
                    height: 100px;
                    background-color: red;
                    position: relative;
                    animation-name: example;
                    animation-duration: 4s;
                    animation-iteration-count: 2;
                    animation-direction: alternate-reverse;">
                </div>
            </div>
        </div>
    </div>
</body>
</html>