<?php

// Verificar se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);
    exit;
}

// Pegar os dados enviados pelo JavaScript
$dados = json_decode(file_get_contents('php://input'), true);

// Verificar se o domínio foi enviado
if (!isset($dados['dominio']) || empty($dados['dominio'])) {
    echo json_encode(['erro' => 'Domínio não foi fornecido']);
    exit;
}

// Pegar o domínio e limpar
$dominio = trim(strtolower($dados['dominio']));

// Validar formato básico do domínio
if (!validarDominio($dominio)) {
    echo json_encode(['erro' => 'Domínio inválido']);
    exit;
}

// Extrair extensão e domínio
$partes = extrairExtensao($dominio);

if (!$partes) {
    echo json_encode(['erro' => 'Extensão de domínio não suportada']);
    exit;
}

$dominioSemExtensao = $partes['dominio'];
$extensao = $partes['extensao'];

// Consultar RDAP
$resultado = consultarRDAP($dominioSemExtensao, $extensao);

// Retornar resultado
echo json_encode($resultado);
exit;

// ===== FUNÇÕES =====

// Validar se é um domínio válido
function validarDominio($dominio) {
    return preg_match('/^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?(\.[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?)*\.[a-z]{2,}$/i', $dominio);
}

// Extrair domínio e extensão
function extrairExtensao($dominio) {
    $extensoes = [
        'com.br', 'com', 'net', 'org', 'net.br', 'org.br', 
        'gov.br', 'edu.br', 'info', 'biz', 'co.uk', 'de', 'fr'
    ];
    
    foreach ($extensoes as $ext) {
        if (substr($dominio, -strlen($ext)) === $ext) {
            $dom = substr($dominio, 0, -strlen($ext) - 1);
            return [
                'dominio' => $dom,
                'extensao' => $ext
            ];
        }
    }
    
    return null;
}

// Consultar RDAP
function consultarRDAP($dominio, $extensao) {
    // Definir URL do RDAP conforme a extensão
    if ($extensao === 'com.br' || $extensao === 'net.br' || $extensao === 'org.br' || $extensao === 'gov.br' || $extensao === 'edu.br') {
        $url = 'https://rdap.nic.br/domain/' . $dominio . '.' . $extensao;
    } else {
        $url = 'https://rdap.verisign.com/' . $extensao . '/v1/domain/' . $dominio . '.' . $extensao;
    }
    
    try {
        // Fazer requisição cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        $resposta = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        // Verificar se conseguiu conectar
        if ($httpCode === 200) {
            // ✅ Domínio EXISTE = NÃO DISPONÍVEL
            $dados = json_decode($resposta, true);
            return processarRDAP($dados, $dominio . '.' . $extensao, false);
        } else {
            // ✅ Domínio NÃO EXISTE = DISPONÍVEL
            return [
                'dominio' => $dominio . '.' . $extensao,
                'disponivel' => true,
                'data_criacao' => 'N/A',
                'registrador' => 'N/A',
                'erro' => null
            ];
        }
    } catch (Exception $e) {
        return [
            'erro' => 'Erro ao consultar RDAP: ' . $e->getMessage()
        ];
    }
}

// Processar resposta do RDAP
function processarRDAP($dados, $dominio, $disponivel = false) {
    $resultado = [
        'dominio' => $dominio,
        'disponivel' => $disponivel,
        'erro' => null
    ];
    
   
        
    return $resultado;
}

?>