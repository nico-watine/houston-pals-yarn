---
url: /pals-canine-design-center
title: Interactive Design Center | Houston PALS
description: Use our guided PALS Canine Design Center process to generate a visual mock-up of your pet’s unique injury solution.
og-title: Interactive Canine Design Center | Houston PALS
og-description: Use our guided PALS Canine Design Center process to generate a visual mock-up of your pet’s unique injury solution.
og-image: /img/product-builder/og-image/build-a-brace-og.png
layout: default-jquery2
body-id: build-a-brace
body-class: build-a-brace
---
<section class="grid-x grid-padding-x page-intro">
	<div class="cell medium-offset-1">
		<h1 class="title" style="text-transform: none; letter-spacing: normal;"><a href="/pals-canine-design-center.php">PALS Canine Design Center</a></h1>
		<div class="prose">
			<p>Use our guided PALS Canine Design Center process to generate a visual mock-up of your pet’s unique injury solution.</p>
			<p>Each PALS-produced limb support is custom fitted to match your pet’s exact needs.</p>
			<a href="/products.php" class="td-underline hover-td-none h5"><strong>Learn more about our products.</strong></a>
		</div>
	</div>
</section>
<div class="grid-x grid-padding-x" style="padding-bottom: 40px;">
	<div class="cell">
		<div class="product-builder-dog-model">
			<img class="img-layer" style="z-index: 3;" src="" alt="" id="tailored-finish-img">
			<img class="img-layer" style="z-index: 2;" src="" alt="" id="injury-solution-img">
			<img class="img-layer" style="z-index: 1;" src="" alt="" id="affected-limb-img">
			<img src="/img/product-builder/dog/tan-dog.png" alt="" id="coat-color-img">
		</div>
	</div>
</div>
<div class="row">
	<div class="columns">
		<ul class="product-builder-accordion accordion" data-accordion data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" data-allow-all-closed="true" id="deeplinked-accordion">
			<li class="accordion-item is-active" data-accordion-item>
				<a href="#coat-color" class="accordion-title h5">Coat Color</a>
				<div class="accordion-content text-center" data-tab-content id="coat-color">
					<div class="grid-x">
						<!-- Tan Coat -->
						<div class="cell option-cell auto"><span id="tan-coat" class="active" onclick="getElementById('coat-color-img').src=('/img/product-builder/dog/tan-dog.png')"><img class="circle" src="/img/product-builder/coat-color/tan.png" alt=""><p>Tan</p></span></div>
						<!-- Black Coat -->
						<div class="cell option-cell auto"><span id="black-coat" onclick="getElementById('coat-color-img').src=('/img/product-builder/dog/black-dog.png')"><img class="circle" src="/img/product-builder/coat-color/black.png" alt=""><p>Black</p></span></div>
						<!-- Brown Coat -->
						<div class="cell option-cell auto"><span id="brown-coat" onclick="getElementById('coat-color-img').src=('/img/product-builder/dog/brown-dog.png')"><img class="circle" src="/img/product-builder/coat-color/brown.png" alt=""><p>Brown</p></span></div>
						<!-- Mixed Coat -->
						<!-- <div class="cell option-cell auto"><span id="mixed-coat" onclick="getElementById('coat-color-img').src=('/img/product-builder/dog/mixed-dog.png')"><img class="circle" src="/img/product-builder/coat-color/mixed.png" alt=""><p>Mixed</p></span></div> -->
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#affected-limb" class="accordion-title h5">Affected Limb</a>
				<div class="accordion-content text-center" data-tab-content id="affected-limb">
					<div class="grid-x">
						<!-- Front Toggle -->
						<div class="front-affected-limb-toggle cell option-cell small-6"><span id="front-limb" onclick="getElementById('tailored-finish-img').src=('/img/assets/blank.png'),getElementById('affected-limb-img').src=('/img/product-builder/affected-limb/front/front.png')"><img class="circle" src="/img/product-builder/affected-limb/front/front-icon.png" alt=""><p>Front</p></span></div>
						<!-- Rear Toggle -->
						<div class="rear-affected-limb-toggle cell option-cell small-6"><span id="rear-limb" onclick="getElementById('tailored-finish-img').src=('/img/assets/blank.png'),getElementById('affected-limb-img').src=('/img/product-builder/affected-limb/rear/rear.png')"><img class="circle" src="/img/product-builder/affected-limb/rear/rear-icon.png" alt=""><p>Rear</p></span></div>
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#injury-solution" class="accordion-title h5">Injury Solution</a>
				<div class="accordion-content text-center" data-tab-content id="injury-solution">
					<p id="injury-solution-notification" class="h5">Please specify the <strong>Affected Limb</strong> first.</p>
					<div class="grid-x">
						<!-- Front Orthosis -->
						<div id="front-injury-orthotic-solution" class="is-hidden front-injury-solution-option cell option-cell small-6"><span id="front-orthosis" onclick="getElementById('injury-solution-img').src=('/img/product-builder/injury-solution/front/front-orthotic.png'),getElementById('tailored-finish-img').src=('/img/assets/blank.png')"><img class="circle" src="/img/product-builder/injury-solution/front/front-orthotic-icon.png" alt=""><p><strong>Front Orthosis</strong> <br>Support Brace</p></span></div>
						<!-- Front Prosthesis -->
						<div id="front-injury-prosthetic-solution" class="is-hidden front-injury-solution-option cell option-cell small-6"><span id="front-prosthesis" onclick="getElementById('injury-solution-img').src=('/img/product-builder/injury-solution/front/front-prosthesis.png'),getElementById('tailored-finish-img').src=('/img/assets/blank.png')"><img class="circle" src="/img/product-builder/injury-solution/front/front-prosthetic-icon.png" alt=""><p><strong>Front Prosthesis</strong> <br>Artificial Limb</p></span></div>
						<!-- Rear Orthosis -->
						<div id="rear-injury-orthotic-solution" class="is-hidden rear-injury-solution-option cell option-cell small-6"><span id="rear-orthosis" onclick="getElementById('injury-solution-img').src=('/img/product-builder/injury-solution/rear/rear-orthosis.png'),getElementById('tailored-finish-img').src=('/img/assets/blank.png')"><img class="circle" src="/img/product-builder/injury-solution/rear/rear-orthosis-icon.png" alt=""><p><strong>Rear Orthosis</strong> <br>Support Brace</p></span></div>
						<!-- Rear Prosthesis -->
						<div id="rear-injury-prosthetic-solution" class="is-hidden rear-injury-solution-option cell option-cell small-6"><span id="rear-prosthesis" onclick="getElementById('injury-solution-img').src=('/img/product-builder/injury-solution/rear/rear-prosthesis.png'),getElementById('tailored-finish-img').src=('/img/assets/blank.png')"><img class="circle" src="/img/product-builder/injury-solution/rear/rear-prosthesis-icon.png" alt=""><p><strong>Rear Prosthesis</strong> <br>Artificial Limb</p></span></div>
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#tailored-finish" class="accordion-title h5">Tailored Finish</a>
				<div class="accordion-content text-center" data-tab-content id="tailored-finish">
					<!-- Prechoice Image Samples -->
					<div class="prechoice-samples" id="tailored-finish-prechoice-samples">
						<p class="h5">Please specify the <strong>Injury Solution</strong> to see a pattern applied.</p>
						<div class="grid-x small-up-3 medium-up-5">
							<!-- 1013 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1013.png" alt=""></div>
							<!-- 1025 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1025.png" alt=""></div>
							<!-- 1026 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1026.png" alt=""></div>
							<!-- 1050 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1050.png" alt=""></div>
							<!-- 1053 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1053.png" alt=""></div>
							<!-- 1060 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1060.png" alt=""></div>
							<!-- 1071 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1071.png" alt=""></div>
							<!-- 1083 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1083.png" alt=""></div>
							<!-- 1090 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1090.png" alt=""></div>
							<!-- 1201 -->
							<div class="cell sample-cell"><img class="circle" src="/img/product-builder/tailored-finish/1201.png" alt=""></div>
						</div>
					</div>
					<!-- Front Orthotic -->
					<div class="tailored-finish-options is-hidden grid-x small-up-3 medium-up-5" id="front-orthotic-tailored-finish-option">
						<!-- 1013 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1013" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1013.png')"><img class="circle" src="/img/product-builder/tailored-finish/1013.png" alt=""><p>1</p></span>
						</div>
						<!-- 1025 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1025" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1025.png')"><img class="circle" src="/img/product-builder/tailored-finish/1025.png" alt=""><p>2</p></span>
						</div>
						<!-- 1026 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1026" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1026.png')"><img class="circle" src="/img/product-builder/tailored-finish/1026.png" alt=""><p>3</p></span>
						</div>
						<!-- 1050 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1050" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1050.png')"><img class="circle" src="/img/product-builder/tailored-finish/1050.png" alt=""><p>4</p></span>
						</div>
						<!-- 1053 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1053" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1053.png')"><img class="circle" src="/img/product-builder/tailored-finish/1053.png" alt=""><p>5</p></span>
						</div>
						<!-- 1060 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1060" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1060.png')"><img class="circle" src="/img/product-builder/tailored-finish/1060.png" alt=""><p>6</p></span>
						</div>
						<!-- 1071 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1071" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1071.png')"><img class="circle" src="/img/product-builder/tailored-finish/1071.png" alt=""><p>7</p></span>
						</div>
						<!-- 1083 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1083" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1083.png')"><img class="circle" src="/img/product-builder/tailored-finish/1083.png" alt=""><p>8</p></span>
						</div>
						<!-- 1090 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1090" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1090.png')"><img class="circle" src="/img/product-builder/tailored-finish/1090.png" alt=""><p>9</p></span>
						</div>
						<!-- 1201 -->
						<div class="front-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1201" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/orthotic/front-orthotic-1201.png')"><img class="circle" src="/img/product-builder/tailored-finish/1201.png" alt=""><p>10</p></span>
						</div>
					</div>
					<!-- Front Prosthetic -->
					<div class="tailored-finish-options is-hidden grid-x small-up-3 medium-up-5" id="front-prosthetic-tailored-finish-option">
						<!-- 1013 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1013" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1013.png')"><img class="circle" src="/img/product-builder/tailored-finish/1013.png" alt=""><p>1</p></span>
						</div>
						<!-- 1025 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1025" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1025.png')"><img class="circle" src="/img/product-builder/tailored-finish/1025.png" alt=""><p>2</p></span>
						</div>
						<!-- 1026 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1026" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1026.png')"><img class="circle" src="/img/product-builder/tailored-finish/1026.png" alt=""><p>3</p></span>
						</div>
						<!-- 1050 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1050" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1050.png')"><img class="circle" src="/img/product-builder/tailored-finish/1050.png" alt=""><p>4</p></span>
						</div>
						<!-- 1053 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1053" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1053.png')"><img class="circle" src="/img/product-builder/tailored-finish/1053.png" alt=""><p>5</p></span>
						</div>
						<!-- 1060 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1060" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1060.png')"><img class="circle" src="/img/product-builder/tailored-finish/1060.png" alt=""><p>6</p></span>
						</div>
						<!-- 1071 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1071" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1071.png')"><img class="circle" src="/img/product-builder/tailored-finish/1071.png" alt=""><p>7</p></span>
						</div>
						<!-- 1083 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1083" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1083.png')"><img class="circle" src="/img/product-builder/tailored-finish/1083.png" alt=""><p>8</p></span>
						</div>
						<!-- 1090 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1090" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1090.png')"><img class="circle" src="/img/product-builder/tailored-finish/1090.png" alt=""><p>9</p></span>
						</div>
						<!-- 1201 -->
						<div class="front-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1201" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/front/prosthetic/front-prosthetic-1201.png')"><img class="circle" src="/img/product-builder/tailored-finish/1201.png" alt=""><p>10</p></span>
						</div>
					</div>
					<!-- Rear Orthotic -->
					<div class="tailored-finish-options is-hidden grid-x small-up-3 medium-up-5" id="rear-orthotic-tailored-finish-option">
						<!-- 1013 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1013" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1013.png')"><img class="circle" src="/img/product-builder/tailored-finish/1013.png" alt=""><p>1</p></span>
						</div>
						<!-- 1025 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1025" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1025.png')"><img class="circle" src="/img/product-builder/tailored-finish/1025.png" alt=""><p>2</p></span>
						</div>
						<!-- 1026 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1026" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1026.png')"><img class="circle" src="/img/product-builder/tailored-finish/1026.png" alt=""><p>3</p></span>
						</div>
						<!-- 1050 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1050" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1050.png')"><img class="circle" src="/img/product-builder/tailored-finish/1050.png" alt=""><p>4</p></span>
						</div>
						<!-- 1053 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1053" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1053.png')"><img class="circle" src="/img/product-builder/tailored-finish/1053.png" alt=""><p>5</p></span>
						</div>
						<!-- 1060 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1060" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1060.png')"><img class="circle" src="/img/product-builder/tailored-finish/1060.png" alt=""><p>6</p></span>
						</div>
						<!-- 1071 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1071" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1071.png')"><img class="circle" src="/img/product-builder/tailored-finish/1071.png" alt=""><p>7</p></span>
						</div>
						<!-- 1083 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1083" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1083.png')"><img class="circle" src="/img/product-builder/tailored-finish/1083.png" alt=""><p>8</p></span>
						</div>
						<!-- 1090 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1090" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1090.png')"><img class="circle" src="/img/product-builder/tailored-finish/1090.png" alt=""><p>9</p></span>
						</div>
						<!-- 1201 -->
						<div class="rear-orthotic-tailored-finish-option cell option-cell">
							<span class="finish-1201" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/orthosis/rear-orthosis-1201.png')"><img class="circle" src="/img/product-builder/tailored-finish/1201.png" alt=""><p>10</p></span>
						</div>
					</div>
					<!-- Rear Prosthetic -->
					<div class="tailored-finish-options is-hidden grid-x small-up-3 medium-up-5" id="rear-prosthetic-tailored-finish-option">
						<!-- 1013 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1013" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1013.png')"><img class="circle" src="/img/product-builder/tailored-finish/1013.png" alt=""><p>1</p></span>
						</div>
						<!-- 1025 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1025" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1025.png')"><img class="circle" src="/img/product-builder/tailored-finish/1025.png" alt=""><p>2</p></span>
						</div>
						<!-- 1026 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1026" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1026.png')"><img class="circle" src="/img/product-builder/tailored-finish/1026.png" alt=""><p>3</p></span>
						</div>
						<!-- 1050 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1050" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1050.png')"><img class="circle" src="/img/product-builder/tailored-finish/1050.png" alt=""><p>4</p></span>
						</div>
						<!-- 1053 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1053" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1053.png')"><img class="circle" src="/img/product-builder/tailored-finish/1053.png" alt=""><p>5</p></span>
						</div>
						<!-- 1060 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1060" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1060.png')"><img class="circle" src="/img/product-builder/tailored-finish/1060.png" alt=""><p>6</p></span>
						</div>
						<!-- 1071 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1071" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1071.png')"><img class="circle" src="/img/product-builder/tailored-finish/1071.png" alt=""><p>7</p></span>
						</div>
						<!-- 1083 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1083" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1083.png')"><img class="circle" src="/img/product-builder/tailored-finish/1083.png" alt=""><p>8</p></span>
						</div>
						<!-- 1090 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1090" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1090.png')"><img class="circle" src="/img/product-builder/tailored-finish/1090.png" alt=""><p>9</p></span>
						</div>
						<!-- 1201 -->
						<div class="rear-prosthetic-tailored-finish-option cell option-cell">
							<span class="finish-1201" onclick="getElementById('tailored-finish-img').src=('/img/product-builder/rear/prosthesis/rear-prosthesis-1201.png')"><img class="circle" src="/img/product-builder/tailored-finish/1201.png" alt=""><p>10</p></span>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<h4 class="text-center pt-40 pb-40"><a class="td-underline hover-td-none" href="/ordering-product-faq.php"><strong>Learn how to begin your order.</strong></a></h4>
	</div>
</div>
