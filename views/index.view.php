<?php require 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						Listado de productos
						<?php if(auth()): ?>
						<a class="btn btn-sm btn-success" href="nuevo.php">Crear Nuevo Producto</a>
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
									</tr>
								</thead>
								<tbody>
									<?php foreach($products as $product): ?>
										<tr>
											<th scope="row"><?php echo $product['sku']; ?></th>
											<td><?php echo $product['name']; ?></td>
											<td><?php echo $product['price']; ?></td>
											<td><?php echo $product['quantity']; ?></td>
											<td class="nada">
												<?php if(auth()): ?>
													<a href="actualizar.php?id=<?php echo $product['id']; ?>"><button class="derech">Actualizar</button></a>
													<a href="borrar.php?id=<?= $product['id']; ?>"><button class="izq href="#">Borrar</button></a>
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
									<?php $numero_paginas = numero_pag($blog_config['prod_por_pag'], $conexion); ?>
									<ul class="pagination">
										<?php if (pagina_actual() === 1): ?>
											
										<?php else: ?>
											<li class="page-item"><a class="page-link" href="index.php?p=<?php echo pagina_actual() - 1; ?>">Anterior</a></li>
										<?php endif; ?>
										<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
											<li class="page-item"><a class="page-link" href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
										<?php endfor; ?>		
										<?php if (pagina_actual() === $numero_paginas): ?>
											<?php echo $numero_paginas; ?>
										<?php else: ?>
											<li class="page-item"><a class="page-link" href="index.php?p=<?php echo pagina_actual() + 1; ?>">Siguiente</a></li>
										<?php endif; ?>
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