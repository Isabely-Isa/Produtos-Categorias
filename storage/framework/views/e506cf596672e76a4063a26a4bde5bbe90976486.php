<?php $__env->startSection('body'); ?>

<div class="card border">
    <div class="card-body">
        <form action="/categorias/<?php echo e($cat->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria" value="<?php echo e($cat->nome); ?>"
                       id="nomeCategoria" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "categorias"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projetos\cadastro\cadastro\resources\views/editarcategoria.blade.php ENDPATH**/ ?>