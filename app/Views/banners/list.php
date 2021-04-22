<h1>Listagem de Banners</h1>
<div class="py-4 px-4">
    <a href="/banners/new/form" class="btn btn-info">Adicionar novo Banner</a>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
      
    <?php if(!empty($banners) && (is_array($banners))) : ?>

    <?php foreach($banners as $banner): ?>
        <tr>
            <td><?php echo $banner['id']; ?> </td>
            <td><?php echo $banner['titulo']; ?> </td>
            <td><?php echo $banner['descricao']; ?> </td>
            <td>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exibirBanner<?php echo $banner['id']; ?>">Exibir</a>
                    
                <div class="modal fade" id="exibirBanner<?php echo $banner['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exibirBanner"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <img class="img-responsive" src="<?php echo $banner['banner']; ?>" alt="<?php echo $banner['titulo']; ?>">
                        </div>
                    </div>
                </div>

                <a href="/banners/edit/<?php echo $banner['id'] ?>" class="btn btn-warning">Editar</a>
                <a href="/banners/delete/<?php echo $banner['id'] ?>" onclick="return confirma()" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>

    <?php else: ?>
        <tr>
            <td colspan="2">
                Nenhum Banner adicionado até o momento.
            </td>
        </tr>

    <?php endif; ?>



  </tbody>
</table>

<div class="py-4 px-4">
    <a href="/banners/new/form" class="btn btn-info">Adicionar novo Banner</a>
</div>
