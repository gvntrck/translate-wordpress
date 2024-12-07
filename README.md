# Snippet de Redirecionamento de Idioma para WordPress

Este snippet de código fornece uma solução elegante e amigável para gerenciar redirecionamento de conteúdo multilíngue em seu site WordPress, com foco específico nos idiomas inglês e português.

## Funcionalidades

- Redirecionamento Automático de Idioma
- Seletor de Idioma em Posição Fixa
- Preferência de Idioma Baseada em Cookie
- Proteção da Área Administrativa
- Botão de Troca de Idioma Estilizado

## Como Funciona

### Redirecionamento Automático
O código redireciona automaticamente os usuários com base em sua preferência de idioma:
- Se um usuário seleciona Português (PT), será redirecionado para URLs sem o prefixo `/en/`
- Se um usuário seleciona Inglês (EN) ou não tem preferência, será redirecionado para URLs com o prefixo `/en/`

### Seletor de Idioma
- Adiciona um botão flutuante para troca de idioma no canto inferior direito do site
- Fácil de implementar usando o shortcode `[custom_language_switcher]`
- Estilizado com design moderno e limpo
- Efeitos de hover para melhor interação do usuário

### Gerenciamento de Cookies
- Armazena as preferências de idioma do usuário em cookies
- Memoriza a escolha do usuário entre as sessões de navegação
- Fornece uma experiência consistente de idioma em todo o site

## Como Implementar

Você tem duas opções para implementar este código:

### 1. Usando o functions.php do seu tema
Adicione o código do arquivo `troca-idioma.php` ao final do arquivo `functions.php` do seu tema.

### 2. Usando o plugin WPCode
1. Instale e ative o plugin WPCode
2. Vá para WPCode > Snippets no painel administrativo
3. Clique em "Add Snippet"
4. Cole o código do arquivo `troca-idioma.php`
5. Ative o snippet

Após implementar o código, adicione o shortcode `[custom_language_switcher]` onde você deseja que o seletor de idioma apareça.

## Estilização

O seletor de idioma vem com CSS pré-estilizado que inclui:
- Posicionamento fixo no canto inferior direito
- Design responsivo
- Estilo moderno de botão com efeitos hover
- Alto z-index para garantir visibilidade

## Requisitos

- WordPress instalado
- TranslatePress ou plugin similar de tradução
- Suporte a cookies no navegador do usuário

## Observação

Este snippet funciona melhor quando usado em conjunto com o TranslatePress ou plugins similares de tradução que gerenciam a tradução real do conteúdo.
