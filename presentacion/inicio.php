
<br>
        <div class="container">            
            <div class="col-8 col-sm-9 col-lg-10">
		<h1 class="text-center">Distri-Sporty</h1>
            </div>        
            <br>
            <div class="row">
            <!------AGREGAR PRODUCTOS------------------------------------------------------------------->    
                <div class="card col-sm-12" style="background-color: #17202A; opacity: 0.9;" id="Tabla">
                    <div class="card-body">
                        <?php if (isset($_POST["crear"])) { ?>
                            <div class="alert alert-success alert-dismissible fade show"
				role="alert">
				Datos ingresados correctamente.
				<button type="button" class="btn-close" data-bs-dismiss="alert"
				aria-label="Close"></button>
                            </div>
                        <?php } ?>
                        <form action="index.php?pid=<?php echo base64_encode("presentacion/inicio.php") ?>" method="post">
                            <div class="form-group">
                                <label class="AgregarProducto" style="color: white;">Nombre producto</label>
                                <input class="form-control" type="text" name="nombre" required="">
                            </div>
                            <div class="form-group">
                                <label class="AgregarProducto " style="color: white;">Talla producto</label>
                                <input class="form-control" type="text" name="talla" required="">
                            </div>
                            <div class="form-group">
                                <label class="AgregarProducto" style="color: white;">Precio producto</label>
                                <input class="form-control" type="text" name="precio" required="">                        
                            </div>
                            <div class="form-group">
                                <label class="AgregarProducto" style="color: white;">Categoria</label> 
                                <select class="form-control" name="categoria">
                                    <option selected style="font-family: courier; font-size: 25px" width="250" required="">Escoja una opcion</option>
                                    <c:forEach var="objT" items="${lista_tipos}"> 
                                        <option style="font-family: courier; font-size: 25px">nn</option>
                                    </c:forEach>
                                </select>                        
                            </div>
                            <br>                           
                            <div class="d-grid">
				<button type="submit" name="crear" class="btn btn-primary">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            <!-------AGREGAR PRODUCTOS------------------------------------------------------------------->  
                <pre></pre> 
            <!-------BUSCAR POR CATEGORIA---------------------------------------------------------------->     
                <div class="card col-sm-12" style="background-color: #17202A; opacity: 0.9;"> 
                    <div class="card-body">
                        <form action="ProductoCTO?menu=Producto" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <a class="text-center" style="border: none; font-size: 30px; color:white; font-family: courier">Menú de bebidas</a>
                            <div class="form-group col-sm-7">
                                <select id="localidad" class="form-control" name="txt_tipo_pro">
                                    <option selected style="font-family: courier; font-size: 25px" width="250">Escoja una opcion</option>
                                    <c:forEach var="objT" items="${lista_tipos}"> 
                                        <option style="font-family: courier; font-size: 25px" value="${objT.getId_tipo()}">${objT.getNombre()}</option>
                                    </c:forEach>
                                </select>                               
                            </div> 
                            <input style="width: 170px; height: 40px;border-radius: 5px;" class="btn btn-success" type="submit" name="accion" value="Buscar">    
                        </div>                        
                        </form>
                    </div>
                </div>          
            <!-------BUSCAR POR CATEGORIA----------------------------------------------------------------> 
                <pre><br></pre>
            <!-------MOSTRAR PRODUCTOS------------------------------------------------------------------->  
                <div class="d-flex flex-wrap">
                    <c:forEach var="objP" items="${lista_productos}">                       
                        <div class="col-sm-3">
                            <div class="card " style="background-color: #17202A; opacity: 0.9; margin-top: 20px; flex: 1 600px;">
                                <div class="card-body">
                                    <h5 style="color: white; font-size: 34px; font-family:courier" class="card-title">${objP.getNombre_pro()}</h5>
                                    <img src="ProductoCTO?menu=Producto&accion=ImagenPro&id=${objP.getId_pro()}" alt="Imagen" width="100%" height="160">        
                                        
                                    <p class="card-text">${objP.getDescripcion_pro()}</p>
                                    <p class="card-text">$ ${objP.getValor_pro()}</p>
                                    <div id="Opciones">
                                        <a style="width: 103px; border-radius: 0px;" class="btn btn-warning" href="ProductoCTO?menu=Producto&accion=Editar&id=${objP.getId_pro()}">Editar</a>
                                        <a style="width: 103px; border-radius: 0px;" class="btn btn-danger"  href="ProductoCTO?menu=Producto&accion=Eliminar&id=${objP.getId_pro()}">Eliminar</a>                                                                 
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </c:forEach>
                </div>   
            <!-------MOSTRAR PRODUCTOS------------------------------------------------------------------->                            
            </div>
            <br>         
        </div>
        <br>

