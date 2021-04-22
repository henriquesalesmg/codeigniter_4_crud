<h2><?php echo isset($id) ? 'Editar Banner' : 'Adicionar novo Banner' ?></h2>

<?php echo \Config\Services::validation()->listErrors(); ?>


<form action="/banners/store" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : set_value('id') ?>">

    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" value="<?php echo isset($titulo) ? $titulo : '' ?>"
        id="titulo" placeholder="Título do Banner" name="titulo">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição do Banner</label>
        <textarea class="form-control" id="descricao" rows="3" name="descricao"><?php echo isset($descricao) ? $descricao : '' ?></textarea>
    </div>

    <div class="form-group">
        <select name="ativo" class="custom-select">
            <option value="1" selected>Ativo</option>
            <option value="0">Inativo</option>
        </select>
    </div>

    <div class="custom-file">

        <input value="<?php echo isset($banner) ? $banner : set_value('banner') ?>" type="file" class="custom-file-input" id="banner" name="banner">
        <label class="custom-file-label" for="banner">Imagem do Banner (será redimensionada para melhor exibição)</label>
        
    </div>
    <hr>
    <button type="submit" class="btn btn-primary" value="Salvar">Salvar</button>
    <hr>
</form>

<div class="py-4 px-4">
    <a href="/banners/list" class="btn btn-info float-right">Voltar à listagem de Banners</a>
</div>
<?php if(isset($banner)){ ?>
    (imagem no tamanho original)
    <img class="img-responsive" src="/assets/uploads/<?php echo $banner; ?>" alt="<?php echo $titulo; ?>">
<?php } ?>