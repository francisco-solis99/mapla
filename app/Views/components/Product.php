<article class="flex flex-col items-center">
  <picture class="inline-block max-w-[200px]">
    <img src="<?=base_url($product['imageUrl'])?>" alt="<?= esc($product['name']) ?> - Productos Mapla" class="w-full object-cover">
  </picture>
  <div class="text-center">
    <h2 class="text-mapla-dark-200 font-bold text-lg"> <?= esc($product['name']) ?></h2>
    <p class="text-mapla-dark-100 text-sm"><?= esc($product['measure']) ?></p>
    <p class="text-mapla-purple-200 font-bold text-lg"><?= esc($product['price']) ?></p>
  </div>
</article>

