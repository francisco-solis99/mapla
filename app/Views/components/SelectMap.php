

<div class="map__select relative mt-1">
    <button type="button" class="map__btn relative w-full py-3 pl-3 pr-10 text-left bg-white rounded-md  border border-mapla-dark-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm cursor-pointer">
        <span class="flex items-center">
            <span class="map__selected block ml-3 truncate">
              Av. Puerto Juárez.
            </span>
        </span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 ml-3 pointer-events-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down stroke-mapla-dark-200" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="6 9 12 15 18 9" />
          </svg>
        </span>
    </button>
    <div class="map__dropdown absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg hidden">
        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3" class="py-1 overflow-auto text-base rounded-md max-h-56 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">

                <?php foreach ($cities as $itr => $city): ?>
                    <ul>
                        <header class="pl-2">
                            <span class="text-mapla-dark-200 font-medium"><?= esc($city) ?></span>
                        </header>
                        <?php foreach ($shopsByCity[$city] as $itr => $shop): ?>
                            <li id="listbox-item-<?= esc($itr) ?>" role="option" class="map__option relative py-2 pl-3 text-gray-900 cursor-default select-none hover:bg-indigo-500 hover:text-white pr-9">
                                <div class="flex items-center">
                                    <span class="block ml-3 font-normal truncate">
                                        <?= esc($shop['name']) ?>
                                    </span>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endforeach ?>

            <!-- <ul>
              <header class="pl-2">
                <span class="text-mapla-dark-200 font-medium">Cancun</span>
              </header>
              <li id="listbox-item-0" role="option" class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:bg-indigo-500 hover:text-white pr-9">
                  <div class="flex items-center">
                      <span class="block ml-3 font-normal truncate">
                        Av. Puerto Juárez.
                      </span>
                  </div>
              </li>
              <li id="listbox-item-1" role="option" class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:bg-indigo-500 hover:text-white pr-9">
                  <div class="flex items-center">
                      <span class="block ml-3 font-normal truncate">
                        Blvd. Luis Donaldo Colosio
                      </span>
                  </div>
              </li>
              <li id="listbox-item-1" role="option" class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:bg-indigo-500 hover:text-white pr-9">
                  <div class="flex items-center">
                      <span class="block ml-3 font-normal truncate">
                        Av. Cancún
                      </span>
                  </div>
              </li>
            </ul>
            <ul>
              <header class="pl-2">
                <span class="text-mapla-dark-200 font-medium">Playa del Carmen</span>
              </header>
              <li id="listbox-item-0" role="option" class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:bg-indigo-500 hover:text-white pr-9">
                  <div class="flex items-center">
                      <span class="block ml-3 font-normal truncate">
                        Col. Gonzalo Guerrero Norte
                      </span>
                  </div>
              </li>
            </ul>
            <ul>
              <header class="pl-2">
                <span class="text-mapla-dark-200 font-medium">Cozumel</span>
              </header>
              <li id="listbox-item-0" role="option" class="relative py-2 pl-3 text-gray-900 cursor-default select-none hover:bg-indigo-500 hover:text-white pr-9">
                  <div class="flex items-center">
                      <span class="block ml-3 font-normal truncate">
                        Av. 65 Sur
                      </span>
                  </div>
              </li>
            </ul>
        </ul> -->
    </div>
</div>

