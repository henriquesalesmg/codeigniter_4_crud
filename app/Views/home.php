<div class="page_init">
        <div class="container-nav">
            <nav class="navbar">
                    <a href="" class="ezoom">Ezoom</a>
                    <a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                        <span> </span>
                        <span> </span>
                        <span> </span>
                    </a>
                    <a class="navbar-brand" href="./">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </a>
                    <div class="collapse navbar-collapse" id="collapsingNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/banners/list">Listagem de banners</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
            
    <div class="container-slide">
        <?php if(count($banners)>0){ ?>
            
            <div id="indicadoresSlide" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                    
                <ol class="carousel-indicators modfy">
                    <?php for($i=0; $i<count($banners); $i++){ ?>
                        <li data-target="#indicadoresSlide" data-slide-to="<?php echo $i ?>"
                        <?php echo $i==0 ? 'class="active"' : '' ?>>
                        </li>
                    <?php } ?>
                </ol>

                <div class="carousel-inner">
                    <?php $count=0; foreach($banners as $banner){ ?>
                        <div style="background-image: url(/assets/uploads/thumbnails/thumb_<?php echo $banner['banner']; ?>)" class="slide_home carousel-item <?php echo $count==0 ? 'active' : '' ?>">
                                <div class="conteudo_home">
                                    
                                    <hr>
                                    <h1><?php echo $banner['titulo']; ?></h1>
                                    <p><?php echo $banner['descricao']; ?></p>
                                    
                                    <a href="#">EM BREVE</a>
                                </div>
                        </div>
                    <?php $count++; } ?>
                </div>
            </div>
        <?php }else { ?>
            <div style="background-image: url(/assets/uploads/EZOOM_CRUD.jpg" class="slide_home"> 
            </div>
        <?php } ?>
    </div>

</div>