# Plugin de Troca de Idioma para WordPress

Este plugin WordPress oferece uma solução elegante e amigável para gerenciar conteúdo multilíngue em seu site WordPress, com foco específico nos idiomas inglês e português.

## Funcionalidades

- 🔄 Redirecionamento Automático de Idioma
- 🌐 Seletor de Idioma em Posição Fixa
- 🍪 Preferência de Idioma Baseada em Cookie
- 💼 Proteção da Área Administrativa
- 🎨 Botão de Troca de Idioma Estilizado

## Como Funciona

### Redirecionamento Automático
O plugin redireciona automaticamente os usuários com base em sua preferência de idioma:
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

## Instalação

1. Faça upload dos arquivos do plugin para o diretório `/wp-content/plugins/troca-idioma`
2. Ative o plugin através do menu 'Plugins' no WordPress
3. Adicione o shortcode `[custom_language_switcher]` onde você deseja que o seletor de idioma apareça

## Uso

Simplesmente adicione o seguinte shortcode em qualquer página ou template onde você deseja que o seletor de idioma apareça:

```
[custom_language_switcher]
```

## Estilização

O seletor de idioma vem com CSS pré-estilizado que inclui:
- Posicionamento fixo no canto inferior direito
- Design responsivo
- Estilo moderno de botão com efeitos hover
- Alto z-index para garantir visibilidade

## Requisitos

- Instalação WordPress
- Plugin TranslatePress (recomendado)
- Suporte a cookies no navegador do usuário

## Observação

Este plugin funciona melhor quando usado em conjunto com o TranslatePress ou plugins similares de tradução que gerenciam a tradução real do conteúdo.
