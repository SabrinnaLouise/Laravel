

<?php $__env->startSection('title','Edição'); ?>

<?php $__env->startSection('content'); ?>
<style>
.custom-select-container {
  font-family: 'Segoe UI', Roboto, sans-serif;
  display: flex;
  flex-direction: column;
  gap: 8px;
  max-width: 300px;
}

label {
  font-weight: 600;
  color: #333;
  font-size: 14px;
}

select {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding: 10px 16px;
  font-size: 16px;
  color: #444;
  background-color: #fff;
  border: 2px solid #e0e0e0;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 12px center;
  padding-right: 40px;
}

form{
    padding: 10px 16px;
  font-size: 16px;
  color: #3f3c3c;
  background-color: #f5f5f5;
  border: 2px solid #e0dede;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
}
</style>



<div class="container mt-5">
      <h1>Editar Usuário</h1>
        <hr>
    <form action="<?php echo e(route('banco.update',['id'=>$banco->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" class="form-control" value="<?php echo e($banco->nome); ?>" placeholder="Digite seu nome">
</div>

<div class="form-group">
    <label for="cpf">Cadastro de Pessoa Física:</label>
    <input type="number" name="cpf" class="form-control" value="<?php echo e($banco->cpf); ?>" placeholder="000.000.000-00">
</div>   

<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" class="form-control" value="<?php echo e($banco->email); ?>" placeholder="abcd@gmail.com">
</div>

<div class="form-group">
    <label for="email">telefone:</label>
    <input type="text" name="telefone" class="form-control" value="<?php echo e($banco->telefone); ?>" placeholder="abcd@gmail.com">
</div>

<div class="custom-select-container mt-3">
    <label for="tipo_conta">Escolha:</label>
    <select id="tipo_conta" name="tipo_conta" required>
        <option value="" disabled>Selecione uma opção...</option>
        <option value="corrente" <?php if($banco->tipo_conta == 'corrente'): ?> selected <?php endif; ?>>corrente</option>
        <option value="poupanca" <?php if($banco->tipo_conta == 'poupanca'): ?> selected <?php endif; ?>>poupança</option>
        <option value="salario" <?php if($banco->tipo_conta == 'salario'): ?> selected <?php endif; ?>>salário</option>
        <option value="Investimento" <?php if($banco->tipo_conta == 'investimento'): ?> selected <?php endif; ?>>Investimento</option>
        <option value="Empresarial" <?php if($banco->tipo_conta == 'empresarial'): ?> selected <?php endif; ?>>Empresarial</option>
        <option value="Universitária" <?php if($banco->tipo_conta == 'universitaria'): ?> selected <?php endif; ?>>Universitária</option>
        <option value="Pagamento" <?php if($banco->tipo_conta == 'pagamento'): ?> selected <?php endif; ?>>Pagamento</option>
    </select>
</div>
        <br>
<div class="form-group">
                <input type="submit" class="btn btn-success" value="Atualizar">
</div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\banco\resources\views/banco/edit.blade.php ENDPATH**/ ?>