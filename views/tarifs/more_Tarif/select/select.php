<div class="wrap_prev">
<p class="prev mr-0 text-muted ml-2" id="prevprev"><i class="fa fa-angle-left pt-0 prevprevbackI" aria-hidden="true"></i></p>
</div>
<div class="map_<?php echo $step; ?>"></div>
<p class="mb-2 text-center mt-1 font-weight-bold topTitle">Выбор тарифа</p>
             <hr class="my-2 topline">
             <p class="mb-1 mt-1 ml-3 text-left font-weight-bold tarifTitle">Тариф "<?php echo $selectTarif[1] ; ?>"</p>
             <hr class="my-2 mx-3">
       	   <div class="mx-0 text-left grid_select">
            <?php for($i=0;$i<1; $i++): ?>
       	   	   <div class="c-<?php echo $i; ?>">
       	   	   	    <div id="map_prevPrev" >
       	   	   	    	<div class="wrap_selctTarif">
                                     <p class="mb-1 ml-3 font-weight-bold">Период оплаты - <?php echo $selectTarif[$i]['pay_period']; ?><br><?php if($i == 0){echo "600";}elseif ($i == 1){echo "550";}elseif ($i == 2){echo "510";}elseif ($i == 3){echo "450";}  ?> <span class="rub">Р</span> /мес </p>
                                     <div class="wrap_pay">
                                      <p class="ml-3 mb-0">разовый платеёж - <?php echo $selectTarif[$i]['price']; ?></p>
                                      <p class=" ml-3 mb-2">со счёта спишеться - <?php echo $selectTarif[$i]['price']; ?></p>
                                      </div>
                                      <div class="wrap_period">
                                      <?php foreach ($pay_period as $key => $value): ?> 
                                         <p class=" ml-3 mb-0 grey-text">вступит в силу - сегодня</p>
                                         <p class=" ml-3 mt-0">активно до -  <?php echo $value; ?></p>
                                      <?php endforeach; ?>
                                      </div>
                                      <hr class="mx-4 my-1">
                                      <div class="wrap_button mx-3">
                                      <input class="button px-5 button_w" type="button" value="Выбрать">
                                      </div>
       	   	   	    	</div>
       	   	   	    </div>
       	   	   </div>
                <?php endfor; ?>
       	   </div>
