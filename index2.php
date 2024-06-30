<!DOCTYPE html>
<html>
<head>
		<title>BELLMAN KHALABA</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="styleSheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="icon/css/font-awesome.min.css">

	</head>
    <body style="background-color: rgb(220,220,220)">
		<div>
			<div>
				<div>
                    <h1 id="grand_titre" style="text-align: center;">BELLMAN KHALABA</h1>
                </div>
				<div style="text-align: center;display: block;">
                    <!-- btn ambony -->
                    <div>
                        <button id="drag" class="btn btn-success"> <i class="fa fa-location-arrow"></i>POSITONS</button>
                        <button id="item" class="btn btn-primary"> <i class="fa fa-plus"></i> AJOUTE</button>
                        <button id="update"class="btn btn-warning"> <i class="fa fa-plus"></i> MIS A JOUR</button>
                        <button id="delete" class="btn btn-danger"> <i class="fa fa-trash"></i> SUPPRESSION</button>
                    </div>
                    <!-- fin btn ambony -->

                    <!-- Sary -->
                    <div style="position: fixed;">
                        <canvas id="canvas" width="850px" height="500px" style="position: fixed;background: white; margin: auto; top : 0; right: 0; bottom: 0; left: 0;z-index: 0" ></canvas>
                    </div>
                    <!-- fin Sary -->
				</div>

                    <!-- btn ambany -->
                <div style="margin-top: 550px; text-align: center;"> 
                    <button id="debut" class="btn btn-success"> <i class="fa fa-location-arrow"></i>DEBUT</button>
                    <button id="fin" class="btn btn-danger"> <i class="fa fa-plus"></i> FIN</button>
                    <button id="chercher1"class="btn btn-primary"> <i class="fa fa-play"></i> MINIMISATION</button>
                    <button id="chercher"class="btn btn-primary"> <i class="fa fa-play"></i> MAXIMISATION</button>
                </div>
                    <!-- fin btn ambany -->


                    <!-- debut SCRIPT -->
                    <script>
                        window.onload = function() {
                            var liens = new ConteneurLiens();
                    
                            var canvas = document.getElementById("canvas");
                    
                            var dragButton = document.getElementById("drag");
                            var itemButton = document.getElementById("item");
                            var updateButton = document.getElementById("update");
                            var deleteButton = document.getElementById("delete");
                                    var debutButton = document.getElementById("debut");
                                    var finButton = document.getElementById("fin");
                    
                            var chercherBouton = document.getElementById("chercher");
                            var chercherBouton1 = document.getElementById("chercher1");
                            var gs = new Scene(canvas);
                                    
                                    /*var timer = new Timer({
                                        onTimeout : function() {
                                            dragButton.style.left = parseInt(dragButton.style.left) + 1 + "px";
                                        }
                                    });
                                    timer.start();
                                    timer.play(false);*/
                    
                            var x1  = liens.ajouterSommet();
                            var x2  = liens.ajouterSommet();
                            var x3  = liens.ajouterSommet();
                            var x4  = liens.ajouterSommet();
                            var x5  = liens.ajouterSommet();
                            var x6  = liens.ajouterSommet();
                            var x7  = liens.ajouterSommet();
                            var x8  = liens.ajouterSommet();
                            var x9  = liens.ajouterSommet();
                            var x10 = liens.ajouterSommet();
                            var x11 = liens.ajouterSommet();
                            var x12 = liens.ajouterSommet();
                            var x13 = liens.ajouterSommet();
                            var x14 = liens.ajouterSommet();
                            var x15 = liens.ajouterSommet();
                            var x16 = liens.ajouterSommet();
                    
                            liens.ajouterLien(new Lien(10, x1,  x2));
                            liens.ajouterLien(new Lien(15, x2,  x3));
                            liens.ajouterLien(new Lien(8,  x2,  x4));
                            liens.ajouterLien(new Lien(8,  x4,  x3));
                            liens.ajouterLien(new Lien(6,  x4,  x5));
                            liens.ajouterLien(new Lien(1,  x3,  x6));
                            liens.ajouterLien(new Lien(16, x3,  x11));
                            liens.ajouterLien(new Lien(5,  x6,  x5));
                            liens.ajouterLien(new Lien(1,  x5,  x9));
                            liens.ajouterLien(new Lien(8,  x7,  x11));
                            liens.ajouterLien(new Lien(1,  x7,  x8));
                            liens.ajouterLien(new Lien(1,  x8,  x7));
                            liens.ajouterLien(new Lien(2,  x8,  x10));
                            liens.ajouterLien(new Lien(3,  x9,  x8));
                            liens.ajouterLien(new Lien(4,  x9,  x10));
                            liens.ajouterLien(new Lien(7,  x10,  x12));
                            liens.ajouterLien(new Lien(6, x11, x12));
                            liens.ajouterLien(new Lien(12,  x11, x13));
                            liens.ajouterLien(new Lien(9,  x12, x15));
                            liens.ajouterLien(new Lien(3,  x13, x14));
                            liens.ajouterLien(new Lien(3,  x14, x16));
                            liens.ajouterLien(new Lien(5,  x15, x14));
                            liens.ajouterLien(new Lien(5,  x15, x14));
                            liens.ajouterLien(new Lien(6,  x15, x16));
                            liens.ajouterLien(new Lien(4,  x6, x7));
                    
                            liens.main(x1, x16, true);
                    
                        
                            x1.position = {x: 70, y: 300};
                            x2.position = {x: 140, y: 300};
                            x3.position = {x: 200, y: 370};
                            x4.position = {x: 170, y: 230};
                            x5.position = {x: 250, y: 210};
                            x6.position = {x: 240, y: 300};
                            x7.position = {x: 320, y: 310};
                            x8.position = {x: 360, y: 255};
                            x9.position = {x: 340, y: 200};
                            x10.position = {x: 410, y: 210};
                            x11.position = {x: 330, y: 380};
                            x12.position = {x: 480, y: 230};
                            x13.position = {x: 440, y: 370};
                            x14.position = {x: 530, y: 340};
                            x15.position = {x: 550, y: 260};
                            x16.position = {x: 620, y: 300};
                    
                            
                            gs.addItem(x1);
                            gs.addItem(x2);
                            gs.addItem(x3);
                            gs.addItem(x4);
                            gs.addItem(x5);
                            gs.addItem(x6);
                            gs.addItem(x7);
                            gs.addItem(x8);
                            gs.addItem(x9);
                            gs.addItem(x10);
                            gs.addItem(x11);
                            gs.addItem(x12);
                            gs.addItem(x13);
                            gs.addItem(x14);
                            gs.addItem(x15);
                            gs.addItem(x16);
                    
                            for(var lien of liens.liens)
                                gs.addItem(lien);
                    
                            gs.paint();
                    
                            var viewManager = new ViewManager(gs, liens);
                    
                            function getMousePosition(element, event) {
                                return {
                                    x : event.clientX - element.offsetLeft,
                                    y : event.clientY - element.offsetTop
                                };
                            }
                    
                            canvas.addEventListener('mousedown', function(event) {
                                viewManager.onMouseDown(getMousePosition(canvas, event));
                            });
                    
                            canvas.addEventListener('mousemove', function(event) {
                                viewManager.onMouseMove(getMousePosition(canvas, event));
                            });
                    
                            canvas.addEventListener('mouseup', function(event) {
                                viewManager.onMouseUp(getMousePosition(canvas, event));
                            });
                    
                            canvas.addEventListener('click', function(event) {
                                viewManager.onClick(getMousePosition(canvas, event));
                            });
                    
                            canvas.addEventListener('dblclick', function(event) {
                                viewManager.onDblClick(getMousePosition(canvas, event));
                            });
                    
                            chercherBouton.addEventListener('click', function(event) {
                                        liens.setIsMin(false);
                                        liens.setView(viewManager);
                                        liens.main();
                            });
                            chercherBouton1.addEventListener('click', function(event) {
                                liens.setIsMin(true);
                                liens.setView(viewManager);
                                liens.main();
                    });
                            dragButton.addEventListener('click', function(event) {
                                viewManager.mode = "drag";
                            });
                    
                            itemButton.addEventListener('click', function(event) {
                                viewManager.mode = "item";
                            });
                    
                            updateButton.addEventListener('click', function(event) {
                                viewManager.mode = "update";
                            });
                    
                            deleteButton.addEventListener('click', function(event) {
                                viewManager.mode = "delete";
                            });
                    
                                    debutButton.addEventListener('click', function(event) {
                                        viewManager.mode = "debut";
                                        
                                    });
                                    
                                    finButton.addEventListener('click', function(event) {
                                        viewManager.mode = "fin";
                                    });
                        }
                        </script>
                      </body>
                    <script type="text/javascript" src="js/link2.js"></script>
                    <script type="text/javascript" src="js/llp.js"></script>
                    <script type="text/javascript" src="js/link1.js"></script>
                    <script type="text/javascript" src="js/teth.js"></script>
                    <script type="text/javascript" src="js/ora.js"></script>
                    <script type="text/javascript" src="js/pointSomm.js"></script>
                    <script type="text/javascript" src="js/managerLink.js"></script>
                    <script type="text/javascript" src="js/link.js"></script>
                    <!-- fin SCRIPT -->
			</div>
		</div>
    </body>
</html>