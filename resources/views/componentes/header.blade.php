<div class="header-advance-area" style="margin-bottom: 1%">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            @include('componentes.logo')
                            @include('componentes.menu.menu', [$permissao_usuario]) 
                            @include('componentes.profile') 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>