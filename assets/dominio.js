// Capturar o formulário
const formulario = document.getElementById('domain-form');
const inputDominio = document.getElementById('domain');
const loading = document.getElementById('loading');
const erro = document.getElementById('erro');
const resultado = document.getElementById('resultado');

// Elementos do resultado
const dominioNome = document.getElementById('dominioNome');
const statusDominio = document.getElementById('statusDominio');


// Ouvir o evento de submit do formulário
formulario.addEventListener('submit', function(e) {
    e.preventDefault(); // Não recarrega a página
    
    const dominio = inputDominio.value.trim(); // Pega o valor digitado
    
    // Validação: verifica se o campo não está vazio
    if (!dominio) {
        mostrarErro('Por favor, digite um domínio válido!');
        return;
    }
    
    // Limpa mensagens anteriores
    limparResultados();
    
    // Mostra carregamento
    loading.classList.add('show');
    
    // Envia requisição para o PHP
    enviarRequisicao(dominio);
});

// Função para enviar requisição ao PHP via AJAX
function enviarRequisicao(dominio) {
    fetch('../api/processa_dominio.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            dominio: dominio
        })
    })
    .then(response => response.json()) // Converte resposta para JSON
    .then(dados => {
        // Esconde carregamento
        loading.classList.remove('show');
        
        // Verifica se houve erro
        if (dados.erro) {
            mostrarErro(dados.erro);
            return;
        }
        
        // Mostra resultado
        mostrarResultado(dados);
    })
    .catch(erro => {
        // Erro na requisição
        loading.classList.remove('show');
        mostrarErro('Erro ao buscar domínio. Tente novamente!');
        console.error('Erro:', erro);
    });
}

// Função para mostrar resultado
function mostrarResultado(dados) {
    // Preenche os dados
    dominioNome.textContent = dados.dominio || 'N/A';
   
    
    // Define status (disponível ou não)
    if (dados.disponivel) {
        statusDominio.textContent = '✅ DISPONÍVEL';
        statusDominio.classList.add('disponivel');
        statusDominio.classList.remove('indisponivel');
        resultado.classList.add('disponivel');
        resultado.classList.remove('indisponivel');
    } else {
        statusDominio.textContent = '❌ NÃO DISPONÍVEL';
        statusDominio.classList.add('indisponivel');
        statusDominio.classList.remove('disponivel');
        resultado.classList.add('indisponivel');
        resultado.classList.remove('disponivel');
    }
    
    // Mostra resultado
    resultado.classList.add('show');
}

// Função para mostrar erro
function mostrarErro(mensagem) {
    erro.textContent = mensagem;
    erro.classList.add('show');
}

// Função para limpar resultados anteriores
function limparResultados() {
    erro.classList.remove('show');
    resultado.classList.remove('show');
    resultado.classList.remove('disponivel');
    resultado.classList.remove('indisponivel');
}