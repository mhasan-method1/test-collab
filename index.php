<?php
$pageTitle = "Home";
$bodyClass = "landing_page";

$css = 'owl.carousel.min.css';
$js = 'vendor/owl.carousel.min.js';

include_once(__DIR__ . "/includes/header.php");
?>

<script src="https://player.vimeo.com/api/player.js"></script>
<main class="hide-overflow">

	<!-- Video -->
	<section class="video-sec relative">
		<div class="embed-responsive">
			<iframe id="vimeo-player" src="https://player.vimeo.com/video/1054597487?background=1" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen"></iframe>
			
			<img src="images/poster.jpg" id="hidePoster" class="abs_100 fit-cover"  alt="Poster">
		</div>
	</section>

	<script>
		const HeroIframe = document.getElementById('vimeo-player');
		const player = new Vimeo.Player(HeroIframe);
		player.on('play', function () {
			document.getElementById('hidePoster').style.opacity = 0;
		});
	</script>

	<a href="https://theconsumerbehaviorlab.com/book.php" target="_blank" data-track="M1 Homepage|click|Book" class="block book-banner p">
		<span class="container flex jc-center">
			<span class="relative flex jc-center flex-wrap book-banner-content">
				<h2>HTMH<br> Book Launch</h2>
				<p>Discover the behavioral<br class="visible-xs"> science principles <br class="hidden-xs"> behind<br class="visible-xs"> the world's most<br class="visible-xs"> iconic brands.</p>
				
				<img src="images/hthm-book-cover.png?ver=1.2" alt="Book Cover">
			</span>
		</span>
	</a>

	<!-- Work -->
	<section class="work-spotlight relative carouselWrap" id="work-spotlight">
		<div class="container">
			<div class="section-header flex flex-wrap">
				<div class="col-20">
					<h2 class="h2">Work</h2>
				</div>
				<div class="col-50">
					<p class="p">We exist to make brands irresistible, helping people discover the products, services and experiences that bring moments of joy to <span class="no-wrap">their lives.</span></p>
				</div>
			</div>
		</div>
		<div class="carousel">

			<div class="spotlight-carousel owl-carousel mobileSwipe">
				<div class="item">
					<div class="single-work">
						<a href="old-fashioned-week.php" data-track="Work Spotlights|click|Evan Williams">
							<span class="work-img relative block">
								<img src="images/ofw/thumbnail.jpg?ver=3" alt="Evan Williams">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>Elijah Craig:</span>  Ushering in a New Era of the Old Fashioned Cocktail</span>
						</a>
					</div>
				</div>	
				<div class="item">
					<div class="single-work">
						<a href="evan-williams.php" data-track="Work Spotlights|click|Evan Williams">
							<span class="work-img relative block">
								<img src="images/ew/ew-thumb.jpg" alt="Evan Williams">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>Evan Williams:</span> Kentucky First Distiller Introduction into Collegiate Sports</span>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="single-work">
						<a href="fuego.php" data-track="Work Spotlights|click|Fuego">
							<span class="work-img relative block">
								<img src="images/fuego/fuego-thumb.jpg" alt="Lunazul">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>Fuego:</span> Golden Hour Anytime</span>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="single-work">
						<a href="oldfitz.php" data-track="Work Spotlights|click|Old Fitzgerald Bourbon">
							<span class="work-img relative block">
								<img src="images/oldFitz-caseStudy-thumbnail.jpg?ver=2" alt="Lunazul">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>Old Fitzgerald Bourbon:</span> Bringing Prestige Within Reach</span>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="single-work">
						<a href="fizz-district.php" data-track="Work Spotlights|click|Fizz District">
							<span class="work-img relative block">
								<img src="images/fizz-thumb.jpg?ver=2" alt="Lunazul">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>Fizz District:</span> A Bubble Becomes a Brand with Buzz</span>
						</a>
					</div>
				</div>
				
				<div class="item">
					<div class="single-work">
						<a href="lunazul.php" data-track="Work Spotlights|click|Lunzaul">
							<span class="work-img relative block">
								<img src="images/lunazul-poster.jpg" alt="Lunazul">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>Lunazul:</span> An Underdog Disrupts the Tequila Boom</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="elijah-craig.php" data-track="Work Spotlights|click|Brand Rejuvenation">
							<span class="work-img relative block">
								<img src="images/elijah-craig-poster.jpg" alt="Five 9">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>ELIJAH CRAIG:</span> The Father of Bourbon Gets His Groove Back</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="cape-tide.php" data-track="Work Spotlights|click|Brand Creation">
							<span class="work-img relative block">
								<img src="images/cape-tide-thumb.jpg" alt="Cape Tide">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>CAPE TIDE:</span> Riding the Tide to Make Waves in RTD's</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="rittenhouse.php" data-track="Work Spotlights|click|Trade Engagement">
							<span class="work-img relative block">
								<img src="images/rittenhouse-poster.jpg" alt="Evan Williams">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View <br class="visible-xs"> Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>RITTENHOUSE:</span> A Classic Rye Becomes the Go-To for Bartenders</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="wellow.php" data-track="Work Spotlights|click|Brand Creation">
							<span class="work-img relative block">
								<img src="images/wellow-poster.jpg" alt="Lunazul">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View Project<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="proj-name"><span>Brand Creation</span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container relative">
			<div class="carousel-status">
				<div class="carousel-value"><span class="work-currentPage">1</span>&nbsp;<span>of</span>&nbsp;<span class="work-allPages"></span></div>
			</div>
		</div>
	</section>

	<!-- Perspective -->
	<section class="news-sec relative carouselWrap" id="press">
		<div class="container">
			<div class="section-header flex flex-wrap">
				<div class="col-35">
					<h2 class="h2">Perspectives</h2>
				</div>
				<div class="col-50">
					<p class="p">We are a proudly independent creative and media agency grounded in behavioral science.  We work with Indulgence Brands that deserve to<span class="no-wrap"> be experienced.</span></p>
				</div>
			</div>
			<span class="greyBg yellow hidden-xs"></span>
		</div>
		<div class="carousel">
			<div class="news-carousel owl-carousel mobileSwipe">
					<div class="item">
						<div class="single-work">
							<a href="the-most-indulgent-super-bowl-spots-of-2026.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Most Indulgent Super Bowl Spots of 2026">
								<span class="work-img relative block">
									<img src="images/superbowl26-thumb.jpg?ver=2" alt="Image">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p block">The Most Indulgent Super Bowl Spots of 2026</span>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single-work">
							<a href="celebrating-work-that-works-allison-arling-giorgi-joins-2026-effie-jury.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Celebrating Work That Works: Allison Arling-Giorgi Joins 2026 Effie Jury">
								<span class="work-img relative block">
									<img src="images/AAG_thumbnail.jpg" alt="Image">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p block">Celebrating Work That Works: Allison Arling-Giorgi Joins 2026 Effie Jury</span>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single-work">
							<a href="expansion-beats-substitution-how-ambitious-na-beer-brands-are-building-a-5b-market.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Expansion Beats Substitution: How Ambitious NA Beer Brands Are Building a $5B Market">
								<span class="work-img relative block">
									<img src="images/expansion-beats-mob.jpg" alt="Image">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p block">Expansion Beats Substitution: How Ambitious NA Beer Brands Are Building a $5B Market</span>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single-work">
							<a href="straight-from-cbl-how-to-make-your-media-plan-work-6x-harder.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Straight from CBL: How to Make Your Media Plan Work 6x Harder">
								<span class="work-img relative block">
									<img src="images/charles-thumb.jpg" alt="Image">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p block">Straight from CBL: How to Make Your Media Plan Work 6x Harder</span>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single-work">
							<a href="in-2026-look-for-the-growth-driving-return-of-storytelling.php" class="flex flex-wrap press-row relative" data-track="In the press|click|In 2026, Look for the Growth-Driving Return of Storytelling">
								<span class="work-img relative block">
									<img src="images/imp-stories-thumb.jpg" alt="Image">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p block">In 2026, Look for the Growth-Driving Return of Storytelling</span>
							</a>
						</div>
					</div>

					<div class="item">
						<div class="single-work">
							<a href="why-consumers-crave-members-only-experiences.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Behavioral Science of Exclusivity: Why Consumers Crave 'Members-only' Experiences">
								<span class="work-img relative block">
									<img src="images/vip-member-thumb.jpg" alt="Image">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p block">The Behavioral Science of Exclusivity: Why Consumers Crave "Members-only" Experiences</span>
							</a>
						</div>
					</div>

					<div class="item">
					<div class="single-work">
						<a href="how-pumpkin-spice-went-from-unbeatable-lto-to-thanksgiving-turkey.php" class="flex flex-wrap press-row relative" data-track="In the press|click|How Pumpkin Spice Went from Unbeatable LTO to Thanksgiving Turkey">
							<span class="work-img relative block">
								<img src="images/pumpkin-spice-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">How Pumpkin Spice Went from Unbeatable LTO to Thanksgiving Turkey</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="what-are-your-category-cues-sometimes-standing-out-starts-with-fitting-in.php" class="flex flex-wrap press-row relative" data-track="In the press|click|What are Your Category Cues? Sometimes Standing Out Starts with Fitting In">
							<span class="work-img relative block">
								<img src="images/category-cues-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">What are Your Category Cues? Sometimes Standing Out Starts with Fitting In</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="finding-opportunity-in-what-others-ignore.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Straight from CBL: Finding Opportunity in What Others Ignore">
							<span class="work-img relative block">
								<img src="images/finding-opportunity-masthead-mob.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Straight from CBL: Finding Opportunity in What Others Ignore</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="small-joys-big-business-the-behavioral-science-of-everyday-indulgence.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Small Joys, Big Business: The Behavioral Science of Everyday Indulgence">
							<span class="work-img relative block">
								<img src="images/small-joys-big-business-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Small Joys, Big Business: The Behavioral Science of Everyday Indulgence</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="cognitive-commerce-how-to-turn-media-spend-into-mental-real-estate.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Cognitive Commerce: How to Turn Media Spend into Mental Real Estate">
							<span class="work-img relative block">
								<img src="images/cognitive-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Cognitive Commerce: How to Turn Media Spend into Mental Real Estate</span>
						</a>
					</div>
				</div>


				<div class="item">
					<div class="single-work">
						<a href="new-book-hacking-the-human-mind-unpacks-method1-founding-approach.php" class="flex flex-wrap press-row relative" data-track="In the press|click|New Book 'Hacking the Human Mind' Unpacks Method1's Founding Approach">
							<span class="work-img relative block">
								<img src="images/maf-hthm-thumb.png?ver=6" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">New Book "Hacking the Human Mind" Unpacks Method1's Founding Approach</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="go-small-or-go-home-the-rise-of-the-mighty-micro-influencer.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Go Small or Go Home: The Rise of the Mighty Micro-influencer">
							<span class="work-img relative block">
								<img src="images/micro-influencer-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Go Small or Go Home: The Rise of the Mighty Micro-influencer</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="irresistible-by-design-old-fitzgerald-&-the-power-of-distinctive-brand-assets.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Irresistible by Design: Old Fitzgerald & the Power of Distinctive Brand Assets">
							<span class="work-img relative block">
								<img src="images/oldFitz-article-thumbnail.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Irresistible by Design: Old Fitzgerald & the Power of Distinctive Brand Assets</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="when-behavioral-science-misleads-marketers.php" class="flex flex-wrap press-row relative" data-track="In the press|click|When Behavioral Science Misleads Marketers">
							<span class="work-img relative block">
								<img src="images/why-besci-matters-mob.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Everyone's Doing It (And That's Why You Shouldn't): When Behavioral Science Misleads Marketers</span>
						</a>
					</div>
				</div>
				
				<div class="item">
					<div class="single-work">
						<a href="the-insanely-persuasive-power-of-brand-consistency.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Insanely Persuasive Power of Brand Consistency">
							<span class="work-img relative block">
								<img src="images/inanely-persuasive-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">The Insanely Persuasive Power of Brand Consistency</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="straight-from-cbl-how-sensory-triggers-transform-flavor.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Straight from CBL: How Sensory Triggers Transform Flavor">
							<span class="work-img relative block">
								<img src="images/cbl-thumbnail.png?ver=4" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Straight from CBL: How Sensory Triggers Transform Flavor</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="strange-brew-the-behavioral-magic-behind-flavored-beer.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Strange Brew: The Behavioral Magic Behind Flavored Beer">
							<span class="work-img relative block">
								<img src="images/strange-brew-thumbnail.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Strange Brew: The Behavioral Magic Behind Flavored Beer</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="perfect-is-boring-why-we-trust-brands-that-make-mistakes.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Perfect is Boring: Why We Trust Brands That Make Mistakes">
							<span class="work-img relative block">
								<img src="images/brands-masthead-mob.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Perfect is Boring: Why We Trust Brands That Make Mistakes</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="why-cannes-biggest-winners-made-choice-easier.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Why Cannes' Biggest Winners Made Choice Easier (Not Their Ads Louder)">
							<span class="work-img relative block">
								<img src="images/cannes-thumbnail.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Why Cannes' Biggest Winners Made Choice Easier (Not Their Ads Louder)</span>
						</a>
					</div>
				</div>
				
				<div class="item">
					<div class="single-work">
						<a href="why-your-premium-pricing-feels-expensive.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Why Your Premium Pricing Feels Expensive">
							<span class="work-img relative block">
								<img src="images/pricing-feels-expensive-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Why Your Premium Pricing Feels Expensive</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="bigger-than-brand-love-how-irresistibility-beats-affinity.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Bigger Than Brand Love: How Irresistibility Beats Affinity">
							<span class="work-img relative block">
								<img src="images/bigger-than-brand-thumbnail.jpg?ver=2" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Bigger Than Brand Love: How Irresistibility Beats Affinity</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="dont-go-dark-building-irresistible-brands-in-uncertain-times.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Don't Go Dark: Building Irresistible Brands in Uncertain Times">
							<span class="work-img relative block">
								<img src="images/stock-market-thumbnail.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Don't Go Dark: Building Irresistible Brands in Uncertain Times</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="straight-from-cbl-making-your-brand-a-matter-of-habit.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Straight from CBL: Making Your Brand a Matter of Habit">
							<span class="work-img relative block">
								<img src="images/nirEyal-thumbnail.png" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Straight from CBL: Making Your Brand a Matter of Habit</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="mothers-day-is-just-the-beginning-the-be-sci-of-perennial-mom-appeal.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Mother's Day Is Just the Beginning: The behavioral science of Perennial Mom Appeal">
							<span class="work-img relative block">
								<img src="images/mothers-day-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Mother's Day Is Just the Beginning: The Behavioral Science of Perennial Mom Appeal</span>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="single-work">
						<a href="why-behavioral-science-is-a-cmos-best-bet.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Why Behavioral Science is a CMO's Best Bet">
							<span class="work-img relative block">
								<img src="images/behavioral-thumbnail1.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Why Behavioral Science is a CMO's Best Bet</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="the-good-ol-premium-how-nostalgia-gives-legacy-cpg-pricing-power.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Good Ol’ Premium: How Nostalgia Gives Legacy CPG Pricing Power">
							<span class="work-img relative block">
								<img src="images/good-olPremium-thumbnail.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">The Good Ol’ Premium: How Nostalgia Gives Legacy CPG Pricing Power</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="being-good-by-being-bad-converting-gen-z-wellness-barriers-into-cpg-entry-points.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Being Good by Being Bad: Converting Gen Z Wellness Barriers into CPG Entry Points">
							<span class="work-img relative block">
								<img src="images/beingGood_thumbnail.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Being Good by Being Bad: Converting Gen Z Wellness Barriers into CPG Entry Points</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="mind-over-machine-how-memory-outranks-algorithms-in-brand-choice.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Mind Over Machine: How Memory Outranks Algorithms in Brand Choice">
							<span class="work-img relative block">
								<img src="images/march-blog_Thumbnail.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Mind Over Machine: How Memory Outranks Algorithms in Brand Choice</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="behavioral-science-a-marketers-secret-weapon.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Behavioral science: A marketer’s secret weapon">
							<span class="work-img relative block">
								<img src="images/marketers-weapon-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Behavioral Science: A marketer’s secret weapon</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="the-new-rules-of-indulgence-and-what-it-means-for-cpg-brands.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The New Rules of Indulgence and What It Means for CPG Brands">
							<span class="work-img relative block">
								<img src="images/trends-report-thumb.png?ver=2" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">The New Rules of Indulgence and What It Means for CPG Brands</span>
						</a>
					</div>
				</div>
			
				<div class="item">
					<div class="single-work">
						<a href="the-holiday-built-on-behavioral-science.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Most Irresistible Super Bowl Ads of 2025">
							<span class="work-img relative block">
								<img src="images/M1-Valentine-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">How Behavioral Science Drives Holiday Sales</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="the-most-irresistible-super-bowl-ads-of-2025.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Most Irresistible Super Bowl Ads of 2025">
							<span class="work-img relative block">
								<img src="images/M1-Superbowl-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">The Most Irresistible Super Bowl Ads of 2025</span>
						</a>
					</div>
				</div>
				
				<div class="item">
					<div class="single-work">
						<a href="the-creative-revolution-will-be-distributed.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Creative Revolution Will Be Distributed">
							<span class="work-img relative block">
								<img src="images/davids-post-header.jpg?ver=8" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">The Creative Revolution Will Be Distributed</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="three-ways-indulgence-brands-can-grow-using-behavioral-science.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Three Ways Indulgence Brands Can Grow Using Behavioral Science">
							<span class="work-img relative block">
								<img src="images/m1-s1-blog-header.png?ver=6" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Three Ways Indulgence Brands Can Grow Using Behavioral Science</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="10-essential-trends-driving-indulgence-and-consumer-cravings.php" class="flex flex-wrap press-row relative" data-track="In the press|click|10 Essential Trends Driving Indulgence and Consumer Cravings">
							<span class="work-img relative block">
								<img src="images/fancy-food-show.png" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">10 Essential Trends Driving Indulgence and Consumer Cravings</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="the-art-of-persuasion-in-the-age-of-ai.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Art of Persuasion in the Age of AI">
							<span class="work-img relative block">
								<img src="images/persuasion-ai-upd.png?ver=6" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">The Art of Persuasion in the Age of AI</span>
						</a>
					</div>
				</div>
				<!-- <div class="item">
					<div class="single-work">
						<a href="the-father-of-bourbon-transcends-time-in-its-new-fathers-day-campaign.php" class="flex flex-wrap press-row relative" data-track="In the press|click|The Father of Bourbon Transcends Time In Its New Father’s Day Campaign">
							<span class="work-img relative block">
								<img src="images/ec-fathers-day.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">The Father of Bourbon Transcends Time In Its New Father’s Day Campaign</span>
						</a>
					</div>
				</div> -->
				<div class="item">
					<div class="single-work">
						<a href="takeaways-from-this-years-craft-brewers-conference.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Takeaways From This Year's Craft Brewers Conference">
							<span class="work-img relative block">
								<img src="images/beer-image.png" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Takeaways From This Year's Craft Brewers Conference</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="single-work">
						<a href="why-guilty-pleasure-should-be-banned-from-moms-vocabulary.php" class="flex flex-wrap press-row relative" data-track="In the press|click|Why Guilty Pleasure Should Be Banned From Moms’ Vocabulary">
							<span class="work-img relative block">
								<img src="images/guilty-pleasures-press.png" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">Why Guilty Pleasure Should Be Banned From Moms’ Vocabulary</span>
						</a>
					</div>
				</div>
				<!-- <div class="item">
					<div class="single-work">
						<a href="icymi-lets-recap-social-media-week-2024.php" class="flex flex-wrap press-row relative" data-track="In the press|click|ICYMI: Let's Recap Social Media Week 2024">
							<span class="work-img relative block">
								<img src="images/social-media-week-2024.png?v=22" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">ICYMI: Let's Recap Social Media Week 2024</span>
						</a>
					</div>
				</div> -->
				<div class="item">
					<div class="single-work">
						<a href="5-things-you-need-to-create-a-successful-food-or-beverage-brand.php" class="flex flex-wrap press-row relative" data-track="In the press|click|5 Things You Need To Create a Successful Food or Beverage Brand">
							<span class="work-img relative block">
								<img src="images/5-things-thumb.jpg" alt="Image">
								<span class="flexible-content flex ai-center jc-center">
									<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
								</span>
							</span>
							<span class="p block">5 Things You Need To Create a Successful Food or Beverage Brand</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container relative">
			<div class="carousel-status">
				<div class="carousel-value"><span class="news-currentPage">1</span>&nbsp;<span>of</span>&nbsp;<span class="news-allPages"></span></div>
			</div>
		</div>
	</section>

	<!-- Podcast -->
	<section class="podcast-sec relative" id="podcasts">
		<div class="container">
			<div class="podcast-header flex">
				<div class="col-40 flex jc-sb ai-start flex-wrap">
					<div class="podcast-title">
						<h2 class="h2 marginB0">Consumer <span class="no-wrap">Behavior Lab</span></h2>
					</div>
					<!-- <img src="images/cblLogo.svg" alt="Consumer Behavior Lab" class="cbl-logo"> -->
				</div>
				<div class="col-2 hidden-xs"></div>
				<div class="col-50">
					<p class="p">Our Consumer Behavior Lab is a premier authority on human behavior in marketing, uncovering the insights behind brands, campaigns and the behavioral science that drives them.  Check out the newest episodes from our top-rated business and marketing
					<span class="no-wrap"> podcast below.</span></p>
				</div>
			</div>
			<!-- <div class="podcast-platforms flex flex-wrap">
				<a href="https://open.spotify.com/episode/74YvA0b2ifX4wG61hn3fXI" class="spotify-pod"><img src="images/spotify-icon.svg" alt="spotify icon" target="_blank"></a>
				<a href="https://podcasts.apple.com/us/podcast/behavioral-science-for-brands-leveraging-behavioral/id1658085163" class="apple-pod"><img src="images/apple-icon.svg" alt="apple icon" target="_blank"></a>
				<a href="https://music.youtube.com/playlist?list=PLVHs95-ZYTWaYXSvS_E-u83zapZEuyepA" class="google-pod"><img src="images/google-podcast.svg?ver=2" alt="google icon" target="_blank"></a>
				<a href="https://feeds.buzzsprout.com/2088421.rss" class="rss-feed" target="_blank"><img src="images/rssFeed.svg" alt="rss feed icon"></a>
			</div> -->
			<div class="carousel podcast-wrap">
				<div class="podcast-listing owl-carousel mobileSwipe">
					<div class="item">
						<div class="single-podcast">
							<a href="https://theconsumerbehaviorlab.com/les-binet-uncovered-surprising-secrets-of-ad-effectiveness-you-may-have-never-heard-before.php" target="_blank">
								<span class="podcast-img relative flex">
									<img src="images/les-binet-thumbnail-final.jpg" alt="Podcast Thumbnail" class="img-full">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p">Ep46 - Les Binet Uncovered: Surprising Secrets of Ad Effectiveness You May Have Never Heard Before</span>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single-podcast">
							<a href="https://theconsumerbehaviorlab.com/how-starbucks-made-pumpkin-spice-latte-a-cult-favorite-with-scarcity.php" target="_blank">
								<span class="podcast-img relative flex">
									<img src="images/episode-41-thumb.jpg" alt="Podcast Thumbnail" class="img-full">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p">Ep41 - How Starbucks Made Pumpkin Spice Latte a Cult Favorite with Scarcity</span>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single-podcast">
							<a href="https://theconsumerbehaviorlab.com/liquid-death-the-power-of-smashing-category-norms.php" target="_blank">
								<span class="podcast-img relative flex">
									<img src="images/episode-36-thumb.jpg" alt="Podcast Thumbnail" class="img-full">
									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p">Ep36 - Liquid Death: The Power of Smashing Category Norms</span>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single-podcast">
							<a href="https://theconsumerbehaviorlab.com/umlauts-ice-cream-and-whats-in-a-name.php" target="_blank">
								<span class="podcast-img relative flex">
									<img src="images/episode-5-thumb.jpg" alt="Podcast Thumbnail" class="img-full">

									<span class="flexible-content flex ai-center jc-center">
										<span class="view-proj">View<img src="images/long-arrow-right.svg" alt="arrow"></span>
									</span>
								</span>
								<span class="p">Ep04 - Umlauts, ice cream, and what's in a name</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="relative visible-xs">
				<div class="carousel-status">
					<div class="carousel-value"><span class="podcast-currentPage">1</span>&nbsp;<span>of</span>&nbsp;<span class="podcast-allPages"></span></div>
				</div>
			</div>
			<!-- carousel ends -->
			<div class="learnBtn flex jc-end">
				<a href="https://theconsumerbehaviorlab.com/" data-track="Podcasts|click|Learn More" target="_blank" class="btn have-arrow"><span>Learn More <img src="images/long-arrow-right.svg" alt="Arrow"></span></a>
			</div>

			<span class="greyBg hidden-xs"></span>
		</div>
	</section>

	<!-- Solutions -->
	<section class="solutions-sec relative" id="solutions">
		<div class="container">
			<div class="section-header flex flex-wrap">
				<div class="col-30">
					<h2 class="h2">Solutions</h2>
				</div>
				<div class="col-50">
					<p class="p">We're about solutions, not services. Our portfolio of products creates brand value and delivers<span class="no-wrap"> business outcomes.</span></p>
				</div>
			</div>
			<div class="solutions-row flex">
				<div class="col-50">
					<div class="solutions-tabs">
						<li class="tab-link active" data-tab="elevate-tab">Elevate
							<span class="hidden-xs">We enhance the perception, appeal and equity of <span class="no-wrap">your brand.</span></span>
						</li>
						<li class="tab-link" data-tab="engage-tab">Engage
							<span class="hidden-xs">We drive deeper emotional connections and engagement with<br class="hidden-xs"> <span class="no-wrap">your consumers.</span></span>
						</li>
						<li class="tab-link" data-tab="accelerate-tab">Accelerate
							<span class="hidden-xs">We unlock growth and steal market <span class="no-wrap">share faster.</span></span>
						</li>
					</div>
				</div>
				<div class="col-50">
					<div class="solution-tab-content">
						<!-- Elevate -->
						<div id="elevate-tab" class="tab-content active">
							<div class="products-list">
								<p class="p visible-xs" style="margin-bottom: 1em;">We enhance the perception, appeal and equity of <span class="no-wrap">your brand.</span></p>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/dna-icon.svg" alt="Brand DNA" class="product-icon">
										<h3>Brand DNA Decoder</h3>
									</div>
									<div class="product-body">
										<p class="p">Foundational brand strategy that guides building, positioning, or repositioning a brand in market with respect to its core target audience.</p>
									</div>
								</div>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/indulgence-icon.svg" alt="Indulgence Escalator" class="product-icon">
										<h3>Identity Builder</h3>
									</div>
									<div class="product-body">
										<p class="p">Distinctive assets within Brand and Product ID that guide how the brand is experienced in market, focusing on differentiation, ownability, irresistibility. </p>
									</div>
								</div>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/maximizer-icon.svg" alt="Reach Maximizer" class="product-icon">
										<h3>Irresistible Brand Platform</h3>
									</div>
									<div class="product-body">
										<p class="p">Evergreen Brand Platform that provides a campaignable structure, including tagline, key messaging, and marketing-driven proofs of concept.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Engage -->
						<div id="engage-tab" class="tab-content">
							<div class="products-list">
								<p class="p visible-xs" style="margin-bottom: 1em;">We drive deeper emotional connections and engagement with <span class="no-wrap">your consumers.</span></p>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/audience-builder.svg" alt="Audience Builder" class="product-icon">
										<h3>GTM Planner</h3>
									</div>
									<div class="product-body">
										<p class="p">Paid, owned, and earned media strategy, outlining how the brand will drive awareness, consideration, trial, and loyalty.</p>
									</div>
								</div>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/content-catalyst.svg" alt="Content Catalyst" class="product-icon">
										<h3>Culture & Content Catalyst</h3>
									</div>
									<div class="product-body">
										<p class="p">In-depth approach to social and cultural engagement. Provides direction and context across prioritized platforms, guiding conversation and content pillars. </p>
									</div>
								</div>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/event-amplifier.svg" alt="Event Amplifier" class="product-icon">
										<h3>Partnership Activator</h3>
									</div>
									<div class="product-body">
										<p class="p">In-depth approach to events, partnerships, and sponsorships. Help the brand come to life in using additional parties and partnerships to extend audience reach and engagement.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Accelerate -->
						<div id="accelerate-tab" class="tab-content">
							<div class="products-list">
								<p class="p visible-xs" style="margin-bottom: 1em;">We unlock growth and steal market <span class="no-wrap">share faster.</span></p>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/market-expand.svg" alt="Market Expander" class="product-icon">
										<h3>MAX Reach</h3>
									</div>
									<div class="product-body">
										<p class="p">Ensure your brand reaches the largest on-target audience, captures their attention and stands out efficiently and effectively.</p>
									</div>
								</div>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/conversion-booster.svg" alt="Conversion Booster" class="product-icon">
										<h3>MAX Commerce</h3>
									</div>
									<div class="product-body">
										<p class="p">Develop, optimize, and scale your brand’s DTC model for long-term profitability. </p>
									</div>
								</div>
								<div class="single-product">
									<div class="product-head flex ai-center">
										<img src="images/growth-accelerator.svg" alt="Growth Accelerator" class="product-icon">
										<h3>Conversion Booster</h3>
									</div>
									<div class="product-body">
										<p class="p">Achieve growth through short-term sales,  promotional time periods, seasonal initiatives, or any other way that prompts more immediate returns.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Meet the Team -->
	<section class="team-section  carouselWrap" id="team">
		<div class="container">
			<div class="section-header flex flex-wrap">
				<div class="col-30">
					<h2 class="h2">People</h2>
				</div>
				<div class="col-50">
					<p class="p">We are a team of 50+ strategists, designers, creatives, media experts, and behavioral science practitioners who are focused on creating deeper emotional connections that drive <span class="no-wrap">Brand Value.</span></p>
				</div>
			</div>
		</div>
		<div class="carousel">
			<div class="team-carousel owl-carousel mobileSwipe" id="myCarousel">
				<!-- Team members -->
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/michaelaaron-flicker-62a6a87/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|MichaelAaron Flicker">
							<span class="member-img relative block">
								<img src="images/micheal-aaron.jpg" alt="MichealAaron Flicker">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">MichaelAaron Flicker</span>
								<span class="designation block">President</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/paul-nelson-53767a3/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Paul Nelson">
							<span class="member-img relative block">
								<img src="images/paul-nelson.jpg" alt="Paul Nelson">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Paul Nelson</span>
								<span class="designation block">Managing Director</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/allisonarling/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Allison Arling-Giorgi">
							<span class="member-img relative block">
								<img src="images/allison-arling-giorgi.jpg" alt="Allison Arling">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Allison Arling-Giorgi</span>
								<span class="designation block">Head of Brand</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/libby-weston-webb-8ba83b1/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Libby Weston-Webb">
							<span class="member-img relative block">
								<img src="images/Libby-Weston-Webb.jpg" alt="Libby Weston-Webb">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Libby Weston-Webb</span>
								<span class="designation block">Head of Client Delivery</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/finddavidmuldoon/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|David Muldoon">
							<span class="member-img relative block">
								<img src="images/david-muldoon.jpg" alt="David Muldoon">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">David Muldoon</span>
								<span class="designation block">Executive Creative Director</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/leah-wymer-2946941b1/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Leah Wymer">
							<span class="member-img relative block">
								<img src="images/leah-wymer.jpg" alt="Leah Wymer">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Leah Wymer</span>
								<span class="designation block">Director of Client Partnership</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/ianorekondy" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Ian Orekondy">
							<span class="member-img relative block">
								<img src="images/ian-orekondy.jpg" alt="Ian Orekondy">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Ian Orekondy</span>
								<span class="designation block">Director of Media, Analytics, & Innovation</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/brockwhitfield/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Brock Whitfield">
							<span class="member-img relative block">
								<img src="images/brock-whitfield.jpg" alt="Brock Whitfield">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Brock Whitfield</span>
								<span class="designation block">Director of Operations</span>
							</span>
						</a>
					</div>
				</div>
				<!-- <div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/sarahrossnayak/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Sarah Nayak">
							<span class="member-img relative block">
								<img src="images/sarah-nayak.jpg" alt="Sarah Nayak">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Sarah Nayak</span>
								<span class="designation block">Director of Growth</span>
							</span>
						</a>
					</div>
				</div> -->
				<!-- <div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/toni-racioppo-72b63b4/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Toni Racioppo">
							<span class="member-img relative block">
								<img src="images/toni-racioppo.jpg" alt="Toni Racioppo">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Toni Racioppo</span>
								<span class="designation block">Head of Media Investments</span>
							</span>
						</a>
					</div>
				</div> -->
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/copyjess" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Jessica Bennett">
							<span class="member-img relative block">
								<img src="images/jess-bennet.jpg" alt="Jessica Bennett">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Jessica Bennett</span>
								<span class="designation block">Creative Director</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/khuram-noman-53562a6/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Khuram Noman">
							<span class="member-img relative block">
								<img src="images/khuram-noman.jpg?ver=6" alt="Khuram Noman">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Khuram Noman</span>
								<span class="designation block">Head of Programming</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/harrison-weathers-365970187/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Harrison Weathers">
							<span class="member-img relative block">
								<img src="images/harrison-wheathers.jpg" alt="Harrison Weathers">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Harrison Weathers</span>
								<span class="designation block">Associate Creative Director</span>
							</span>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/dunia" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Dunia Ibarra">
							<span class="member-img relative block">
								<img src="images/dunia-labarra.jpg?ver=6" alt="Dunia Ibarra">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Dunia Ibarra</span>
								<span class="designation block">Head of Digital Media</span>
							</span>
						</a>
					</div>
				</div>
				<!-- <div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/jeff-douville-b4404112" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Jeff Douville">
							<span class="member-img relative block">
								<img src="images/jeff-douville.jpg?ver=6" alt="Jeff Douville">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Jeff Douville</span>
								<span class="designation block">Head of Sports & Entertainment Partnerships</span>
							</span>
						</a>
					</div>
				</div> -->
				<div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/monya-nicol-a450a3189/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Monya nicol">
							<span class="member-img relative block">
								<img src="images/monya-nicol.jpg?ver=6" alt="Monya Nicol">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Monya Nicol</span>
								<span class="designation block">Head of Creative Operations</span>
							</span>
						</a>
					</div>
				</div>
				<!-- <div class="item">
					<div class="team-member">
						<a href="https://www.linkedin.com/in/paulcanney1994/" target="_blank" rel="noopener noreferrer" data-track="Meet the team|click|Paul Canney">
							<span class="member-img relative block">
								<img src="images/paul-canney.jpg" alt="Paul Canney">
								<span class="flexible-content">
									<span class="white-circle">
										<span>LinkedIn <img src="images/black-arrow.svg" alt="Arrow"></span>
									</span>
								</span>
							</span>
							<span class="member-info block">
								<span class="member-name block">Paul Canney</span>
								<span class="designation block">Head of Production</span>
							</span>
						</a>
					</div>
				</div> -->
			</div>
		</div>
		<div class="container flex jc-sb visit-linkedin flex-wrap">
			<div class="carousel-status hidden-xs">
				<div class="carousel-value"><span class="team-currentPage">1</span>&nbsp;<span>of</span>&nbsp;<span class="team-allPages"></span></div>
			</div>
			<a href="https://www.linkedin.com/company/meetmethod1/people" class="btn have-arrow" data-track="Meet the team|click|View Our Full Team"><span>View our full team <img src="images/long-arrow-right.svg" alt="Arrow"></span></a>
		</div>
	</section>

	<?php
		include_once(__DIR__ . "/includes/connect-with-us.php");
	?>

</main>

<?php
include_once(__DIR__ . "/includes/mandatory.php");
include_once(__DIR__ . "/includes/footer.php");
?>

<script>
	const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(link => {
      link.addEventListener('click', () => {
        // Remove active class from all tab links and contents
        tabLinks.forEach(link => link.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        // Add active class to clicked tab and corresponding content
        link.classList.add('active');
        document.getElementById(link.dataset.tab).classList.add('active');
      });
    });
</script>