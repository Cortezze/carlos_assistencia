<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
<div class="form-group">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="u_email" id="u_email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" name="u_senha" id="u_senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Nome Completo</label>
    <input type="text" class="form-control" name="u_nome" id="u_nome" placeholder="Ex: Marcia Moreira de Campos">
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" name="u_endereco" id="u_endereco" placeholder="Ex: Rua Tolentino, Cascavel - PR">
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputCity">Telefone ou Celular de Contato</label>
      <input type="text" class="form-control" name="u_telefone" id="u_telefone">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Nº da Casa</label>
      <input type="text" class="form-control" name="u_numero_casa" id="u_numero_casa">
    </div>
  </div>

  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>