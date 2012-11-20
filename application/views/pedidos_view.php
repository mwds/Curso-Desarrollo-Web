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
										<td>Estado</td>
								</tr>
						</thead>

						<tbody>

						<?php foreach ($pedidos as $pedidos_item): ?>

							<tr>
									<td>
										<a class="btn" href="pedidos/<?php echo $pedidos_item['pedido_id'] ?>">
											<i class="icon-arrow-down" title="Ver Pedido"></i>
										</a>
									</td>
									<td><?php echo $pedidos_item['pedido_id'] ?></td>
									<td><?php echo $pedidos_item['pedido_fecha'] ?></td>
									<td><?php echo $pedidos_item['estado_nombre'] ?></td>
							</tr>
							<tr>
								<td colspan="4">
									<div class="span12">
										<label class="control-label" for="inputobservaciones">Observaciones: </label>
										<textarea rows="3"><?php echo $pedidos_item['pedido_descripcion'] ?></textarea>
									</div>

									<br>

									<div class="span2">
										<label class="radio"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Productos</label>
									</div>
									
									<div class="span6">
										<label class="radio"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Ordenes de Compra</label>
									</div>

									<h5>Productos</h5>

									<table class="table table-bordered table-striped">

										<thead>
											<tr class="info">
												<td>Nombre</td>
												<td>Presentación</td>
												<td>Cantidad</td>
											</tr>
										</thead>

										<tbody>

											<?php foreach ($productos as $producto): ?>
											
											<tr>
												<td><?php echo $producto['producto_nombre'] ?></td>
												<td><?php #echo $producto['pedido_detalle_cantidad'] ?></td>
												<td><?php echo $producto['pedido_detalle_cantidad'] ?></td>
											</tr>

											<?php endforeach ?>

										</tbody>

									</table>

									<h5>Ordenes de compra</h5>

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
												<td colspan="5">

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
												<td colspan="5">

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

						<?php endforeach ?>

			</tbody>

		</table>

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