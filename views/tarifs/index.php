<?php include ROOT. '/views/layouts/header.php'; ?>
       <section class="container-fluid mx-0 px-0">
          <div id="result2">
          </div>
          <div id="result1">
          </div>
           <div id="result">
          </div>
       	  <div class="grid_index" id="facePage">
            <?php for($i=0;$i<3; $i++): ?>
       	   	   <div class=" px-0 a-<?php echo $i; ?>">
       	   	   	    	<p class="mb-1 mt-2 ml-3 color_tarifs font-weight-bold">Тариф " <?php echo $tarif_one_data[$i]['title'] ; ?>"</p>
       	   	   	    	<hr class="ml-4 mr-0 my-2">
       	   	   	    	<div>
                        <div class="wrap_ind_i_<?php echo $i; ?>">
       	   	   	    		<p class="next mr-5 mb-0 text-muted"><i id="page_<?php echo $i; ?>" class="fa fa-angle-right mt-2 py-1" aria-hidden="true"></i></p>
                        </div>
                        <div class="wrap_speed_<?php echo $i; ?>">
       	   	   	    		<span class="speed p-1" id="colorSpeed_<?php echo $i; ?>"> <?php echo $tarif_one_data[$i]['speed']; ?> Мбит/с</span>
                        <p class="my-1 ml-3 mb-2 font-weight-bold">350- <?php echo $tarif_one_data[$i]['price']; ?> <span class="rub">Р</span> /мес </p>
       	   	   	    		 <div class="wrap_option_<?php echo $i; ?>">
                        <p class="my-1 ml-3 grey-text"><?php if($i == 1){echo $tarif_one_data[3][0]. "<br>";echo $tarif_one_data[4][1];}elseif($i == 2){echo $tarif_one_data[4][0]. "<br>";echo $tarif_one_data[4][1]. "<br>";echo $tarif_one_data[4][2];} ?></p>
                        </div>
                        </div>
       	   	   	    	<hr class="ml-4 mr-0 my-0">
                      <div class="height_block ml-3 my-3">
       	   	   	    	<a href="https://www.sknt.ru">узнать подробнее на сайте www.sknt.ru</a>	
                      </div>
                    
                       <div class="my-0 mashkar mx-0"></div>
                       <hr class="mb-3 mt-0 mx-0">
       	   	   	    	</div>
       	   	   </div>
                <?php endfor; ?>
       	   </div>
      </section>

<?php include ROOT. '/views/layouts/footer.php'; ?>

