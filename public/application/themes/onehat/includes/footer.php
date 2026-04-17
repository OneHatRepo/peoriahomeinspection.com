
<footer id="footer">
	<div class="topBar"></div>
	<div id="footerContainer">
		<svg class="N" preserveAspectRatio="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 0 337.08 337.08"><defs><linearGradient id="grayN" x1="168.54" y1="337.08" x2="168.54" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#393939"/><stop offset="1"/></linearGradient></defs><title>footerGradientN</title><rect width="337.08" height="337.08" style="fill:url(#grayN)"/></svg>
		<svg class="S" preserveAspectRatio="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 0 337.08 337.08"><defs><linearGradient id="grayS" x1="168.54" x2="168.54" y2="337.08" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#393939"/><stop offset="1" stop-color="#2f2f2f"/></linearGradient></defs><title>footerGradientS</title><rect width="337.08" height="337.08" style="fill:url(#grayS)"/></svg>

		<?php
		$stack = Stack::getByName('Footer');
		if (!empty($stack)) {
			$stack->display($c);
		}
		?>
		
		<a href="#top"><div class="toTop"></div></a>
		<script>
		$(function() {
			var topButton = $('footer .toTop'),
				top = $('a.top');
			topButton.click(toTop);
			function toTop(e) {
				e.preventDefault();
				$('html,body').scrollTo(top, {
					offsetTop: 0,
					duration: 2000
				});
			}
		});
		</script>

		<div class="contactInfo">
			<ul>
				<li><a href="tel:3097121556">(309) 712-1556</a></li>
				<li><a href="mailto:integrityhomeinspecting@gmail.com">integrityhomeinspecting@gmail.com</a></li>
				<li><a href="https://www.facebook.com/peoriainspection" target="_blank">Facebook</a></li>
				<li><a href="/sitemap">Sitemap</a></li>
			</ul>
		</div>
		
		<p><a href="https://onehat.com" title="Website design for Peoria and Bloomington IL"><svg id="siteBy" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 0 325.65 84.83"><defs><linearGradient id="orange1" x1="93.48" y1="43.91" x2="124.33" y2="24.12" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#b22b25"/><stop offset="1" stop-color="#ec7e23"/></linearGradient></defs><title>siteBy</title><path d="M80.76,71.67c8.63,13.5,25.95,19.21,39.72,4.45C138.33,57,135.91,4.24,104.3.24,78-3.08,56.66,28.3,61.58,51.55c0.79,3.75,11.9,6.07,11.06,2.08h0C69.27,37.73,79.71,14,97,8.63c28.47-8.84,27.24,48.85,12.49,63.51-8.88,8.83-18,5.47-21.68-6.85C84.74,65.06,80.14,67.86,80.76,71.67Z" style="fill:#b22b25"/><path d="M127,83h-0.37V80.45h-0.82V80.1h2v0.34H127V83Zm3.76-2.41-1,2.41h-0.11l-1-2.41V83H128.3V80.1h0.57l0.85,2.12,0.85-2.12h0.57V83h-0.37V80.61Z" style="fill:#b22b25"/><path d="M87.82,65.28c-3.72-12.5-.05-23.64,10.08-31.37,16-12.24,39.86-18.65,59.41-22.73,6.31-1.32-3-7.1-6.51-6.36C126,10,75.48,20.46,75.35,52.93a34.62,34.62,0,0,0,5.41,18.74Z" style="fill:url(#orange1)"/><path d="M177.45,46.48c0,10.06-7.08,14.55-14,14.55-7.75,0-13.71-5.34-13.71-14.1,0-9,5.9-14.49,14.16-14.49S177.45,38.17,177.45,46.48Zm-20.62.28c0,5.28,2.58,9.27,6.8,9.27,3.93,0,6.68-3.88,6.68-9.38,0-4.27-1.91-9.16-6.63-9.16C158.8,37.49,156.83,42.21,156.83,46.76Z" style="fill:#fff"/><path d="M184.42,41.2c0-3.14-.06-5.79-0.23-8.15h6.07l0.34,4.1h0.17a9.86,9.86,0,0,1,8.71-4.72c4.77,0,9.72,3.09,9.72,11.74V60.41h-6.91V45c0-3.93-1.46-6.91-5.22-6.91a5.8,5.8,0,0,0-5.39,4,7.1,7.1,0,0,0-.28,2.25V60.41h-7V41.2Z" style="fill:#fff"/><path d="M222.73,48.67c0.17,4.94,4,7.08,8.43,7.08a20.58,20.58,0,0,0,7.58-1.24l1,4.77A25.64,25.64,0,0,1,230.2,61c-8.87,0-14.1-5.51-14.1-13.88,0-7.58,4.61-14.72,13.37-14.72,8.93,0,11.8,7.3,11.8,13.31a17.32,17.32,0,0,1-.22,2.92H222.73Zm12-4.83c0.06-2.53-1.07-6.68-5.67-6.68-4.27,0-6.07,3.88-6.35,6.68h12Z" style="fill:#fff"/><path d="M248.35,20.53h7V36.82h0.11a9.24,9.24,0,0,1,3.43-3.15,9.38,9.38,0,0,1,4.72-1.24c4.66,0,9.55,3.09,9.55,11.85V60.41h-6.91V45.08c0-4-1.46-7-5.28-7A5.63,5.63,0,0,0,255.59,42a5.86,5.86,0,0,0-.28,2.08V60.41h-7V20.53Z" style="fill:#fff"/><path d="M302.9,53.84a43.86,43.86,0,0,0,.39,6.57h-6.24l-0.45-3h-0.17A10.17,10.17,0,0,1,288.35,61c-5.51,0-8.59-4-8.59-8.15,0-6.91,6.12-10.39,16.23-10.34V42.1c0-1.8-.73-4.77-5.56-4.77a14.49,14.49,0,0,0-7.36,2l-1.35-4.49a19.7,19.7,0,0,1,9.89-2.42c8.76,0,11.29,5.56,11.29,11.52v9.89ZM296.16,47c-4.89-.11-9.55,1-9.55,5.11a3.62,3.62,0,0,0,3.93,3.93,5.6,5.6,0,0,0,5.39-3.76,5,5,0,0,0,.23-1.52V47Z" style="fill:#fff"/><path d="M319.08,26v7h6.57v5.17h-6.57V50.3c0,3.31.9,5.06,3.54,5.06a8.52,8.52,0,0,0,2.69-.34l0.11,5.28a14.88,14.88,0,0,1-5,.73,8,8,0,0,1-6-2.3c-1.46-1.57-2.14-4-2.14-7.64V38.22H308.4V33.05h3.93V28Z" style="fill:#fff"/><path d="M0.53,51.23a3.75,3.75,0,0,0,2,.57,1.46,1.46,0,0,0,1.65-1.32c0-.58-0.38-1-1.26-1.44a2.78,2.78,0,0,1-1.81-2.33c0-1.7,1.48-2.77,3.28-2.77a4,4,0,0,1,2,.45l-0.5,1.28a3.34,3.34,0,0,0-1.61-.4,1.34,1.34,0,0,0-1.53,1.16c0,0.61.5,1,1.33,1.44A2.64,2.64,0,0,1,5.8,50.24c0,1.78-1.44,2.89-3.44,2.89A4.2,4.2,0,0,1,0,52.5Z" style="fill:#fff"/><path d="M9.94,44.08L8.25,53H6.7l1.69-8.91H9.94Z" style="fill:#fff"/><path d="M13.14,45.43H10.67l0.26-1.35h6.49l-0.26,1.35H14.67L13.24,53H11.7Z" style="fill:#fff"/><path d="M22.26,49h-3.2l-0.5,2.66h3.59L21.9,53H16.76l1.69-8.91h4.94l-0.25,1.31h-3.4L19.3,47.73h3.21Z" style="fill:#fff"/><path d="M27.4,44.23A10.1,10.1,0,0,1,29.54,44a3.55,3.55,0,0,1,2.14.54,1.74,1.74,0,0,1,.86,1.52,2.31,2.31,0,0,1-1.85,2.15v0a2,2,0,0,1,1.43,2A2.51,2.51,0,0,1,31,52.31a5.39,5.39,0,0,1-3.15.74,12.33,12.33,0,0,1-2.06-.15Zm0.07,7.56a5.41,5.41,0,0,0,.82,0c1.15,0,2.21-.46,2.21-1.65,0-1-.81-1.31-1.74-1.31H28Zm0.79-4.06H29c1.15,0,2-.54,2-1.45,0-.73-0.57-1-1.41-1a3.91,3.91,0,0,0-.82.07Z" style="fill:#fff"/><path d="M34.5,53l0.7-3.66-1.73-5.25h1.64l0.7,2.54c0.2,0.77.29,1.16,0.37,1.56h0c0.24-.42.53-0.92,0.92-1.59l1.6-2.51h1.82L36.73,49.3,36,53H34.5Z" style="fill:#fff"/></svg></a></p>
		<p>
			<a href="/login">Admin Login</a>
			<br />Website layout and design, &copy; 2021 <a href="https://onehat.com" title="">OneHat Technologies, LLC.</a>
		</p>

	</div>
</footer>