<div class="row footer">
	<div class="container">
		<div class="col-md-12">
			<h6>project of wpa12</h6>
		</div>
	</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<script src="js/sb-admin.js"></script>
<script src="js/demo/dashboard-demo.js"></script>

<!-- script for datepicker-->
<script type="text/javascript">
	$('#dp2').datepicker();
</script>

<!-- Script For Tab -->
<script>
            $('#myTab a').click(function (e) {
              e.preventDefault()
              $(this).tab('show')
            })
</script>
<!-- Script for Image Lightbox-->
<script type="text/javascript">
            $(document).ready(function() {
                var $lightbox = $('#lightbox');
                
                $('[data-target="#lightbox"]').on('click', function(event) {
                    var $img = $(this).find('img'), 
                        src = $img.attr('src'),
                        alt = $img.attr('alt'),
                        css = {
                            'maxWidth': $(window).width() - 100,
                            'maxHeight': $(window).height() - 100
                        };
                
                    $lightbox.find('.close').addClass('hidden');
                    $lightbox.find('img').attr('src', src);
                    $lightbox.find('img').attr('alt', alt);
                    $lightbox.find('img').css(css);
                });
                
                $lightbox.on('shown.bs.modal', function (e) {
                    var $img = $lightbox.find('img');
                        
                    $lightbox.find('.modal-dialog').css({'width': $img.width()});
                    $lightbox.find('.close').removeClass('hidden');
                });
            });
</script>
</body>
</html>