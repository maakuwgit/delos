<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Delos
 * @since Delos 0.3.7
 */

get_header('front-page'); ?>
		<main id="top">
			<figure id="topFig" class="hero" data-background>
				<div class="feature">
					<img alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/hero-top.jpg">
				</div>
			</figure>
			<div id="topDiv" class="callout">
				<h1 class="uppercase">Health Science + Building Science</h1>
				<h2>Introducing an integrated approach to helping your home elevate your health.</h2>
			</div>
			<aside id="healthy_scroll" data-scroll>
				<figure id="healthyFig">
					<img id="healthyImg" alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/parallax-healthy_home.jpg" data-direction="margin-right">
				</figure>
				<div id="definitionDiv" class="callout grey" data-depth="0.90">
					<h3 class="uppercase">THE DEFINITION OF A HEALTHY HOME <br class="show-for-large">IS ABOUT TO CHANGE</h3>
					<p>How can the homes we create help to improve our physical and emotional well-being? By combining the best of science, architecture, sustainability and design to create an indoor environment that better sustains us and helps restore our vitality and balance. To transform the very notion of what a home can contribute to our life and longevity. This is the promise of Wellness Real Estate&trade;, now being seamlessly integrated in luxury residential and commercial properties worldwide.</p>
				</div>
			</aside>
		</main>		
		<article id="top_scroll" data-scroll>
			<div id="chopraDiv" class="callout grey has_quote" data-depth="1.80">
				<blockquote>Homes with Delos' wellness program are built on many individual features which, when combined, have an unprecedented positive health impact.</blockquote>
				<cite>Dr. Deepak Chopra<small class="block">Wellness Expert and<br>Delos Advisory Board Member</small></cite>
			</div>
			<div id="clintonDiv" class="callout has_quote" data-depth="0.20">
				<blockquote>Delos is designing spaces to solve health problems before they're created. It will literally change the way we live.</blockquote>
				<cite class="small">President Bill Clinton</cite>
			</div>
		</article>
		<article id="innovation">
			<figure class="hero" data-background>
				<div class="feature">
					<img alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/hero-innovation.jpg">
				</div>
				<figcaption>
					<h2 class="uppercase">INNOVATION THAT SUSTAINS <br class="show-for-large">BODY AND MIND</h2>
					<p>Built on the foundation of an extensive research effort that includes leading doctors, scientists, engineers and architects, Delos is on a mission to transform ordinary homes into intelligent spaces that nurture and sustain well&#8209;being.</p>
					<p>By combining the brightest ideas in residential living with scientifically&#8209;driven wellness technologies and solutions, Delos has permanently changed the concept of what a home can provide. From the natural elements of air, water and light to choice of design and materials, every aspect of the interior environment has been re&#8209;engineered to improve resident health. For a difference you can feel on an individual level, day after day.</p>
					<p>Through this process of pioneering research and invention, Delos created the WELL Building Standard&trade;, the world's first building standard exclusively focused on health and wellness. Introduced to the industry in October 2014, it is a merger of advanced science with innovative design and construction on a scale never before imagined. The WELL Building Standard&trade; is currently optimized for commercial office space, revolutionizing the work environment to focus on occupant well&#8209;being.</p>
				</figcaption>
			</figure>
			<section id="indoors_scroll" data-scroll>
				<figure id="indoorsFig">
					<img id="indoorsImg" alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/parallax-healthier_indoors.jpg">
				</figure>
				<div id="indoorsDiv" class="callout has_quote">
					<blockquote>Building healthier indoor environments can actually preserve and enhance human health and quality of life.</blockquote>
					<cite class="small">Brent Bauer, MD<br>Medical Director, Well Living Lab; Professor of Medicine, Mayo Medical School;<br>Director, Mayo Clinic Complementary and Integrative Medicine Program</cite>
				</div>
			</section>
		</article>
		<article id="circadian_day">
			<div id="circadianHero" class="hero">
				<h2>Want to know more? Here's how we make your home a haven of health</h2>
			</div>
			<div class="content">
				<h3 class="uppercase">THE HIDDEN BRILLIANCE OF&nbsp;LIGHT</h3>
				<p>The Circadian Day by Delos&trade; system provides a customized lighting environment to encourage your internal clock to be more in sync with the 24&#8209;hour day. This helps better regulate your sleep, appetite, digestion, hormonal balance, temperature and energy levels.</p>
			</div>
			<div id="evidence" class="callout has_quote">
				<blockquote>Mounting evidence indicates that disruption of circadian regulation is associated with a wide variety of adverse health consequences, including increased risk for premature death, cancer, metabolic syndrome, cardiovascular dysfunction, immune dysregulation, reproductive problems, mood disorders and learning deficits.</blockquote>
				<cite class="small">J.A. Evans and A.J. Davidson<br>Health Consequences of Circadian Disruption in Humans and Animal Models, 2013.<br><br>Prog. Mol. Biol. Transl. Sci. 119, 283–323</cite>
			</div>	
			<section id="circadian_parallax">
				<figure class="fullwidth hero" data-background data-pan>
					<div class="feature">
						<img alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/parallax-circadian.jpg">
					</div>
					<figcaption class="uppercase">Circadian Day by Delos&trade;</figcaption>
				</figure>
			</section>
		</article>		
		<section id="home_wellness" class="gallery" data-scroll="horizontal">
			<figure id="slide_quality" data-background>
				<div class="feature">
					<img alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/parallax-air_quality.jpg">
				</div>
				<figcaption class="callout grey">
					<h3>EXCEPTIONAL AIR QUALITY TO HELP YOU BREATHE EASIER</h3>
					<p>Indoor air pollution is one of the World Health Organization's top five environmental health risks. To improve your home's air quality, Wellness Premier&trade; uses its proprietary advanced purification techniques to provide fresh, contaminant&#8209;free air in every room to benefit all residents, including those suffering from asthma and other breathing disorders.</p>
				</figcaption>
			</figure>
			<figure id="slide_filtration" data-background>
				<div class="feature">
					<img alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/parallax-water_filtration.jpg">
				</div>
				<figcaption class="callout grey">
					<h3 class="uppercase">ADVANCED WATER FILTRATION TO MAKE HYDRATION FAR HEALTHIER</h3>
					<p>Wellness Premier&trade; conducts an on&#8209;site water test and corresponding laboratory analysis to customize a purification system that inhibits adverse chemicals and bacteria.</p>
				</figcaption>
			</figure>
			<figure id="slide_posture" data-background>
				<div class="feature">
					<img alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/parallax-posture.jpg">
				</div>
				<figcaption class="callout grey">
					<h3 class="uppercase">MAINTAIN HEALTHY POSTURE WITH ERGONOMIC DESIGN</h3>
					<p>The ergonomics of your home can affect the wear and tear on your body as you bend and stretch to do everyday tasks. Delos tailors your environment with improvements including supportive flooring, customized countertop height and other ergonomic design elements to enhance ease of movement.</p>
				</figcaption>
			</figure>
			<figure id="slide_intelligence" data-background>
				<div class="feature">
					<img alt="lipsum" src="<?php echo get_template_directory_uri(); ?>/images/parallax-intelligence.jpg">
				</div>
				<figcaption class="callout grey">
					<h3 class="uppercase">An active presence that continually optimizes your&nbsp;surroundings</h3>
					<p>The Home Wellness Monitoring System acts as the "brain" of your home, utilizing sensors to constantly monitor the quality of your environment, and keeping you informed with regular status updates.</p>
				</figcaption>
			</figure>
		</section>
		<nav data-scroll-nav="home_wellness">
			<a id="nextBtn" href="#next" class="uppercase right">&rsaquo;</a>
			<a id="prevBtn" href="#prev" class="uppercase disabled">&lsaquo;</a>
		</nav>
<?php get_footer(); ?>