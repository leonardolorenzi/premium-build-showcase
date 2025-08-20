# Gold Standard Constructions WordPress Theme

## Descrição
Tema WordPress premium e totalmente personalizável para a Gold Standard Constructions LLC. O tema mantém o design luxuoso com esquema de cores escuro e dourado, e permite edição completa através do painel administrativo do WordPress.

## Características

### 🎨 Design
- Tema escuro elegante com detalhes dourados
- Design responsivo e otimizado para mobile
- Animações suaves e efeitos hover
- Tipografia moderna e profissional

### ⚙️ Funcionalidades
- **100% Editável**: Todo o conteúdo pode ser editado via WordPress Customizer
- **SEO Otimizado**: Meta tags, structured data, e otimizações de performance
- **Formulário de Contato**: Sistema integrado com validação e notificações por email
- **Galeria de Projetos**: Upload e gerenciamento de imagens via admin
- **Seções Personalizáveis**: Hero, Sobre, Serviços, Galeria, Depoimentos, Contato

### 📱 Responsividade
- Design adaptável para todos os dispositivos
- Menu mobile com navegação touch-friendly
- Imagens otimizadas e carregamento rápido

## Instalação

### 1. Upload do Tema
1. Comprima a pasta `wordpress-theme` em um arquivo .zip
2. No WordPress admin, vá para **Aparência > Temas**
3. Clique em **Adicionar Novo > Enviar Tema**
4. Faça upload do arquivo .zip e ative o tema

### 2. Configuração Inicial
1. Vá para **Aparência > Personalizar**
2. Configure todas as seções conforme necessário:
   - **Identidade do Site**: Logo, título, descrição
   - **Seção Hero**: Título, subtítulo, imagem de fundo
   - **Seção Sobre**: Descrição da empresa, fundadores
   - **Serviços**: Edite os 6 serviços oferecidos
   - **Galeria**: Upload das imagens dos projetos
   - **Depoimentos**: Adicione avaliações de clientes
   - **Contato**: Informações de contato e endereços
   - **Rodapé**: Redes sociais e informações legais

### 3. Configuração de Email
O formulário de contato utiliza a função `wp_mail()` do WordPress. Para garantir a entrega:
1. Instale um plugin de SMTP como **WP Mail SMTP**
2. Configure com suas credenciais de email
3. Teste o envio através do formulário

## Personalização

### Cores e Estilo
As cores podem ser ajustadas editando o arquivo `style.css`:
```css
:root {
  --gold: 48 96% 53%;        /* Cor principal dourada */
  --background: 222 22% 3%;   /* Fundo escuro */
  --foreground: 60 9% 95%;    /* Texto claro */
}
```

### Conteúdo Editável
Todo o conteúdo é editável através do **WordPress Customizer**:
- Textos de todas as seções
- Imagens e logos
- Informações de contato
- Links de redes sociais
- Detalhes da empresa

### Adicionando Novas Seções
Para adicionar novas seções, edite o arquivo `functions.php` e adicione novos campos no customizer:

```php
$wp_customize->add_setting('nova_secao_titulo', array(
    'default' => 'Título Padrão',
    'sanitize_callback' => 'sanitize_text_field',
));
```

## Estrutura de Arquivos

```
wordpress-theme/
├── style.css              # Estilos principais e meta do tema
├── index.php              # Template principal
├── header.php             # Cabeçalho do site
├── footer.php             # Rodapé do site
├── functions.php          # Funcionalidades e customizer
├── js/
│   └── theme.js          # JavaScript do tema
├── assets/
│   └── hero-construction.jpg  # Imagem hero padrão
└── README.md             # Este arquivo
```

## Compatibilidade

### WordPress
- Versão mínima: WordPress 5.0+
- Testado até: WordPress 6.4+

### Plugins Recomendados
- **WP Mail SMTP**: Para configuração de email
- **Yoast SEO**: SEO adicional
- **Contact Form 7**: Formulários alternativos
- **WP Rocket**: Cache e performance

### Navegadores Suportados
- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+

## Hospedagem

### HostGator
O tema é totalmente compatível com HostGator:
1. Faça upload via FTP ou painel de controle
2. Importe banco de dados se necessário
3. Configure DNS e SSL
4. Teste todas as funcionalidades

### Requisitos de Servidor
- PHP 7.4+ ou 8.0+
- MySQL 5.6+ ou MariaDB 10.0+
- Extensão GD ou ImageMagick para imagens
- mod_rewrite habilitado

## SEO e Performance

### Otimizações Incluídas
- Meta tags otimizadas
- Structured Data (JSON-LD)
- Open Graph para redes sociais
- Imagens responsivas
- CSS e JS minificados
- Carregamento assíncrono

### Schema.org
O tema inclui structured data para:
- LocalBusiness
- Serviços oferecidos
- Informações de contato
- Avaliações de clientes

## Suporte e Manutenção

### Atualizações
- Sempre faça backup antes de atualizar
- Teste em ambiente de desenvolvimento primeiro
- Mantenha WordPress e plugins atualizados

### Backup
Recomendado backup regular de:
- Arquivos do tema
- Banco de dados WordPress
- Uploads e imagens
- Configurações do customizer

### Solução de Problemas
1. **Formulário não envia**: Verifique configuração SMTP
2. **Imagens não carregam**: Verifique permissões de arquivo
3. **Layout quebrado**: Limpe cache do navegador e plugins
4. **Customizer não salva**: Verifique permissões de escrita

## Contato e Suporte

Para suporte técnico ou customizações adicionais:
- Email: contact@goldstandardconstructions.com
- Telefone: (973) 417-1404

---

**© 2024 Gold Standard Constructions LLC. Todos os direitos reservados.**