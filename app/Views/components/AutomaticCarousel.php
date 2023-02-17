<section class="automatic__carousel relative overflow-hidden">
  <div class="automatic__carousel-slider flex transition-transform delay-100" aria-label="automatic carousel">
    <article class="automatic__carousel-slide relative flex-shrink-0 w-full h-full">
      <picture class="inline-block">
        <source srcset="<?= base_url('/images/home/banner-2x.webp')?>" media="(min-width: 768px)">
        <img src="<?= base_url('/images/home/banner.webp')?>" alt="Banner" class="w-full h-full object-cover">
      </picture>
    </article>
    <article class="automatic__carousel-slide relative flex-shrink-0 w-full h-full">
      <picture class="inline-block">
        <source srcset="<?= base_url('/images/home/banner-2x.webp')?>" media="(min-width: 768px)">
        <img src="<?= base_url('/images/home/banner.webp')?>" alt="Banner" class="w-full h-full object-cover">
      </picture>
    </article>
    <article class="automatic__carousel-slide relative flex-shrink-0 w-full h-full">
      <picture class="inline-block">
        <source srcset="<?= base_url('/images/home/banner-2x.webp')?>" media="(min-width: 768px)">
        <img src="<?= base_url('/images/home/banner.webp')?>" alt="Banner" class="w-full h-full object-cover">
      </picture>
    </article>
  </div>

  <div class="automatic-carousel__navigation mt-4 text-center">
    <label for="radio1">
      <input type="radio" id="radio1" name="radio-carousel-btn" class="cursor-pointer accent-mapla-purple-200" checked>
    </label>
    <label for="radio2">
      <input type="radio" id="radio2" name="radio-carousel-btn" class="cursor-pointer accent-mapla-purple-200">
    </label>
    <label for="radio3">
      <input type="radio" id="radio3" name="radio-carousel-btn" class="cursor-pointer accent-mapla-purple-200">
    </label>
  </div>
</section>
