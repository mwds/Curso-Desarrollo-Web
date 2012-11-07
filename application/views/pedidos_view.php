<div class="row">
	<div class="span12"><h4>Pedidos No Planificados</h4></div>
</div>
<div class="row">
	<div class="span4">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputNroPedido">Nro. Pedido:</label>
				<div class="controls">
					<input type="text" id="inputNroPedido" placeholder="Nro Pedido">
				</div>		
			</div>
		</form>
	</div>
	<div class="span8">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputNroExpediente">Nro. Expediente:</label>
				<div class="controls">
					<input type="text" id="inputNroExpediente" placeholder="Nro Expediente">
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
                    <td>Nro. Ped.</td>
                    <td>Fec. Carga</td>
                    <td>Fec. Vencimiento</td>
                    <td>Estado</td>
                </tr>
            </thead>
            <tbody>

        		<?php #foreach ($pedidos as $pedidos_item): ?>

	            <tr>
	                <td><button class="btn" type="button"><i class="icon-arrow-down"></i></button></td>
	                <td><?php #echo $pedidos_item['pedido_id'] ?></td>
	                <td><?php #echo $pedidos_item['pedido_name'] ?></td>
	                <td><?php #echo $pedidos_item['pedido_estado'] ?></td>
	                <td><a href="pedidos/<?php #echo $pedidos_item['pedido_id'] ?>">Ver Pedido</a></td>
	            </tr>
                
        		<?php #endforeach ?>
            	
            	<tr>
            		<td>
            			<div class="span12">
	            			<label class="control-label" for="inputobservaciones">Observaciones: </label>
	            			<textarea rows="3"></textarea>
	            		</div>
	            		<br>
	            		<div class="span2">
	            			<label class="radio"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Productos</label>
						</div>
						<div class="span6">
							<label class="radio"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Orden de Compra</label>
						</div>
						<br>
					    <table class="table table-bordered table-striped">
				            <thead>
				                <tr class="info">
				                    <td>Nombre</td>
				                    <td>Presentación</td>
				                    <td>Cantidad</td>
				                </tr>
				            </thead>
				            <tbody>
				            	<tr>
				                	<td></td>
				                	<td></td>
				                	<td></td>
				            	</tr>
		            		</tbody>
		            	</table>
					    <table class="table table-bordered table-striped">
				            <thead>
				                <tr class="info">
				                    <td></td>
				                    <td>Nro O.C.</td>
				                    <td>Proveedor</td>
				                    <td>Total</td>
				                    <td>Usuario</td>
				                </tr>
				            </thead>
				            <tbody>
				            	<tr>
				                	<td><button class="btn" type="button"><i class="icon-arrow-down"></i></button></td>
				                	<td>0010</td>
				                	<td>Chanchito S.A.</td>
				                	<td>13,69</td>
				                	<td>Auil Jorge Gilberto</td>
				            	</tr>
				            	<tr>
				            		<td>
									    <table class="table table-bordered table-striped">
								            <thead>
								                <tr class="info">
								                    <td>Nombre</td>
								                    <td>Presentación</td>
								                    <td>Cantidad</td>
								                </tr>
								            </thead>
								            <tbody>
								            	<tr>
								                	<td></td>
								                	<td></td>
								                	<td></td>
								            	</tr>
						            		</tbody>
						            	</table>
				            		</td>
				            	</tr>
				            	<tr>
				                	<td><button class="btn" type="button"><i class="icon-arrow-down"></i></button></td>
				                	<td>0011</td>
				                	<td>Tutetamimoso S.A.</td>
				                	<td>0,59</td>
				                	<td>Auil Jorge Gilberto</td>
				            	</tr>
				            	<tr>
				            		<td>
									    <table class="table table-bordered table-striped">
								            <thead>
								                <tr class="info">
								                    <td>Nombre</td>
								                    <td>Presentación</td>
								                    <td>Cantidad</td>
								                </tr>
								            </thead>
								            <tbody>
								            	<tr>
								                	<td></td>
								                	<td></td>
								                	<td></td>
								            	</tr>
						            		</tbody>
						            	</table>
				            		</td>
				            	</tr>
		            		</tbody>
		            	</table>
            	</tr>
            </tbody>

    	</table>
    </div>
</div>

                               