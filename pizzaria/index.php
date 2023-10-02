<?php
    include_once("templates/header.php");
?>
    <div id="main-banner">
        <h1>PLACE AN ORDER</h1>
    </div>
    <div id="main-container">
        <div class="container">
           <div class="row">
            <div class="col-md-12">
               <h2>Make your pizza as you wish:</h2>    
               <form action="process/pizza.php" id="pizza-form">
                <!-- DIV PRA CRIAR LISTA DAS BORDAS -->
                <div class="form-group">
                    <label for="crust">CRUST:</label>
                    <select name="crust" id="crust" class="form-control">
                        <option value="">Choose a crust</option>
                    </select>
                </div>
                <!-- DIV PRA CRIAR LISTA DAS MASSAS -->
                <div class="form-group">
                    <label for="dough">DOUGH:</label>
                    <select name="dough" id="dough" class="form-control">
                        <option value="">Choose a dough</option>
                    </select>
                </div>
                <!-- DIV PRA CRIAR LISTA DOS SABORES -->
                <div class="form-group">
                    <label for="flavours">FLAVOURS (up to 4):</label>
                    <select multiple name="flavours[]" id="flavours" class="form-control">
                    </select>
                </div>
                <!-- DIV PRA CRIAR BOTÃO DE FAZER O PEDIDO -->
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="PLACE ORDER">
                </div>
               </form>
            </div>
          </div> 
        </div>
    </div>
<?php
    include_once("templates/footer.php");
?>