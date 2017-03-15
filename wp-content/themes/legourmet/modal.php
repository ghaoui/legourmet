<div id="modal<?php the_ID();?>" class="modal" data-easein="bounce<?php echo $modal;?>In" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close close<?php echo $modal;?>" >×</button>
            <div class="text-center">
            <h2 class="sub-title">NOS <?php the_title();?></h2>
            </div>
          </div>
          <div class="modal-body">
            <div class="uk-panel uk-panel-box">
                <?php the_content();?>
            </div>
          </div>
        </div>
      </div>
    </div>