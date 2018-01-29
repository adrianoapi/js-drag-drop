<!DOCTYPE HTML>
<html>
    <head>
        <title>Drag Drop JavaScript</title>
        <script>
            function allowDrop() {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefautl();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
            }
        </script>
    </head>
    <body>
        <div>
            <img src="file://192.168.0.135/beta1/drag_drop/assets/img/img_logo.gif">
        </div>
    </body>
</html>