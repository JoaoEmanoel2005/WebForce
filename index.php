<?php get_header(); ?>

<main>
  <section class="hero">
    <div class="container">
      <h1>Bem-vindo a WebForce Solutions</h1>
    </div>
  </section>

  <section class="sobre" id="sobre">
    <div class="container">
      <h2>Sobre</h2>
      <p>Nos somos a empresa WebForce Solutions, e trazemos a voce esta pagina onde vc tera a opcao de nos mandar um formulario com algum problema, nos fornecendo seu dado para contato para retornarmos com alguma informacao</p>
    </div>
  </section>

  <section class="servicos" id="servicos">
    <div class="container">
      <h2>Serviços</h2>
      <div class="servico">
        <h3>Suporte a Serviços de solucoes</h3>
        <p>Com este site, oferecemos a capacidade de vc descrever seu problema e entarremos em contato com a solucao</p>
      </div>
    </div>
  </section>

  <section class="contato" id="contato">
    <div class="container">
      <h2>Contato</h2>
     <form id="form-contato">
  <input type="text" name="nome" placeholder="Nome" required>
  <input type="email" name="email" placeholder="Email" required>
  <textarea name="comentario" placeholder="Mensagem" required maxlength="500"></textarea>
  <button type="submit">Enviar</button>
  <p id="resposta" style="margin-top: 10px;"></p>
</form>

<script>
  document.getElementById('form-contato').addEventListener('submit', async function (e) {
    e.preventDefault();

    const nome = this.nome.value;
    const email = this.email.value;
    const comentario = this.comentario.value;

    const resposta = document.getElementById('resposta');
    resposta.textContent = 'Enviando...';

    try {
      const res = await fetch('http://localhost:3000/mensagem', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ nome, email, comentario })
      });

      const dados = await res.json();

      if (res.ok) {
        resposta.textContent = dados.mensagem || 'Mensagem enviada com sucesso!';
        this.reset();
      } else {
        resposta.textContent = dados.erro || 'Erro ao enviar.';
      }
    } catch (err) {
      console.error(err);
      resposta.textContent = 'Erro de conexão com o servidor.';
    }
  });
</script>

    </div>
  </section>
</main>

<?php get_footer(); ?>
