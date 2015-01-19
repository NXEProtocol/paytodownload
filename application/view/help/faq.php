		<div class="col-md-10 col-md-offset-1">
			
					<div class="panel-group" id="accordion-test-2">
					<?php foreach ($faqs as $faq) { ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-test-<?php echo $faq->id; ?>" href="#collapseOne-<?php echo $faq->id; ?>" class="collapsed">
									 <?php echo $faq->title; ?>
									</a>
								</h4>
							</div>
							<div id="collapseOne-<?php echo $faq->id; ?>" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									 <?php echo $faq->faq; ?>
                                     	</div>
							</div>
						</div>
					<?php } ?>
					</div>
			
				</div></div></div>