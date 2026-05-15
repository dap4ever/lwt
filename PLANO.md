# LWT Service — Plano de Desenvolvimento do Site WordPress

> **Empresa:** LWT Service  
> **Setor:** Engenharia de Automação Industrial  
> **Descrição:** Fornecimento de mão de obra técnica especializada em engenharia de automação, atuando em projetos industriais, sistemas de controle e implementação de soluções automatizadas.  
> **Tema WordPress:** LTW (Bootstrap 5)  
> **Inspiração Visual:** [Edifice — ThemerEx](https://edifice.themerex.net/)  
> **Data:** Maio 2026

---

## Paleta de Cores

| Nome | Hex | Uso |
|------|-----|-----|
| Fundo Escuro | `#060D20` | Footer, fundos muito escuros |
| Navy Profundo | `#0A1128` | Hero, secções escuras |
| Navy Principal | `#0D1B4B` | Navbar sólida, cards escuros |
| Azul Principal | `#1A4AFF` | Botões primários, destaques |
| Azul Elétrico | `#00AAFF` | Labels, ícones, hover, circuit |
| Branco/Claro | `#E2E8F0` | Texto principal em fundo escuro |
| Cinza Médio | `#94A3B8` | Texto secundário, subtítulos |
| Cinza Muted | `#64748B` | Texto terciário, descrições |

---

## Tipografia

- **Títulos (H1–H3):** [Barlow](https://fonts.google.com/specimen/Barlow) — Bold 700/800 — técnica, industrial, impactante
- **Corpo / Interface:** [Inter](https://fonts.google.com/specimen/Inter) — Regular 400, SemiBold 600 — legibilidade máxima

```scss
// Importar no functions.php via wp_enqueue_style()
// https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Inter:wght@400;500;600&display=swap
```

---

## Estrutura de Páginas

### Páginas Principais

| Página | URL | Template PHP |
|--------|-----|--------------|
| Página Inicial | `/` | `front-page.php` |
| Sobre Nós | `/sobre-nos/` | `page-about.php` |
| Serviços | `/servicos/` | `page-services.php` |
| Portfólio | `/portfolio/` | `page-portfolio.php` |
| Contacto | `/contacto/` | `page-contact.php` |
| Pedir Orçamento | `/orcamento/` | `page-quote.php` |
| Blog / Notícias | `/noticias/` | `archive.php` |

---

## Roadmap de Desenvolvimento — 5 Fases

---

### FASE 1 — Fundação Visual (CSS & Design System)

> ⚠️ **Começar sempre por aqui.** Definir a linguagem visual antes de qualquer template evita retrabalho.

#### Tarefas

- [ ] **Variáveis SCSS** — definir paleta completa em `main.scss`
- [ ] **Tipografia** — importar Barlow + Inter via `functions.php`, aplicar no SCSS
- [ ] **Utilitários Base** — criar classes reutilizáveis:
  - `.section-dark` — fundo `#0A1128`, texto branco
  - `.section-light` — fundo `#F8FAFC`, texto escuro
  - `.section-navy` — fundo `#0D1B4B`
  - `.section-label` — texto azul elétrico, uppercase, letter-spacing
  - `.btn-lwt` — botão gradiente azul principal
  - `.btn-lwt-outline` — botão contorno azul elétrico
- [ ] **Efeito Circuit SVG** — criar `assets/circuit-bg.svg` com motivo de circuito elétrico inspirado no logo, para usar como background decorativo

#### Ficheiros Envolvidos
```
assets/main.scss        ← editar
assets/circuit-bg.svg   ← criar
functions.php           ← adicionar enqueue Google Fonts
```

---

### FASE 2 — Estrutura Global (Header & Footer)

> Elementos presentes em **todas** as páginas. Têm de estar perfeitos antes de avançar.

#### Header (`header.php`)

- [ ] Navbar Bootstrap com classe `.navbar-lwt`
- [ ] Logo LWT à esquerda (via customizer)
- [ ] Menu de navegação: Início · Sobre · Serviços · Portfólio · Contacto
- [ ] Botão CTA **"Pedir Orçamento"** à direita (azul gradiente)
- [ ] Efeito scroll: navbar transparente no topo → navy sólido ao fazer scroll (JS)
- [ ] Menu mobile: offcanvas lateral escuro com links + dados de contacto rápidos + redes sociais

#### Footer (`footer.php`)

- [ ] Fundo `#060D20`
- [ ] **Coluna 1:** Logo + tagline + ícones de redes sociais
- [ ] **Coluna 2:** Links rápidos (Início, Sobre, Serviços, Portfólio, Contacto)
- [ ] **Coluna 3:** Serviços (Automação, Sistemas de Controle, Projetos Industriais, Mão de Obra)
- [ ] **Coluna 4:** Contacto (morada, telefone, email, horário)
- [ ] Barra inferior: copyright + "Todos os direitos reservados"

#### Banner Interno de Página (`inc/template-parts/page-banner.php`)

- [ ] Componente reutilizável para todas as páginas internas
- [ ] Fundo navy com efeito circuit subtil
- [ ] Título da página (H1) centrado
- [ ] Breadcrumb: Início → Nome da Página

#### Ficheiros Envolvidos
```
header.php                          ← reescrever
footer.php                          ← reescrever
assets/main.js                      ← adicionar efeito scroll navbar
template-parts/page-banner.php      ← criar
```

---

### FASE 3 — Homepage (`front-page.php`)

> A página mais importante. 8 secções do hero ao contacto.

#### Secções (ordem)

**01. Hero Slider**
- 2 slides full-width, fundo navy + SVG circuit como background
- Slide 1: *"Especialistas em Automação Industrial"* — subtítulo + 2 CTAs
- Slide 2: *"Do Projeto à Implementação"* — subtítulo + 2 CTAs
- Bootstrap Carousel com fade, auto-play 5s, controles de navegação
- Altura: `100vh` no desktop, responsivo mobile

**02. Serviços em Destaque**
- Label `O QUE FAZEMOS` + H2 bold
- 4 cards em grid: ícone SVG, título, descrição 2 linhas, link "Saiba mais →"
- Serviços: Engenharia de Automação · Sistemas de Controle · Projetos Industriais · Mão de Obra Especializada
- Fundo branco/claro, hover com border azul

**03. Sobre a Empresa**
- 2 colunas: imagem técnica (obra/equipa) à esquerda
- Texto: *"Experiência que faz a diferença"* + parágrafo
- Lista numerada (01–04): Profissionais Certificados · Experiência em Campo · Soluções à Medida · Suporte Contínuo
- Botão "O nosso portfólio"
- Fundo claro

**04. Estatísticas / Contadores**
- Fundo navy escuro full-width
- 4 contadores animados ao scroll (IntersectionObserver):
  - `150+` Projetos Concluídos
  - `80+` Clientes Industriais
  - `10+` Anos no Setor
  - `30+` Técnicos Especializados

**05. Portfólio em Destaque**
- Label `PROJETOS` + H2
- Grid 3×2 de projetos (CPT Portfolio)
- Cada card: imagem, overlay azul navy ao hover, categoria em azul elétrico, nome do projeto
- Botão "Ver portfólio completo"

**06. Testemunhos**
- Label `TESTEMUNHOS` + H2
- Bootstrap Carousel de clientes satisfeitos
- Cada slide: foto circular, texto, nome, cargo/empresa
- Fundo claro com sombra suave

**07. Últimas Notícias**
- Label `NOTÍCIAS` + H2
- 3 posts recentes via `WP_Query`
- Card: imagem, categoria, data, título, excerto truncado, link
- Grid 3 colunas desktop, 1 coluna mobile

**08. Contacto / CTA Final**
- Fundo navy
- 2 colunas: formulário Contact Form 7 + coluna com dados (morada, tel, email, horário)
- Google Maps embed full-width abaixo

#### Ficheiros Envolvidos
```
front-page.php                      ← criar
template-parts/hero-slider.php      ← criar
template-parts/section-services.php ← criar
template-parts/section-about.php    ← criar
template-parts/section-stats.php    ← criar
template-parts/section-portfolio.php← criar
template-parts/section-testimonials.php ← criar
template-parts/section-blog.php     ← criar
template-parts/section-contact.php  ← criar
assets/main.js                      ← adicionar contador animado
```

---

### FASE 4 — Páginas Internas

#### Sobre Nós (`page-about.php`)
- [ ] Banner interno (page-banner.php)
- [ ] Secção: A Nossa História — texto + imagem
- [ ] Secção: Estatísticas (contadores)
- [ ] Secção: A Nossa Equipa — cards com foto, nome, cargo
- [ ] Secção: Como Trabalhamos — lista numerada 01–04
- [ ] Secção: Logos de Clientes / Parceiros — carousel horizontal

#### Serviços (`page-services.php`)
- [ ] Banner interno
- [ ] Grid completo de serviços (6–8 cards detalhados)
- [ ] Secção escura "Como trabalhamos" — imagem + texto técnico
- [ ] Projetos relacionados (3 itens)
- [ ] CTA: Pedido de orçamento rápido

#### Portfólio (`page-portfolio.php`)
- [ ] Banner interno
- [ ] Botões de filtro por categoria (JS, sem reload de página)
- [ ] Grid masonry/metro de projetos (CPT Portfolio)
- [ ] Hover overlay com categoria + nome + link
- [ ] Paginação ou botão "Carregar mais"

#### Contacto (`page-contact.php`)
- [ ] Banner interno
- [ ] 2 colunas: formulário (Contact Form 7) + dados de contacto
- [ ] Dados: morada, telefone, email, horário de funcionamento
- [ ] Google Maps iframe full-width

#### Pedido de Orçamento (`page-quote.php`)
- [ ] Formulário completo: nome, empresa, email, telefone, tipo de projeto, prazo estimado, descrição detalhada
- [ ] Destaque visual no menu com cor diferente

---

### FASE 5 — WordPress & Polimento

#### Custom Post Types (`functions.php`)
- [ ] **CPT: Projetos** (`portfolio`) — taxonomia: Categoria de Projeto, Setor Industrial
- [ ] **CPT: Serviços** (`servicos`) — taxonomia: Área de Serviço
- [ ] **CPT: Testemunhos** (`testimonials`) — campos: empresa, cargo, foto

#### Theme Customizer (`inc/customizer.php`)
- [ ] Secção "LWT Service — Dados da Empresa":
  - Telefone principal
  - Email de contacto
  - Morada completa
  - Horário de funcionamento
  - Links redes sociais (LinkedIn, Facebook, Instagram)
- [ ] Secção "LWT Service — Hero":
  - Título slide 1 + subtítulo
  - Título slide 2 + subtítulo
  - Texto do botão CTA principal

#### Responsividade
- [ ] Mobile (375px): navbar hamburger, hero texto menor, cards 1 coluna, footer 2 colunas
- [ ] Tablet (768px): cards 2 colunas, hero médio, footer 2 colunas
- [ ] Desktop (1200px+): layout completo

#### Performance & SEO
- [ ] Lazy loading nativo para imagens (`loading="lazy"`)
- [ ] Minificação CSS/JS via `build/` (npm)
- [ ] Meta tags Open Graph (og:title, og:description, og:image)
- [ ] Schema markup `LocalBusiness` + `ProfessionalService`
- [ ] Plugin recomendado: Yoast SEO

#### Animações de Scroll
- [ ] Fade-in ao entrar no viewport — classes `.fade-up`, `.fade-in`
- [ ] Implementação via IntersectionObserver (zero dependências)

---

## Componentes Reutilizáveis (PHP)

```php
// Usar em qualquer template:
get_template_part('template-parts/page-banner');       // Banner interno
get_template_part('template-parts/section-services');  // Grid de serviços
get_template_part('template-parts/section-stats');     // Contadores
get_template_part('template-parts/section-portfolio'); // Grid portfólio
get_template_part('template-parts/section-testimonials'); // Carousel
```

---

## Plugins Recomendados

| Plugin | Função | Prioridade |
|--------|--------|------------|
| Contact Form 7 | Formulários de contacto e orçamento | Alta |
| Yoast SEO | SEO, sitemap, Open Graph | Alta |
| Classic Editor | Edição de conteúdo simples | Média |
| WP Rocket | Cache e performance | Média |
| Smush / ShortPixel | Otimização de imagens | Média |

---

## Estrutura de Ficheiros do Tema

```
themes/ltw/
├── front-page.php              🆕 Homepage
├── page-about.php              🆕 Sobre Nós
├── page-services.php           🆕 Serviços
├── page-portfolio.php          🆕 Portfólio
├── page-contact.php            🆕 Contacto
├── page-quote.php              🆕 Pedir Orçamento
├── header.php                  ✏️ Reescrever — navbar sticky
├── footer.php                  ✏️ Reescrever — 4 colunas
├── functions.php               ✏️ CPTs, menus, scripts, customizer
├── single.php                  ✏️ Post individual
├── archive.php                 ✏️ Arquivo de notícias
├── page.php                    ✅ Manter
├── 404.php                     ✅ Manter
│
├── assets/
│   ├── main.scss               ✏️ Variáveis LWT, componentes
│   ├── main.js                 ✏️ Contador, navbar scroll, filtros
│   └── circuit-bg.svg          🆕 Decoração circuit elétrico
│
├── build/                      (gerado por npm run build)
│   ├── main.css
│   └── main.js
│
├── inc/
│   ├── customizer.php          ✏️ Opções do tema
│   ├── cpt-portfolio.php       🆕 CPT Projetos
│   ├── cpt-services.php        🆕 CPT Serviços
│   └── cpt-testimonials.php    🆕 CPT Testemunhos
│
└── template-parts/
    ├── page-banner.php         🆕 Banner interno reutilizável
    ├── hero-slider.php         🆕 Hero da homepage
    ├── section-services.php    🆕 Secção serviços
    ├── section-about.php       🆕 Secção sobre
    ├── section-stats.php       🆕 Contadores animados
    ├── section-portfolio.php   🆕 Grid portfólio
    ├── section-testimonials.php 🆕 Carousel testemunhos
    ├── section-blog.php        🆕 Posts recentes
    └── section-contact.php     🆕 Formulário + mapa

Legenda: 🆕 Criar novo  ✏️ Modificar existente  ✅ Manter igual
```

---

## Decisões Técnicas

| Decisão | Escolha | Motivo |
|---------|---------|--------|
| Estrutura de páginas | Templates PHP por página | Controlo total, sem builder pesado, compatível com Bootstrap 5 |
| CSS | SCSS customizado sobre Bootstrap 5 | Tema já configurado com npm + SCSS |
| Slider/Hero | Bootstrap Carousel (nativo) | Já incluído, leve, sem dependências extras |
| Gestão de conteúdo | Custom Post Types nativos WP | Gratuito, editável no painel WP pelo cliente |
| Tipografia | Barlow + Inter (Google Fonts) | Barlow = industrial/técnico; Inter = legibilidade máxima |
| Idioma base | Português (PT) | Mercado principal; WPML pode ser adicionado depois |
| Animações scroll | IntersectionObserver (JS nativo) | Zero dependências externas |
| Formulários | Contact Form 7 | Gratuito, estável, fácil de configurar |

---

## Ordem de Execução Recomendada

```
1. SCSS: variáveis + tipografia + utilitários base
2. Header: navbar sticky transparente → solid
3. Footer: 4 colunas completo
4. functions.php: CPTs + menus + Google Fonts
5. front-page.php: homepage secção a secção
6. page-about.php: Sobre Nós
7. page-services.php: Serviços
8. page-portfolio.php: Portfólio com filtros
9. page-contact.php: Contacto + mapa
10. page-quote.php: Formulário orçamento
11. Polimento: animações, responsividade, SEO, testes
```

---

## Conteúdo da Empresa (a confirmar / preencher)

- [ ] Textos definitivos dos serviços
- [ ] Fotografias de projetos concluídos
- [ ] Fotografias da equipa
- [ ] Dados de contacto completos (morada, NIF, telefone, email)
- [ ] Testemunhos de clientes (nome, empresa, texto)
- [ ] Logos de clientes / parceiros
- [ ] Vídeo institucional (opcional)
- [ ] Certificações e acreditações da empresa

---

*Plano gerado com Claude — LWT Service · Maio 2026*
