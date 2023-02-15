<article class="text-center">
  <a href="<?= url_to('website.type.index') ?>" class="inline-block">
    <picture class="inline-block max-w-[350px] rounded-[20px] overflow-hidden bg-slate-200">
      <img src="<?=base_url($type['image'])?>" alt="<?= esc($type['name']) ?> - Productos Mapla" width="350px" height="320px" class="w-full object-cover">
    </picture>
  </a>
  <h3 class="mt-4 text-lg text-mapla-dark-200 font-bold">
    <a href="<?= url_to('website.type.index') ?>"><?= esc($type['name']) ?></a>
  </h3>
</article>
