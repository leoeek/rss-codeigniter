<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


    <main role="main" class="container">
		<div class="row">
			<div class="col-lg-4">
        <div class="list-group" id="listaCategoria">
          <?php foreach ($lista as $item):?>
          <a class="list-group-item list-group-item-action" href="#" data-id="<?=$item->id?>"><?=$item->nome?></a>
          <?php endforeach;?>
          </div>
			</div>
			<div class="col-lg-8">				
				<?php /*<?php foreach($lista as $item):?>
				<div class="card">
					<!-- <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/07/13/10/32/light-bulb-3535435_960_720.jpg" alt="Card image cap"> -->
					<div class="card-body">
						<h5 class="card-title"><?=$item['title']?></h5>
						<p><b><?=$item['data']?></b></p>
						<p class="card-text"><?=$item['descricao']?></p>
						<a href="#" class="btn btn-primary"><?=$item['link']?></a>
					</div>
				</div>					
				<?php endforeach;?>	*/ ?>
			</div>
		</div>
    </main>
