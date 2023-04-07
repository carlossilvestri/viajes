<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<?php
include 'inc/layout/head.php';
?>

<body>

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s hero-section">
		<div class="container">
			<div class="hero-content">
				<div class="row dm">
					<div class="col-lg-8 dp text-right">
						<span class="hero-subtitle"><span class="domain"></span></span>
						<h1 class="hero-title">¡Tenemos las mejores ofertas de viajes!</h1>
						<p>Con <span class="domain"></span> tienes una gran cantidad de aerolíneas al mejor precio, nosotros buscamos las ofertas por ti. Comienza a viajar y céntrate en disfrutar.</p>
					</div>
					<div class="col-lg-4 dp text-center">
						<div class="hero-cta-box">
							<div class="hero-cta-box-content">
								<div class="hero-contact-wrapper">
									<div class="hero-contact-content">
										<span class="hero-contact-title">¿En qué podemos ayudarte?</span>
										<form id="contact-form" action="" method="POST">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-two">
		<div class="container">
			<div class="section-content section-two-content">
				<div class="row dm">
					<div class="col-lg-6 dp">
						<div class="row">
							<div class="col-lg-6">
								<img src="img/h-i-1.jpg" class="h-img img-fluid" alt="" />
							</div>
							<div class="col-lg-6">
								<img src="img/h-i-2.jpg" class="h-img h-img-2 h-img-mb img-fluid" alt="" />
								<img src="img/h-i-3.jpg" class="h-img h-img-3 img-fluid" alt="" />
							</div>
						</div>
					</div>
					<div class="col-lg-6 dp">
						<h2>¿Estás listo para viajar?<br><span class="primary-accent">Los mejores vuelos en oferta</span></h2>
						<ul class="list-big list-pr">
							<li><span class="material-icons-two-tone list-icon">done_all</span>Cancelación de billetes gratuita antes de 24h</li>
							<li><span class="material-icons-two-tone list-icon">done_all</span>Vuelos directos y conexiones rápidas</li>
							<li><span class="material-icons-two-tone list-icon">done_all</span>Ofertas de vuelo + hotel con gastos incluídos</li>
							<li><span class="material-icons-two-tone list-icon">done_all</span>Trabajamos con más de 50 aerolíneas y comparalos los mejores precios</li>
						</ul>
						<div class="button-wrapper">
							<a class="button contact-modal-trigger">Quiero Información</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	<section id="count-me-in-wrapper" class="c-s section-last-cta">
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
							<div class="cta-i-w">
								<i class="flaticon-040-green-energy"></i>
							</div>
							<h3>¿ESTÁS LISTO PARA VIAJAR? <br><span>¡ESTAMOS ESPERÁNDOTE!</span></h3>
							<p class="lccl-p">¿Tienes alguna duda de que compañía elegir para viajar? En <span class="domain"></span> te daremos las mejores opciones para que disfrutes al máximo tus vacaciones de la manera más económica posible.</p>
							<div class="row">
								<div class="col-lg-3 col-6">
									<div class="stats-col-content">
										<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="10000" data-speed="2000" data-refresh-interval="10">10.000</span>+</span>
										<span class="stats-col-text">Vuelos Reservados</span>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="stats-col-content">
										<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="25000" data-speed="2500" data-refresh-interval="10">25000</span>+</span>
										<span class="stats-col-text">Reservas de Hotel</span>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="stats-col-content">
										<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="36" data-speed="1000" data-refresh-interval="1">36</span></span>
										<span class="stats-col-text">Guías turísticos</span>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="stats-col-content">
										<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="50000" data-speed="2000" data-refresh-interval="10">50000</span>+</span>
										<span class="stats-col-text">Clientes fieles</span>
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