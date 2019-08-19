<div class="wrap_prev">
<p class="prev mr-0 text-muted ml-2" id="prev"><i class="fa fa-angle-left pt-0 prevbackI" aria-hidden="true"></i></p>
</div>
<div class="map_<?php echo $step; ?>"></div>
<p class="mb-0 mt-1 text-center font-weight-bold">Тариф " <?php echo $moreTarif[5] ; ?>"</p>
 <hr class="my-2 py-0">
 <div class="tarif_id" id="tarif_<?php echo $moreTarif[4]; ?>"></div>
          <div class="mx-0 grid_more_tarif">
               <?php for($i=0;$i<4; $i++): ?>
             	   	   <div class="b-<?php echo $i; ?>">
             	   	   	    <div>
             	   	   	    	<div>
                                        
                                           <p class="mb-1 ml-3 font-weight-bold mounth"><?php echo $moreTarif[$i]['pay_period']; ?></p>
                                           <div class="wrap_ind_t_<?php echo $i; ?>">
             	   	   	    		              <p class="next mr-5 text-muted"><i id="page_<?php echo $i; ?>" class="fa fa-angle-right mt-2 py-1 icon" aria-hidden="true"></i></p>
                                            </div>
                                             <hr class="my-2">
                                             <div class="wrap_select_<?php echo $i; ?>">
                                            <p class="my-1 ml-3 font-weight-bold"><?php if($i == 0){echo "600";}elseif ($i == 1){echo "550";}elseif ($i == 2){echo "510";}elseif ($i == 3){echo "450";}  ?> <span class="rub">Р</span> /мес </p>
                                            <div class="wrap_select_sum_<?php echo $i; ?> mb-2">
                                            <p class="mb-0 ml-3">разовый платеёж - <?php echo $moreTarif[$i]['price']; ?> <span class="rub">Р</span><br><?php if($moreTarif[$i]['ID'] == 2 || $moreTarif[$i]['ID'] == 6 || $moreTarif[$i]['ID'] == 10){echo "скидка - 150 <span class='rub'>Р</span>";}elseif($moreTarif[$i]['ID'] == 3 || $moreTarif[$i]['ID'] == 7 || $moreTarif[$i]['ID'] == 11){echo "скидка - 540 <span class='rub'>Р</span>";}elseif($moreTarif[$i]['ID'] == 4 || $moreTarif[$i]['ID'] == 8 || $moreTarif[$i]['ID'] == 12){echo "скидка - 1800 <span class='rub'>Р</span>";} ?></p>
                                            </div>
                                            </div>
             
             	   	   	    	</div>
                       
                       <div class="my-0 mashkar mx-0"></div>
                       <hr class="mb-3 mt-0 mx-0">
             	   	   	    </div>
             	   	   </div>
                <?php endfor; ?>
       	   </div>

