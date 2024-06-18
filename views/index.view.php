<?php require 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						Listado de productos
						<?php if(auth()): ?>
						<button class="btn btn-sm btn-success">
							Crear
						</button>
						<?php endif; ?>
					</div>
					<div>
						<section class="productos">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Sku</th>
										<th scope="col">Producto</th>
										<th scope="col">Precio</th>
										<th scope="col">Cantidad</th>
										<th scope="col">Fecha</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($products as $product): ?>
										<tr>
											<th scope="row"><?php echo $product['sku']; ?></th>
											<td><?php echo $product['name']; ?></td>
											<td><?php echo $product['price']; ?></td>
											<td><?php echo $product['quantity']; ?></td>
											<td><?php echo $product['deleted_at']; ?></td>
											<td>
												<?php if(auth()): ?>
													<a href="actualizar.php?id=<?php echo $product['id']; ?>"><button class="btn btn-sm btn-info">Actualizar</button></a>
													<a href="borrar.php"><button class="btn btn-sm btn-danger" href="#">Borrar</button></a>
												<?php endif; ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</section>
					</div>
						
					<div class="container">
						<div class="row">
							<div class="col-md-12 d-flex justify-content-center">
								<nav aria-label="Navigation">
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">Anterior</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require 'footer.php'; ?>
