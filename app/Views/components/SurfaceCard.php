<article class="text-center">
  <a href="<?= url_to('website.surface.index') ?>" class="inline-block">
    <picture class="inline-block max-w-[320px] rounded-[20px] overflow-hidden bg-slate-200">
      <img src="<?=base_url($surface['image'])?>" alt="<?= esc($surface['name']) ?> - Productos Mapla" width="350px" height="320px" class="w-full object-cover">
    </picture>
  </a>
  <h3 class="mt-4 text-lg text-mapla-dark-200 font-bold">
    <a href="<?= url_to('website.surface.index') ?>"><?= esc($surface['name']) ?></a>
  </h3>
</article>
