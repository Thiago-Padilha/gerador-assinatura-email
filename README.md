# Gerador de Assinaturas Corporativas em Imagem !

[Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php)
![License](https://img.shields.io/badge/license-MIT-blue)

Aplicação interna desenvolvida com **Laravel** para gerar assinaturas profissionais de e-mail no formato **PNG**, com dados dinâmicos (nome, cargo, contato, redes sociais). Ideal para empresas que desejam **padronizar a identidade visual** sem depender de conhecimento técnico dos colaboradores.

> ✨ Basta preencher os dados → gerar → baixar a imagem → colar no cliente de e-mail!

---

## 🔧 Funcionalidades

-   Geração automática de imagem via endpoint `/dontimage`
-   Layout limpo e corporativo (personalizável)
-   Suporte a ícones de redes sociais (LinkedIn, Instagram, etc.)
-   Totalmente **portável**: roda em qualquer servidor com PHP 8.2+ e GD
-   Sem dependência de banco de dados (stateless)

---

## 🛠️ Tecnologias Utilizadas

-   **Framework**: Laravel 11.9
-   **Linguagem**: PHP 8.2 (com typed properties, match expressions, nullsafe operators)
-   **Geração de imagens**: Biblioteca GD nativa do PHP
-   **Frontend**: HTML, CSS simples (sem frameworks pesados)
-   **Deploy**: Funciona em qualquer ambiente compatível com PHP (Apache, Nginx, Azure, etc.)

---

## 🚀 Como Rodar Localmente 1.

**Clone o repositório**

```bash
git clone https://github.com/seu-usuario/gerador-assinatura-email.git
cd gerador-assinatura-email
```
