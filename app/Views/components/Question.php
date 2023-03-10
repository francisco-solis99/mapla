<article class="question flex flex-col justify-center relative py-4 px-8 border border-slate-200 rounded-[20px] cursor-pointer transition-all">
  <!-- Title -->
    <header class="question__title flex justify-between items-center">
      <span class="text-mapla-dark-200 font-bold text-lg"><?= esc($question['title']) ?></span>
      <div class="question__icon-open absolute right-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M15 .17C6.7291.17 0 6.899 0 15.1698c0 8.2709 6.7291 15 15 15 8.2709 0 15-6.7291 15-15 0-8.2708-6.7291-15-15-15Zm0 27.9999c-7.168 0-13-5.832-13-13s5.832-13 13-13 13 5.832 13 13-5.832 13-13 13Zm7-12c.5529 0 1-.448 1-1s-.4471-1-1-1h-6v-6c0-.552-.4471-1-1-1s-1 .448-1 1v6H8c-.5529 0-1 .448-1 1s.4471 1 1 1h6v6c0 .552.4471 1 1 1s1-.448 1-1v-6h6Z" clip-rule="evenodd"/></svg>
      </div>
    </header>
    <!-- Content -->
    <div class="question__content scale-0 max-h-0">
      <p class="mt-5 text-mapla-dark-100">
        <?= esc($question['content']) ?>
      </p>
      <div class="absolute top-4 right-4 pointer-events-none ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M4.394 4.5636C7.2263 1.7304 10.9931.17 15 .17c4.0066 0 7.7734 1.5605 10.606 4.3941C28.4395 7.397 30 11.164 30 15.1701s-1.5604 7.7729-4.394 10.6061c-2.8323 2.8332-6.5994 4.3937-10.606 4.3937s-7.7734-1.5604-10.606-4.3941C1.5605 22.943 0 19.1758 0 15.1697c0-4.006 1.5604-7.773 4.394-10.606ZM15 28.2948c3.5057 0 6.8019-1.3655 9.2806-3.8447 2.4792-2.4787 3.8446-5.7744 3.8446-9.2802 0-3.5057-1.3655-6.8012-3.8446-9.2801C21.8019 3.4106 18.5057 2.045 15 2.045S8.1981 3.4106 5.7194 5.8898c-2.4792 2.4787-3.8446 5.7744-3.8446 9.2801 0 3.5058 1.3655 6.8013 3.8446 9.2802C8.198 26.9293 11.4943 28.2948 15 28.2948Z" clip-rule="evenodd"/><path fill="#5600B9" d="M23.4373 14.2324H6.5625c-.5175 0-.9375.42-.9375.9375 0 .5175.42.9375.9375.9375h16.8748c.5175 0 .9375-.42.9375-.9375 0-.5175-.42-.9375-.9375-.9375Z"/></svg>
      </div>
    </div>
</article>
