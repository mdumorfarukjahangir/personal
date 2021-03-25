<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
											<?php the_custom_logo(); ?>
												 
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area menu-top-right">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	

														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<?php
															
															
															wp_nav_menu( array(
																'theme_location' => 'top-menu',
																'menu_id'        => 'top-menu',
																'menu_class'     => 'nav main-menu menu navbar-nav',
																 
															) );
															
															?>
													        <!--/ End Naviagiton -->
												        </div>
											</div>
										</div>
									</nav>
									<!--/ End Main Menu -->	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>