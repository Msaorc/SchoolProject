<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav" id="sub_menu_mobile">
                            <li>
                                <a class="" href="{{ route('home') }}">
                                    <span class="mini-click-non">Inicio</span>
                                </a>
                            </li>
                            <?php if(isset($menu) && count($menu) > 0 ): ?>
                <?php foreach ($menu as $key => $value): ?>

                    <?php
                    $descricao = $value['titulo'];
                    ?>

                    <?php if (count($value['submenu']) == 0): ?>
                        <li class="nav-item">
                            <a class="" href="<?=($value['route'] !== 'aula') ? route($value['route']) : route($value['route'], [Auth::user()->id] ) ?>" aria-expanded="false">
                                <span class="nav-link"><?=$descricao; ?></span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><?= $descricao; ?> <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                        <div role="menu" class="dropdown-menu animated zoomIn">
                             
                            <ul class="nav nav-second-level">
                                <?php foreach ($value['submenu'] as $submenu): ?>
                                    <?php
                                    $descricao2 = $submenu['titulo'];
                                    ?>
                                    <a href="<?=($value['route'] !== 'aula') ? route($submenu['route']) : route($submenu['route'], [Auth::user()->id] ) ?>" class="dropdown-item"><?= $descricao2; ?></a>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                <?php endforeach; ?>
            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>