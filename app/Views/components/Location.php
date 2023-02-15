<article data-shop="<?= esc($shop['name']) ?>" data-coords="<?= esc($shop['mapCoords']) ?>" class="location p-6 bg-white border border-mapla-dark-100 rounded-[20px] shadow-sm">
  <h3 class="font-bold text-lg text-mapla-dark-200"><?= esc($shop['name']) ?></h3>
  <h4 class="font-bold text-mapla-purple-200"><?= esc($shop['city']) ?></h4>
  <p>
    <span class="inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="13" viewBox="0 0 13 13" fill="none"><path fill="#81DF3B" fill-rule="evenodd" d="M0 4.9102C0 2.2024 2.2433 0 5 0s5 2.2024 5 4.9102c0 3.8475-4.53 7.8201-4.7228 7.9874A.4243.4243 0 0 1 5 13a.4223.4223 0 0 1-.2772-.1029C4.53 12.7303 0 8.7577 0 4.9102Zm2.2222-.0352c0 1.4934 1.2461 2.7083 2.7778 2.7083s2.7778-1.215 2.7778-2.7083c0-1.4934-1.2461-2.7083-2.7778-2.7083S2.2222 3.3817 2.2222 4.875Z" clip-rule="evenodd"/></svg>
    </span>
    <span class="text-mapla-dark-100"><?= esc($shop['address']) ?></span>
  </p>
  <div class="mt-6 mb-3 grid grid-cols-2">
    <div>
      <p>
        <span class="inline-block">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none"><path fill="#81DF3B" fill-rule="evenodd" d="M0 6.5C0 2.9158 2.9158 0 6.5 0S13 2.9158 13 6.5 10.0842 13 6.5 13 0 10.0842 0 6.5Zm9.2084 3.5209a.5403.5403 0 0 0 .383-.1588.5411.5411 0 0 0 0-.766L7.0415 6.5467V3.25A.5414.5414 0 0 0 6.5 2.7084a.5414.5414 0 0 0-.5416.5416v3.5209c0 .144.0568.2816.1587.383L8.8254 9.862a.5402.5402 0 0 0 .383.1588Z" clip-rule="evenodd"/></svg>
        </span>
        <span class="text-mapla-dark-200 font-bold">Lunes a Viernes</span>
      </p>
      <p class="text-mapla-dark-100"><?= esc($shop['hours'][0]['open']) ?> a <?= esc($shop['hours'][0]['close']) ?></p>
    </div>
    <div>
      <p class="text-mapla-dark-200 font-bold">Sábado</p>
      <p class="text-mapla-dark-100"><?= esc($shop['hours'][1]['open']) ?> a <?= esc($shop['hours'][1]['close']) ?></p>
    </div>
  </div>
  <p class="mb-7">
    <span class="inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 13" fill="none"><path fill="#81DF3B" d="M2.8502.0438 2.018 0c-.2628 0-.5257.0876-.7009.2629C.9227.6133.2657 1.2704.0904 2.1466c-.3066 1.3142.1753 2.8913 1.3143 4.4683S4.734 10.7328 8.589 11.828c1.2266.3504 2.1904.1314 2.979-.3505a2.5847 2.5847 0 0 0 1.139-1.6647l.1314-.6133c.0438-.1752-.0439-.3943-.2191-.4818L9.8594 7.4472c-.1752-.0876-.3942-.0438-.5256.1315L8.2386 8.9804c-.0877.0876-.219.1314-.3505.0876-.7447-.2629-3.2417-1.3142-4.5998-3.9426-.0438-.1314-.0438-.2629.0439-.3505l1.0513-1.1828c.0877-.1314.1314-.3066.0877-.438L3.2008.3066c-.044-.1315-.1753-.2629-.3506-.2629Z"/></svg>
    </span>
    <span class="text-mapla-dark-200 font-bold text-sm"><?= esc($shop['phone']) ?></span>
  </p>
  <button class="location__btn-map py-3 px-4 text-sm bg-mapla-purple-100 text-white font-bold rounded-full">Ver Sucursal</button>
  <button class="ml-3 py-3 px-4 text-sm bg-white text-mapla-dark-200 border border-mapla-dark-200 font-bold rounded-full">Cómo llegar</button>
</article>
