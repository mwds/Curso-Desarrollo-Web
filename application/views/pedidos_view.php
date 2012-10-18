<div class="row">
	<div class="span12"><h4>Pedidos No Planificados</h4></div>
</div>
<div class="row">
	<div class="span12">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputNroPedido">Nro. Pedido:</label>
				<div class="controls">
					<input type="text" id="inputNroPedido" placeholder="Nro Pedido">
				</div>		
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="span12">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputEstado">Estado:</label>
				<div class="controls">
					<select>
						<option>Anulada</option>
						<option>Aprobada</option>
						<option>Con Orden de Compra</option>
						<option>Generada</option>
						<option>Iniciada</option>
						<option>Recepcionada</option>
						<option>Revisada</option>
						<option>Todos</option>						
					</select>					
				</div>		
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="pagination">
          	<ul>
	            <li><a href="#">Prev</a></li>
	            <li><a href="#">1</a></li>
	            <li><a href="#">2</a></li>
	            <li><a href="#">3</a></li>
	            <li><a href="#">4</a></li>
	            <li><a href="#">Next</a></li>
	        </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="span12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="info">
                    <td></td>
                    <td></td>
                    <td>O.C.</td>
                    <td>Cod. Ped.</td>
                    <td>Fec. Carga</td>
                    <td>Fec. Vencimiento</td>
                    <td>Estado</td>
                    <td>Observación</td>
                </tr>
            </thead>
            <tbody>

        		<?php #foreach ($pedidos as $pedidos_item): ?>

                  <tr>
                      <td><button class="btn" type="button"><i class="icon-edit"></i></button></td>
                      <td><button class="btn" type="button"><i class="icon-print"></i></button></td>
                      <td><button class="btn" type="button"><i class="icon-arrow-down"></i></button></td>
                      <td><?php #echo $pedidos_item['pedido_id'] ?></td>
                      <td><?php #echo $pedidos_item['pedido_name'] ?></td>
                      <td><?php #echo $pedidos_item['pedido_estado'] ?></td>
                      <td><a href="pedidos/<?php #echo $pedidos_item['pedido_id'] ?>">Ver Pedido</a></td>
                      <td></td>
                  </tr>
                
        		<?php #endforeach ?>
            
            </tbody>

    	</table>
    </div>
</div>

                               