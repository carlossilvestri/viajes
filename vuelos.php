<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<?php
include 'inc/layout/head.php';
?>

<body class="subpage">

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s section-plans bg-w-secondary section-subpage-first">
		<div class="subp-header">
			<div class="container">
				<div class="section-title-wrapper text-center">
					<h2 class="section-title">Encuentra los mejores vuelos</h2>
					<p>Trabajamos con más de 50 aerolíneas para poder comparar precios y ofrecerte los mejores precios y ventajas.</p>
				</div>
			</div>
		</div>
		<section class="c-s section-plans bg-w-secondary">
			<div class="container">
				<div class="section-content section-plans-content">
					<div class="section-title-wrapper text-center">
						<h2 class="section-title">Descubre nuestras <span class="primary-accent">mejores ofertas</span></h2>
						<p>¿Necesitas un viaje ya organizado? Te ofrecemos planes con todo incluido a los mejores precios, consulta ahora nuestras novedades y ofertas.</p>
					</div>
					<div class="plans-wrapper">
						<div class="deals-wrapper">
							<article class="package-item">
								<figure class="package-image" style="background-image: url(img/deal-1.jpg);"></figure>
								<div class="package-content">
									<h3>Vacaciones tropicales:<br>Las islas de Langkawi</h3>
									<p>Disfruta de un clima tropical increíble en Langkawi, las islas más bonitas de toda Malasia.</p>
									<div class="package-meta">
										<ul>
											<li>
												<i class="fas fa-clock"></i>
												7D/6N
											</li>
											<li>
												<i class="fas fa-user-friends"></i>
												max: 10
											</li>
											<li>
												<i class="fas fa-map-marker-alt"></i>
												Malasia
											</li>
										</ul>
									</div>
								</div>
								<div class="package-price">
									<div class="review-area">
										<span class="review-text">(25 reseñas)</span>
										<div class="rating-start-wrap d-inline-block">
											<div class="rating-start">
												<span style="width: 80%"></span>
											</div>
										</div>
									</div>
									<h6 class="price-list">
										<span>750€</span>
										por persona
									</h6>
									<div class="button button-w text-center contact-modal-trigger">Información</div>
								</div>
							</article>
							<article class="package-item">
								<figure class="package-image" style="background-image: url(img/deal-2.jpg);"></figure>
								<div class="package-content">
									<h3>Un fin de semana en:<br>Las Islas Santorini</h3>
									<p>¿Quieres conocer la parte más romántica y bonita de Grecia? Te ofrecemos un fin de semana en Santorini</p>
									<div class="package-meta">
										<ul>
											<li>
												<i class="fas fa-clock"></i>
												8D/7N
											</li>
											<li>
												<i class="fas fa-user-friends"></i>
												max: 4
											</li>
											<li>
												<i class="fas fa-map-marker-alt"></i>
												Grecia
											</li>
										</ul>
									</div>
								</div>
								<div class="package-price">
									<div class="review-area">
										<span class="review-text">(17 reseñas)</span>
										<div class="rating-start-wrap d-inline-block">
											<div class="rating-start">
												<span style="width: 100%"></span>
											</div>
										</div>
									</div>
									<h6 class="price-list">
										<span>820€</span>
										por persona
									</h6>
									<div class="button button-w text-center contact-modal-trigger">Información</div>
								</div>
							</article>
							<article class="package-item">
								<figure class="package-image" style="background-image: url(img/deal-3.jpg);"></figure>
								<div class="package-content">
									<h3>Una aventura inolvidable:<br> Conoce el río Oxolotan</h3>
									<p>Te ofrecemos una de las mejores experiencias, vacaciones de verano en un recorrido de varios días en el río Oxolotan.</p>
									<div class="package-meta">
										<ul>
											<li>
												<i class="fas fa-clock"></i>
												6D/5N
											</li>
											<li>
												<i class="fas fa-user-friends"></i>
												max: 2
											</li>
											<li>
												<i class="fas fa-map-marker-alt"></i>
												Croacia
											</li>
										</ul>
									</div>
								</div>
								<div class="package-price">
									<div class="review-area">
										<span class="review-text">(43 reseñas)</span>
										<div class="rating-start-wrap d-inline-block">
											<div class="rating-start">
												<span style="width: 80%"></span>
											</div>
										</div>
									</div>
									<h6 class="price-list">
										<span>530€</span>
										por persona
									</h6>
									<div class="button button-w text-center contact-modal-trigger">Información</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="faq-wrapper" class="c-s section-last-cta">
			<div class="container">
				<div class="section-content section-last-cta-content">
					<div class="row dm">
						<div class="col-lg-4 dp">
							<div class="hero-contact-wrapper">
								<div class="hero-contact-content section-contact-content">
									<span class="hero-contact-title">¿En qué podemos ayudarte?</span>
									<form id="contact-form-2" action="" method="POST">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<div class="contact-input-wrapper">
														<span class="material-icons-two-tone input-icon">account_circle</span>
														<input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<div class="contact-input-wrapper">
														<span class="material-icons-two-tone input-icon">phone</span>
														<input id="contactPhone" type="text" class="contact-input" name="contactPhone" placeholder="Teléfono..." required>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="contact-input-wrapper">
												<span class="material-icons-two-tone input-icon">email</span>
												<input id="contactEmail" type="email" class="contact-input" name="contactEmail" autocomplete="email" placeholder="Email..." required>
											</div>
										</div>
										<div class="contact-button-wrapper text-center">
											<button type="submit" class="button large">Contáctame</button>
										</div>
										<div id="mail-status"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-8 dp">
							<div class="last-cta-content-left">
								<h3 class="primary-color">¿Tienes alguna pregunta?</h3>
								<div class="faq-content">
									<div class="faq-content-inner">
										<div class="tab-content faq-content" id="faqTabContent">
											<div class="tab-pane fade active show" id="general-questions" role="tabpanel" aria-labelledby="general-questions-tab">
												<div id="accordion">
													<div class="card">
														<div class="card-header" id="headingZero">
															<h5 class="card-header-title">
																<button class="btn btn-link" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
																	¿Puedo cancelar mi billete de avión?<i class="fas fa-plus"></i><i class="fas fa-minus"></i>
																</button>
															</h5>
														</div>
														<div id="collapseZero" class="collapse show" aria-labelledby="headingZero" data-parent="#accordion">
															<div class="card-body">
																Por supuesto, podrás cancelar tu billete de forma gratuita si lo haces 24 horas antes del vuelo. Si cancelas pasadas las 24 horas tendrás una penalización del 10% del precio, a no ser que lo justifiques por motivos médicos.
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-header" id="headingOne">
															<h5 class="card-header-title">
																<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
																	¿Mi vuelo podría ser cancelado sin previo aviso?<i class="fas fa-plus"></i><i class="fas fa-minus"></i>
																</button>
															</h5>
														</div>
														<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
															<div class="card-body">
																En tiempos de pandemia es complicado mantener la promesa de que el vuelo no puede ser cancelado, pero si ocurre algún problema te ofreceremos la mejor alternativa o te devolveremos el 100% de tu dinero.
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-header" id="headingTwo">
															<h5 class="card-header-title">
																<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																	¿Puedo soliciar un guía al llegar al aeropuerto?<i class="fas fa-plus"></i><i class="fas fa-minus"></i>
																</button>
															</h5>
														</div>
														<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
															<div class="card-body">
																Dependiendo de que país vaya a visitar, podemos ofrecerle el servicio de guía turístico y le ayudará en cuanto llegue al aeropuerto a conocer la ciudad y los mejores lugares.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		include 'inc/layout/footer.php';
		?>
		<div id="contact-modal-wrapper" class="contact-modal-wrapper mfp-hide  animate__animated">
			<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
			<div class="contact-modal-content">
				<div class="contact-modal-form-wrapper">
					<h2 class="contact-title text-center">¿En qué podemos ayudarte?</h2>
					<form id="contact-modal-form" action="includes/contact/sendcontact.php" method="POST">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="contact-input-wrapper">
										<span class="material-icons-two-tone input-icon">account_circle</span>
										<input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="contact-input-wrapper">
										<span class="material-icons-two-tone input-icon">phone</span>
										<input id="contactPhone" type="text" class="contact-input" name="contactPhone" placeholder="Teléfono..." required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="contact-input-wrapper">
								<span class="material-icons-two-tone input-icon">email</span>
								<input id="contactEmail" type="email" class="contact-input" name="contactEmail" autocomplete="email" placeholder="Email..." required>
							</div>
						</div>
						<div class="contact-button-wrapper text-center">
							<button type="submit" class="button">Enviar información</button>
						</div>
						<div id="mail-status"></div>
					</form>
				</div>
			</div>
		</div>
</body>
<?php
include 'inc/layout/scripts.php';
?>

</html>