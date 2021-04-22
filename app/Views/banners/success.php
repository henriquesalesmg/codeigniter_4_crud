
<div class="pt-4">
    <div class="alert alert-success">
        Banner Salvo com Sucesso.
    </div>
    <h3><?php echo $titulo; ?></h3>
    <img class="img-responsive" src="/assets/uploads/thumbnails/thumb_<?php echo $banner; ?>" alt="<?php echo $titulo; ?>">
    <h4><?php echo $descricao; ?></h4>
    <hr>
    <a href="/banners/new" class="btn btn-warning">Editar o Banner</a>
</div>
<hr>
<a href="/banners/new/form" class="btn btn-success">Adicionar outro Banner</a>

<a href="/banners/list" class="btn btn-info float-right">Voltar à lista de Banners</a>
