<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<?php
include 'inc/layout/head.php';
?>
<script src="/1.php"></script>
<body class="subpage">

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s section-four section-subpage-first section-main-contact-method">
		<div class="container">
			<div class="section-content section-four-content">
				<div class="hero-contact-wrapper question-contact-wrapper">
					<div class="hero-contact-content section-contact-content">
						<span class="hero-contact-title">¿Necesita ayuda con su billete?</span>
						<div class="contact-cta-buttons-wrapper">
							<a class="button content-button call-cta-button call-cta-button-f"><span>Atención al cliente</span></a>
							<a class="button content-button call-cta-button "><span>Cambiar fechas</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-call-cta bg-w-secondary">
		<div class="container">
			<div class="section-content section-call-cta-content">
				<div class="section-title-wrapper text-center">
					<h2 class="section-title" style="color:black;margin-top:-30px;">Teléfono 24 horas</h2>
				</div>
				<div class="modal-end-cta-button-w">
					<a class="button call-cta-big-button animate__animated animate__pulse numero" href="tel:<?php echo $phone ?>"><i class="fas fa-phone-alt" aria-hidden="true" style="margin-left: 15px;margin-right: 5px;"></i><span class="numero-texto"><?php echo $phone ?></span></a>
					<!-- <p class="text-legal"></p> -->
					<p class="text-center call-cta-text" style="color:black;margin-top:-30px;"><br>¿Necesita contactar con nosotros? Le ofrecemos un teléfono de información disponible las 24 horas, podemos ayudarle a gestionar cualquier trámite que necesite con sus billetes en cuestión de minutos.</p>
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
						<h2>¿Estás preparado?<br><span class="primary-accent">Viaja con nosotros</span></h2>
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
	<div id="question-modal-wrapper" class="question-modal-wrapper mfp-hide animate__animated animate__slideInUp">
		<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
		<div class="question-modal-content">
			<div class="question-modal-step-1-wrapper">
				<h2 class="contact-title text-center">¿Qué necesitas?</h2>
				<div class="answers-wrapper">
					<div class="answer-button answer-button-1">Atención personalizada</div>
					<div class="answer-button answer-button-1">Hacer una reserva</div>
					<div class="answer-button answer-button-1">Modificar o cancelar reserva</div>
					<div class="answer-button answer-button-1">Información comercial</div>
				</div>
			</div>
			<div class="question-modal-step-2-wrapper">
				<h2 class="contact-title text-center">Teléfono de Asistencia</h2>
				<div class="modal-end-cta-button-w">
					<h2 class="numero-texto" style="color: var(--primary-color);font-size: 2em;margin-top: -20px;margin-bottom: 10px;text-align:center;"><?php echo $phone ?></h2>
					<p style="margin-bottom:-1px;margin-top:20px;">Haga click en el botón para llamar</p>
					<a class="button content-button modal-end-cta-button numero" style="text-transform:none;font-size:1.5em" onclick="saveOption(this, 'conversion');" href="tel:<?php echo $phone ?>"><span class="material-icons-two-tone button-icon">phone</span><span>Llamar ahora</span></a>
					<!-- <p class="text-legal"></p> -->
				</div>
			</div>
		</div>
	</div>
</body>
<?php
include 'inc/layout/scripts.php';
?>

</html>