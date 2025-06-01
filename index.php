<?php get_header(); ?>

<main>
  <section class="hero">
    <div class="container">
      <h1>Bem-vindo ao Darkside</h1>
    </div>
  </section>

  <section class="sobre" id="sobre">
    <div class="container">
      <h2>Sobre</h2>
      <p>Somos uma agência criativa especializada em soluções web modernas.</p>
    </div>
  </section>

  <section class="servicos" id="servicos">
    <div class="container">
      <h2>Serviços</h2>
      <div class="servico">
        <h3>Desenvolvimento Web</h3>
        <p>Criamos sites rápidos, responsivos e modernos.</p>
      </div>
    </div>
  </section>

  <section class="contato" id="contato">
    <div class="container">
      <h2>Contato</h2>
      <form>
        <input type="text" placeholder="Nome" required>
        <input type="email" placeholder="Email" required>
        <textarea placeholder="Mensagem" required></textarea>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </section>
</main>

<?php get_footer(); ?>
