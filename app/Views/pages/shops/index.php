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
                    <div class="locations mt-4">
                        <!-- Selected Map component -->
                        <div>
                            <?= $this -> setVar('cities', $cities) -> setVar('shopByCity', $shopsByCity) -> include('components/SelectMap') ?>
                        </div>

                        <!-- Shops cards components -->
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
                        <iframe id="mapla-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.558887849823!2d-86.85859918512855!3d21.169945985922112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2c6e4af85d4d%3A0x893bcf2e1552fa07!2sMapla%20Soluciones%20y%20Pinturas%20Suc.Talleres!5e0!3m2!1ses!2smx!4v1676397177015!5m2!1ses!2smx" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                    </div>
                </aside>
            </div>
        </section>
    </main>
<?= $this->endSection() ?>
