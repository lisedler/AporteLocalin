<?php get_header();

$home_out = "
<div id='centro'>
        <div class='container'>
            <div class='row'>            
                <div class='col-sm-3 col-md-6 col-lg-4 text-center'>
						<div class=tercio>
							<a href='" .WHATIF_BLOGURL. "/presentacion-participa'>" . __('Participate','whatif') . "</a>
						</div>
                </div>

                <div class='col-sm-3 col-md-6 col-lg-4 text-center'>
						<div>
							<img src='" .WHATIF_BLOGTHEME. "/images/default-home.png' alt='" . __('Home','whatif') . "' width='300px' />
						</div>
                </div>

                <div class='col-sm-3 col-md-6 col-lg-4 text-center'>
						<div class=tercio>
							<a href='" .WHATIF_BLOGURL. "/presentacion-consulta'>" . __('View messages','whatif') . "</a>
						</div>
                </div>

            </div>
        </div>	   	
</div>
";


echo $home_out;

get_footer(); ?>
