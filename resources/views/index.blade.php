<html>
  <head>

  </head>
  <body>
    <form action="/storeLead" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label>Valor parcela</label>
      <input type="text" name="valorParcela" value="" /><br>
      <label>Valor imovel</label>
      <input type="text" name="valorImovel" value="" /><br>
      <label>Valor nome</label>
      <input type="text" name="nome" value="" /><br>
      <label>Valor email</label>
      <input type="text" name="email" value="" /><br>
      <button type="submit">Cadastrar</button>
    </form>

    <form action="/updateLeadFamilia" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label>id</label>
      <input type="text" name="id" value="" /><br>
      <label>tipo familia</label>
      <input type="text" name="tipoFamilia" value="" /><br>
      <button type="submit">Atualizar</button>
    </form>

    <form action="/updateLeadRegiao" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label>id</label>
      <input type="text" name="id" value="" /><br>
      <label>Regiao</label>
      <input type="text" name="regiao" value="" /><br>
      <button type="submit">Atualizar</button>
    </form>

    <form action="/updateLeadRenda" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label>id</label>
      <input type="text" name="id" value="" /><br>
      <label>Renda</label>
      <input type="text" name="valorRenda" value="" /><br>
      <button type="submit">Atualizar</button>
    </form>


    <form action="/getLeads" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button type="submit">Get Leads</button>
    </form>

  </body>
</html>
