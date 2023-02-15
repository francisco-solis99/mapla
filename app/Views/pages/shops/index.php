<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Tienda de Pinturas en Cancún | Mapla Soluciones y Pinturas</title>
    <meta name="description" content="Nuestros más de 30 años de experiencia nos respaldan.
Encuentra pinturas, barnices, selladores, recubrimientos, impermeabilizantes y más. ¡Visítanos!"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
    <script src="<?= base_url('js/components/maps.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="">
        <section class="mb-8">
            <div class="container mr-auto grid lg:grid-cols-[30%_70%] gap-7">
                <article class="text-mapla-dark-200">
                    <h1 class="font-black text-[40px]">Sucursales Mapla</h1>
                    <h2 class="font-medium text-2xl">Las mejores pinturas ecológicas a tu alcance</h2>
                    <p class="text-mapla-dark-100">Encuentra todo el material que necesites para renovar tu espacio en cualquiera de nuestras sucursales.</p>
                    <div class="locations mt-6">
                        <div class="px-2 border border-mapla-dark-100 rounded-3xl">
                            <select name="location" id="select-location" class="py-2 w-full bg-white cursor-pointer border-0 rounded-3xl outline-none">
                                <option value="" hidden>Buscar por ciudad</option>
                                <optgroup label="Cancun">
                                    <option value="Av. Puerto Juárez.">Av. Puerto Juárez.</option>
                                    <option value="Blvd. Luis Donaldo Colosio">Blvd. Luis Donaldo Colosio</option>
                                    <option value="Av. Cancún">Av. Cancún</option>
                                </optgroup>
                                <optgroup label="Playa del Carmen">
                                    <option value="Col. Gonzalo Guerrero Norte">Col. Gonzalo Guerrero Norte</option>
                                </optgroup>
                                <optgroup label="Cozumel">
                                    <option value="Av. 65  Sur">Av. 65  Sur</option>
                                </optgroup>
                                <optgroup label="Chetumal">
                                    <option value="Av. Benito Juárez">Av. Benito Juárez</option>
                                </optgroup>
                                <optgroup label="Merida">
                                    <option value="Col. Leandro Valle">Col. Leandro Valle</option>
                                </optgroup>
                                <optgroup label="Tulum">
                                    <option value="Calle Satélite Norte">Calle Satélite Norte</option>
                                </optgroup>
                                <optgroup label="Petempich">
                                    <option value="Col. 28 de Julio">Col. 28 de Julio</option>
                                </optgroup>
                                <optgroup label="Valladolid">
                                    <option value="Col. Centro">Col. Centro</option>
                                </optgroup>
                                <optgroup label="José María Morelos">
                                    <option value="Col. Vicente Guerrero">Col. Vicente Guerrero</option>
                                </optgroup>
                            </select>
                        </div>

                        <section class="mt-4">
                            <?php foreach ($shops as $itr => $shop): ?>
                                <?php $className = $itr != 0 ? 'hidden' : ''; ?>
                                <div class="<?php echo $className; ?>">
                                    <?= $this -> setVar('shop', $shop) -> include('components/Location') ?>
                                </div>
                            <?php endforeach ?>
                        </section>
                    </div>
                </article>
                <aside class="bg-slate-200">
                    <div>
                        <iframe id="mapla-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.5154548205287!2d-86.84438478512989!3d21.092006485964184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2be4f5c48665%3A0x810485dbfa3640df!2sMapla%20Soluciones%20y%20Pinturas%20Suc.Colosio!5e0!3m2!1ses!2smx!4v1676397213785!5m2!1ses!2smx" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                    </div>
                </aside>
            </div>
        </section>
    </main>
<?= $this->endSection() ?>
