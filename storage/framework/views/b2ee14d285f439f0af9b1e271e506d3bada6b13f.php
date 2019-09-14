<?php $__env->startSection('body'); ?>
<div >
<form>
    <hr>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nomeProduto">Nome Produto</label>
            <input type="text" class="form-control" id="nomeProduto" placeholder="Produto">
          </div>
         <div class="form-group col-md-2">
                <label for="Preco">Preço</label>
                <input type="text" class="form-control" id="Preco" placeholder="R$">
          </div>
        <div class="form-group col-md-2">
                    <label for="Quantidade">Quantidade</label>
                    <input type="text" class="form-control" id="Quantidade" placeholder="QTD">
        </div>
         <div class="form-group col-md-4">
            <label for="inputEstado">Categoria:</label>
                <?php if(count($cats) > 0): ?>
                  <div class="col-auto my-1">
                  <select class="custom-select mr-sm-2" id="cate">
                   <option selected>Categorias</option>
                    <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value=<?php echo e($cat->id); ?>><?php echo e($cat->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                  </div>
            </div>
                <?php endif; ?>
          </div>
          <div>
              <a href="/produtos" class="btn btn-sm btn-primary" role="button">Salvar</a>
         </div>
     </div>
    </div>
    <hr>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projetos\cadastro\cadastro\resources\views/novoproduto.blade.php ENDPATH**/ ?>