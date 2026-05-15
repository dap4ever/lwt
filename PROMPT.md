# Claude Code Prompt — LWT Service WordPress Theme

> Copy everything below this line and paste it into Claude Code (VS Code).

---

## MASTER PROMPT

You are an expert WordPress theme developer. Your task is to build a complete, professional, high-performance WordPress theme from scratch for **LWT Service**, an industrial automation engineering company based in Portugal.

You will work inside the existing WordPress theme located at the current directory. The theme is called **LTW** and is built on **Bootstrap 5** with a SCSS + npm build system. Do not use any page builders (no Elementor, no Divi, no Gutenberg blocks). Everything must be clean, hand-coded PHP, SCSS, and vanilla JavaScript.

---

## 1. COMPANY OVERVIEW

**Company:** LWT Service  
**Industry:** Industrial Automation Engineering  
**Core Service:** *"Fornecimento de mão de obra técnica especializada em engenharia de automação, atuando em projetos industriais, sistemas de controle e implementação de soluções automatizadas."*  
**Translation:** Specialized technical workforce supply in automation engineering, working on industrial projects, control systems and implementation of automated solutions.  
**Target Audience:** Industrial companies, factories, plant managers, procurement managers — B2B  
**Tone:** Professional, technical, trustworthy, modern, industrial  
**Language:** Portuguese (Brasil — PT-BR)  
**Location:** Portugal

**Services offered:**
1. Industrial Automation Engineering (PLC programming, SCADA, DCS)
2. Control Systems (installation, parameterization, maintenance)
3. Industrial Projects (full project management and execution)
4. Specialized Technical Workforce (engineer and technician supply)
5. Electrical Panels & Instrumentation
6. Automated Solutions Implementation

---

## 2. VISUAL DESIGN REFERENCE

**Inspiration site:** https://edifice.themerex.net/  
Study this site carefully. Replicate its:
- Bold, impactful section structure
- Alternating dark/light sections
- "Label + H2" heading pattern (small uppercase label above main heading)
- Numbered service lists (01. 02. 03. 04.)
- Animated stats counters on dark backgrounds
- Portfolio grid with hover overlay
- Testimonials carousel
- Full-width hero slider
- 4-column footer on dark background
- Side offcanvas mobile menu
- Sticky navbar (transparent on top → solid on scroll)

**Logo description:** The LWT logo features the letters "LWT" in dark navy, with circuit board lines (electronic circuit traces with dots) flowing from the left side and an arrow pointing right — representing data flow and automation. Colors are a gradient from bright electric blue (#00AAFF) to deep navy (#0D1B4B).

---

## 3. COLOR PALETTE

Use these exact colors throughout the entire theme:

```scss
// Primary palette
$color-dark:       #060D20;  // Deepest dark — footer backgrounds
$color-navy:       #0A1128;  // Hero sections, dark backgrounds
$color-navy-mid:   #0D1B4B;  // Cards, navbar solid, mid-dark sections
$color-blue:       #1A4AFF;  // Primary blue — buttons, accents
$color-electric:   #00AAFF;  // Electric blue — labels, icons, hover, circuit decoration

// Neutral palette
$color-white:      #FFFFFF;
$color-light-bg:   #F8FAFC;  // Light section backgrounds
$color-text-light: #E2E8F0;  // Body text on dark backgrounds
$color-text-mid:   #94A3B8;  // Secondary text on dark backgrounds
$color-text-muted: #64748B;  // Muted/tertiary text
$color-border:     #1E2A4A;  // Borders on dark backgrounds

// Semantic
$color-primary:    $color-blue;
$color-accent:     $color-electric;
$color-dark-bg:    $color-navy;
$color-darker-bg:  $color-dark;
```

---

## 4. TYPOGRAPHY

**Font stack:**
- **Headings (H1–H4):** [Barlow](https://fonts.google.com/specimen/Barlow) — weights 700, 800, 900 — industrial, bold, technical
- **Body / UI:** [Inter](https://fonts.google.com/specimen/Inter) — weights 400, 500, 600 — clean, highly legible

**Google Fonts URL:**
```
https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Inter:wght@400;500;600&display=swap
```

**Scale:**
```scss
$font-family-heading: 'Barlow', system-ui, sans-serif;
$font-family-body:    'Inter', system-ui, sans-serif;

// Heading sizes
$h1-size: clamp(2.5rem, 5vw, 4rem);     // Hero titles
$h2-size: clamp(1.8rem, 3vw, 2.75rem);  // Section titles
$h3-size: clamp(1.25rem, 2vw, 1.75rem); // Card titles
$h4-size: 1.125rem;

// Section label (above H2)
$label-size: 0.6875rem;  // 11px
$label-spacing: 0.2em;
$label-weight: 700;
```

---

## 5. REUSABLE CSS UTILITY CLASSES

Create these utility classes in `assets/main.scss`:

```scss
// Section types
.section-light     { background: $color-light-bg; }
.section-white     { background: #fff; }
.section-dark      { background: $color-navy; color: $color-text-light; }
.section-darker    { background: $color-dark; color: $color-text-light; }
.section-navy-mid  { background: $color-navy-mid; color: $color-text-light; }

// Section padding
.section-pad       { padding: 100px 0; }
.section-pad-sm    { padding: 60px 0; }

// Section label (small label above H2 — like Edifice)
.section-label {
  display: block;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: $color-electric;
  margin-bottom: 12px;
}

// Section title
.section-title {
  font-family: $font-family-heading;
  font-size: $h2-size;
  font-weight: 800;
  line-height: 1.15;
  margin-bottom: 20px;
}

// Buttons
.btn-lwt {
  background: linear-gradient(90deg, $color-blue, $color-electric);
  color: #fff;
  border: none;
  padding: 14px 32px;
  border-radius: 4px;
  font-family: $font-family-body;
  font-weight: 600;
  font-size: 0.9rem;
  letter-spacing: 0.03em;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  &:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(26,74,255,0.35); color: #fff; }
}
.btn-lwt-outline {
  background: transparent;
  color: $color-electric;
  border: 1.5px solid $color-electric;
  padding: 13px 32px;
  border-radius: 4px;
  font-family: $font-family-body;
  font-weight: 600;
  font-size: 0.9rem;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  &:hover { background: $color-electric; color: #fff; }
}
```

---

## 6. CIRCUIT SVG DECORATION

Create `assets/circuit-bg.svg` — an electronic circuit trace pattern (horizontal lines with dots at the ends, right-facing arrow) inspired by the LWT logo. Use it as a background-image on hero and dark sections with low opacity (~0.06). The SVG should be a wide horizontal element with circuit traces (similar to PCB traces) in color `#00AAFF`.

Also create an inline circuit decoration PHP partial at `template-parts/circuit-decoration.php`.

---

## 7. FILE STRUCTURE TO CREATE

### New files to create:
```
front-page.php
page-about.php
page-services.php
page-portfolio.php
page-contact.php
page-quote.php
template-parts/page-banner.php
template-parts/hero-slider.php
template-parts/section-services.php
template-parts/section-about.php
template-parts/section-stats.php
template-parts/section-portfolio.php
template-parts/section-testimonials.php
template-parts/section-blog.php
template-parts/section-contact.php
template-parts/circuit-decoration.php
inc/cpt-portfolio.php
inc/cpt-services.php
inc/cpt-testimonials.php
assets/circuit-bg.svg
```

### Files to heavily modify:
```
header.php          — complete rewrite
footer.php          — complete rewrite
functions.php       — add CPTs, menus, scripts, customizer
assets/main.scss    — add entire LWT design system
assets/main.js      — add navbar scroll, counter, slider, filter, animations
inc/customizer.php  — add company settings panel
```

---

## 8. HEADER (`header.php`)

Build a sticky navbar that:

1. **Starts transparent** when the page is at top (on homepage with full-screen hero)
2. **Becomes solid navy** (`#0D1B4B`) with a subtle bottom border when user scrolls down 80px
3. Uses a **smooth CSS transition** for the background change (0.4s ease)
4. Has a **subtle box-shadow** when solid: `0 2px 20px rgba(0,0,0,0.3)`

**Left side:** Logo image (from WordPress Customizer option `lwt_logo`). Fallback: "LWT SERVICE" text in Barlow Bold with electric blue accent.

**Center/Right navigation links** (Bootstrap collapse, mobile hamburger):
- Início (`/`)
- Sobre Nós (`/sobre-nos/`)
- Serviços (`/servicos/`)
- Portfólio (`/portfolio/`)
- Contacto (`/contacto/`)

**Far right:** CTA button — `<a class="btn-lwt" href="/orcamento/">Pedir Orçamento <span>→</span></a>`

**Mobile menu:** Bootstrap Offcanvas (not the standard collapse). Dark background `#0A1128`. Include:
- Navigation links (large, touch-friendly, 54px min height each)
- Separator line
- Company phone number with phone icon
- Company email with envelope icon
- Social media icons row (LinkedIn, Facebook, Instagram)
- "Pedir Orçamento" button at the bottom

**JavaScript** (in `assets/main.js`):
```javascript
// Navbar scroll effect
const navbar = document.getElementById('lwt-navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 80) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
});
```

**SCSS:**
```scss
#lwt-navbar {
  transition: background 0.4s ease, box-shadow 0.4s ease;
  background: transparent;
  
  &.navbar-scrolled {
    background: $color-navy-mid !important;
    box-shadow: 0 2px 20px rgba(0,0,0,0.3);
  }

  // Only transparent on homepage (front-page)
  &.navbar-home { background: transparent; }
  &.navbar-inner { background: $color-navy-mid; }

  .nav-link {
    color: rgba(255,255,255,0.85) !important;
    font-weight: 500;
    font-size: 0.875rem;
    padding: 8px 14px !important;
    transition: color 0.2s;
    &:hover, &.active { color: $color-electric !important; }
  }
}
```

---

## 9. FOOTER (`footer.php`)

Full 4-column footer on very dark background (`#060D20`).

**Top section** (4 columns, Bootstrap grid `col-lg-4 col-md-6`):

**Column 1 (wider):**
- LWT logo or stylized text "LWT SERVICE"
- Tagline: *"Soluções especializadas em automação e engenharia industrial."*
- Social icons row: LinkedIn, Facebook, Instagram — circular bordered buttons, hover electric blue

**Column 2 — Quick Links:**
- Title: "Navegação"
- Links: Início, Sobre Nós, Serviços, Portfólio, Blog, Contacto
- Each with a subtle right-arrow prefix `→`

**Column 3 — Services:**
- Title: "Serviços"
- Engenharia de Automação, Sistemas de Controle, Projetos Industriais, Mão de Obra Especializada, Painéis Elétricos, Instrumentação

**Column 4 — Contact:**
- Title: "Contacto"
- Address: with location pin icon
- Phone: with phone icon (from Customizer)
- Email: with envelope icon (from Customizer)
- Hours: "Seg–Sex: 09h00–18h00"

**Bottom bar:** thin top border `#1E2A4A`, copyright `© <?php echo date('Y'); ?> LWT Service. Todos os direitos reservados.` left, "Desenvolvido por Danilo Alves" right (small text, muted).

**SCSS:** Background `#060D20`, all text `$color-text-mid`, titles `#fff`, links hover `$color-electric`.

---

## 10. `functions.php` ADDITIONS

Add these to `functions.php`:

### Google Fonts
```php
function lwt_enqueue_fonts() {
    wp_enqueue_style('lwt-fonts', 
        'https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Inter:wght@400;500;600&display=swap',
        [], null
    );
}
add_action('wp_enqueue_scripts', 'lwt_enqueue_fonts');
```

### Navigation Menus
```php
register_nav_menus([
    'main-menu'   => 'Menu Principal',
    'footer-menu' => 'Menu Footer',
]);
```

### Include CPTs and Customizer
```php
require_once get_template_directory() . '/inc/cpt-portfolio.php';
require_once get_template_directory() . '/inc/cpt-services.php';
require_once get_template_directory() . '/inc/cpt-testimonials.php';
```

### Body Classes helper
```php
// Add page-specific body classes
function lwt_body_classes($classes) {
    if (is_front_page()) $classes[] = 'page-home';
    return $classes;
}
add_filter('body_class', 'lwt_body_classes');
```

---

## 11. CUSTOM POST TYPES

### `inc/cpt-portfolio.php` — Projects Portfolio
```php
// Post type: 'lwt_project'
// Singular: 'Projeto', Plural: 'Projetos'
// Supports: title, editor, thumbnail, excerpt
// Taxonomy: 'project_category' — labels: Categoria, Categorias
//   Terms to create: Automação, Sistemas de Controle, Projetos Industriais, Elétrica, Instrumentação
// Has archive: false (custom page template handles display)
// Menu icon: 'dashicons-portfolio'
```

### `inc/cpt-services.php` — Services
```php
// Post type: 'lwt_service'
// Singular: 'Serviço', Plural: 'Serviços'
// Supports: title, editor, thumbnail, excerpt
// Custom fields (use register_meta): service_icon (dashicon or SVG string)
// Has archive: false
// Menu icon: 'dashicons-admin-tools'
```

### `inc/cpt-testimonials.php` — Testimonials
```php
// Post type: 'lwt_testimonial'
// Singular: 'Testemunho', Plural: 'Testemunhos'
// Supports: title, editor, thumbnail
// Custom fields: testimonial_company, testimonial_role, testimonial_rating
// Has archive: false
// Menu icon: 'dashicons-format-quote'
```

---

## 12. HOMEPAGE — `front-page.php`

Structure using `get_template_part()` for each section:

```php
<?php get_header(); ?>

<?php get_template_part('template-parts/hero-slider'); ?>
<?php get_template_part('template-parts/section-services'); ?>
<?php get_template_part('template-parts/section-about'); ?>
<?php get_template_part('template-parts/section-stats'); ?>
<?php get_template_part('template-parts/section-portfolio'); ?>
<?php get_template_part('template-parts/section-testimonials'); ?>
<?php get_template_part('template-parts/section-blog'); ?>
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>
```

---

## 13. SECTION — Hero Slider (`template-parts/hero-slider.php`)

**Visual:** Full viewport height (`100vh`). Dark navy background with circuit SVG overlay at 6% opacity. Bootstrap Carousel with 2 slides. Auto-play every 5000ms. Fade transition (not slide). White text throughout.

**Slide 1:**
- Small label: `ENGENHARIA DE AUTOMAÇÃO INDUSTRIAL`
- H1: `Especialistas em` + line break + `<span class="text-electric">Automação Industrial</span>`
- Subtitle: `Fornecemos mão de obra técnica especializada para projetos industriais, sistemas de controle e soluções automatizadas de alta performance.`
- Two buttons: `[Conhecer Serviços →]` (primary) `[Ver Portfólio]` (outline)

**Slide 2:**
- Small label: `EXCELÊNCIA TÉCNICA EM CAMPO`
- H1: `Do Projeto à` + line break + `<span class="text-electric">Implementação</span>`
- Subtitle: `Equipas técnicas certificadas, prontas para atuar em ambientes industriais exigentes com máxima eficiência e segurança.`
- Two buttons: `[Pedir Orçamento →]` (primary) `[Sobre Nós]` (outline)

**Scroll indicator:** Bottom center animated bouncing arrow → `↓`

**SCSS for hero:**
```scss
.hero-section {
  position: relative;
  height: 100vh;
  min-height: 600px;
  background: $color-navy;
  overflow: hidden;

  .circuit-overlay {
    position: absolute;
    inset: 0;
    background-image: url('assets/circuit-bg.svg');
    background-size: cover;
    opacity: 0.06;
    pointer-events: none;
  }

  .carousel-item {
    height: 100vh;
    min-height: 600px;
    display: flex;
    align-items: center;
  }

  .hero-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: $color-electric;
    margin-bottom: 16px;
    display: block;
  }

  h1 {
    font-family: $font-family-heading;
    font-size: clamp(2.5rem, 5vw, 4.5rem);
    font-weight: 900;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 24px;
    
    .text-electric { color: $color-electric; }
  }

  .hero-subtitle {
    font-size: 1.0625rem;
    color: $color-text-mid;
    max-width: 540px;
    line-height: 1.7;
    margin-bottom: 36px;
  }

  .hero-btns { display: flex; gap: 16px; flex-wrap: wrap; }

  .scroll-indicator {
    position: absolute;
    bottom: 32px;
    left: 50%;
    transform: translateX(-50%);
    color: $color-electric;
    font-size: 1.5rem;
    animation: bounce 2s infinite;
    cursor: pointer;
    opacity: 0.7;
  }
}

@keyframes bounce {
  0%, 100% { transform: translateX(-50%) translateY(0); }
  50% { transform: translateX(-50%) translateY(-10px); }
}
```

---

## 14. SECTION — Services (`template-parts/section-services.php`)

**Visual:** White background. Section padding 100px. Container centered.

**Layout:**
- Top: `<span class="section-label">O QUE FAZEMOS</span>`
- H2: `Os nossos serviços fazem de nós uma referência na automação industrial`
- Subtitle paragraph: muted, max 600px wide
- Grid: `row g-4` with 4 cards `col-lg-3 col-md-6`

**Each service card:**
```html
<div class="service-card">
  <div class="service-icon"> <!-- SVG icon --> </div>
  <h3>Service Name</h3>
  <p>Short description 2-3 lines</p>
  <a href="/servicos/#service-name" class="service-link">Saiba mais →</a>
</div>
```

**4 Services:**
1. ⚡ **Engenharia de Automação** — Projetos e implementação de sistemas automatizados: PLCs, redes industriais (Profibus, DeviceNet, Ethernet/IP) e soluções SCADA.
2. 🔧 **Sistemas de Controle** — Instalação, parametrização e manutenção de sistemas DCS, painéis de controle industrial e sistemas de supervisão.
3. 🏭 **Projetos Industriais** — Gestão e execução de projetos industriais completos, do levantamento ao comissionamento e entrega final.
4. 👷 **Mão de Obra Especializada** — Fornecimento de técnicos e engenheiros especializados para alocação em projetos de curto ou longo prazo.

**SCSS for service card:**
```scss
.service-card {
  background: #fff;
  border: 1px solid #E8EFF8;
  border-radius: 8px;
  padding: 36px 28px;
  height: 100%;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;

  &::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, $color-blue, $color-electric);
    transform: scaleX(0);
    transition: transform 0.3s ease;
    transform-origin: left;
  }

  &:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(26,74,255,0.12);
    border-color: rgba(26,74,255,0.2);
    &::after { transform: scaleX(1); }
  }

  .service-icon {
    width: 56px; height: 56px;
    background: linear-gradient(135deg, $color-navy, $color-blue);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
    font-size: 1.5rem;
  }

  h3 {
    font-family: $font-family-heading;
    font-size: 1.125rem;
    font-weight: 700;
    margin-bottom: 12px;
    color: $color-navy;
  }

  p { font-size: 0.875rem; color: $color-text-muted; line-height: 1.7; }

  .service-link {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 0.8125rem; font-weight: 600;
    color: $color-blue; text-decoration: none; margin-top: 20px;
    transition: gap 0.2s;
    &:hover { gap: 10px; }
  }
}
```

---

## 15. SECTION — About (`template-parts/section-about.php`)

**Visual:** Light gray background (`#F8FAFC`). Two-column layout: image left, content right.

**Left column:** Featured image or placeholder with a subtle blue border-left accent line. Optionally overlay a small badge: `"10+ Anos de Experiência"` on the image.

**Right column:**
- `<span class="section-label">SOBRE A EMPRESA</span>`
- H2: `Experiência técnica que transforma projetos em resultados`
- Paragraph: `Com mais de uma década no setor industrial, a LWT Service especializou-se no fornecimento de profissionais técnicos altamente qualificados...`
- Numbered list (01–04):
  ```
  01. Profissionais Certificados
      Toda a equipa detém certificações técnicas reconhecidas no setor.
  02. Experiência em Campo
      Anos de atuação em ambientes industriais exigentes e complexos.
  03. Soluções à Medida
      Cada projeto é analisado individualmente para a melhor solução.
  04. Suporte Contínuo
      Acompanhamento pós-implementação para garantir o funcionamento ideal.
  ```
- Button: `[O nosso portfólio →]`

**SCSS for numbered list:**
```scss
.about-list {
  list-style: none;
  padding: 0;
  margin: 28px 0 36px;

  li {
    display: flex;
    gap: 20px;
    padding: 16px 0;
    border-bottom: 1px solid #E8EFF8;
    &:last-child { border-bottom: none; }
  }

  .list-num {
    font-family: $font-family-heading;
    font-size: 1.5rem;
    font-weight: 900;
    color: $color-blue;
    opacity: 0.4;
    min-width: 48px;
    line-height: 1;
    font-style: italic;
  }

  .list-content {
    h5 { font-weight: 700; font-size: 0.9375rem; color: $color-navy; margin-bottom: 4px; }
    p  { font-size: 0.8125rem; color: $color-text-muted; margin: 0; line-height: 1.6; }
  }
}
```

---

## 16. SECTION — Stats Counters (`template-parts/section-stats.php`)

**Visual:** Full-width dark navy background (`#0A1128`) with subtle circuit SVG overlay (opacity 0.05). No container constraints on the background, but content is inside `.container`.

**4 counters in a row** (`col-6 col-md-3`):
| Number | Suffix | Label |
|--------|--------|-------|
| 150 | + | Projetos Concluídos |
| 80 | + | Clientes Industriais |
| 10 | + | Anos de Experiência |
| 30 | + | Técnicos Especializados |

**JavaScript counter animation** — triggers when section enters viewport:
```javascript
function animateCounter(el) {
  const target = parseInt(el.dataset.target);
  const duration = 2000;
  const step = target / (duration / 16);
  let current = 0;
  const timer = setInterval(() => {
    current += step;
    if (current >= target) {
      current = target;
      clearInterval(timer);
    }
    el.textContent = Math.floor(current);
  }, 16);
}

const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
      entry.target.classList.add('counted');
      animateCounter(entry.target);
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.counter-number').forEach(el => counterObserver.observe(el));
```

**HTML structure:**
```html
<div class="stat-item">
  <div class="stat-number-wrap">
    <span class="counter-number" data-target="150">0</span>
    <span class="stat-suffix">+</span>
  </div>
  <p class="stat-label">Projetos Concluídos</p>
</div>
```

**SCSS:**
```scss
.stats-section {
  padding: 80px 0;
  position: relative;
  overflow: hidden;
  background: $color-navy;

  .stat-item { text-align: center; padding: 20px; }

  .stat-number-wrap {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 4px;
  }

  .counter-number {
    font-family: $font-family-heading;
    font-size: clamp(3rem, 6vw, 5rem);
    font-weight: 900;
    color: $color-electric;
    line-height: 1;
  }

  .stat-suffix {
    font-family: $font-family-heading;
    font-size: 2rem;
    font-weight: 900;
    color: $color-electric;
    margin-top: 12px;
  }

  .stat-label {
    font-size: 0.8125rem;
    font-weight: 500;
    color: $color-text-mid;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-top: 8px;
  }

  // Dividers between stats
  .stat-item + .stat-item {
    border-left: 1px solid $color-border;
  }
  @media (max-width: 767px) {
    .stat-item + .stat-item { border-left: none; border-top: 1px solid $color-border; }
  }
}
```

---

## 17. SECTION — Portfolio (`template-parts/section-portfolio.php`)

**Visual:** White background. Heading + 6-item grid + "See all" button.

**WP_Query:** Fetch 6 latest `lwt_project` posts. Include thumbnail, title, and `project_category` taxonomy term.

**Grid:** `row g-3`, each item `col-lg-4 col-md-6`. Equal height cards.

**Card HTML:**
```html
<div class="portfolio-card">
  <div class="portfolio-img">
    <?php the_post_thumbnail('large'); ?>
    <div class="portfolio-overlay">
      <div class="overlay-content">
        <span class="overlay-cat"><?php echo $category_name; ?></span>
        <h4><?php the_title(); ?></h4>
        <a href="<?php the_permalink(); ?>" class="overlay-link">Ver Projeto →</a>
      </div>
    </div>
  </div>
</div>
```

**SCSS:**
```scss
.portfolio-card {
  overflow: hidden;
  border-radius: 6px;

  .portfolio-img {
    position: relative;
    aspect-ratio: 4/3;
    overflow: hidden;

    img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
  }

  .portfolio-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(10,17,40,0.95), rgba(13,27,75,0.90));
    display: flex;
    align-items: flex-end;
    padding: 28px;
    opacity: 0;
    transition: opacity 0.35s ease;
  }

  &:hover {
    .portfolio-img img { transform: scale(1.08); }
    .portfolio-overlay { opacity: 1; }
  }

  .overlay-cat {
    display: block;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: $color-electric;
    margin-bottom: 8px;
  }

  h4 {
    font-family: $font-family-heading;
    font-size: 1.125rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 14px;
  }

  .overlay-link {
    font-size: 0.8125rem;
    font-weight: 600;
    color: $color-electric;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    &:hover { gap: 10px; }
  }
}
```

---

## 18. SECTION — Testimonials (`template-parts/section-testimonials.php`)

**Visual:** Light gray background. Centered content. Bootstrap Carousel.

**WP_Query:** Fetch all `lwt_testimonial` posts. Display as carousel slides.

**Each slide:**
```html
<div class="testimonial-slide text-center">
  <div class="testimonial-quote-icon">"</div>
  <p class="testimonial-text"><!-- post content --></p>
  <div class="testimonial-author">
    <div class="testimonial-avatar"><!-- thumbnail --></div>
    <div class="testimonial-meta">
      <strong><!-- post title (client name) --></strong>
      <span><!-- testimonial_role meta -->, <!-- testimonial_company meta --></span>
    </div>
  </div>
</div>
```

**SCSS:**
```scss
.testimonials-section {
  .testimonial-quote-icon {
    font-family: Georgia, serif;
    font-size: 6rem;
    color: $color-electric;
    opacity: 0.2;
    line-height: 0.6;
    display: block;
    margin-bottom: 24px;
  }

  .testimonial-text {
    font-size: 1.0625rem;
    line-height: 1.8;
    color: #4A5568;
    max-width: 680px;
    margin: 0 auto 32px;
    font-style: italic;
  }

  .testimonial-avatar {
    width: 64px; height: 64px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 12px;
    border: 3px solid $color-electric;
    img { width: 100%; height: 100%; object-fit: cover; }
  }

  .testimonial-meta {
    strong { display: block; font-weight: 700; color: $color-navy; font-size: 0.9375rem; }
    span { font-size: 0.8125rem; color: $color-text-muted; }
  }
}
```

---

## 19. SECTION — Blog (`template-parts/section-blog.php`)

**Visual:** White background. 3 latest posts.

**WP_Query:** `posts_per_page: 3`, `post_status: publish`, `orderby: date`.

**Card:**
- Thumbnail image (aspect ratio 16/9)
- Category tag (colored badge)
- Date
- Post title (H4, Barlow bold)
- Excerpt (truncated, 120 chars)
- "Ler mais →" link

---

## 20. SECTION — Contact (`template-parts/section-contact.php`)

**Visual:** Dark navy background. 2 columns: form left, contact info right. Google Maps full-width below.

**Form:** Contact Form 7 shortcode `[contact-form-7 id="..." title="Contacto Homepage"]` with custom styling to override CF7 defaults — match theme colors, border-radius 4px, focus electric blue border.

**Contact info column:**
- Phone (from Customizer `lwt_phone`)
- Email (from Customizer `lwt_email`)
- Address (from Customizer `lwt_address`)
- Hours: Seg–Sex: 09h00–18h00 / Sáb: 09h00–13h00

**Google Maps:** `<iframe>` embed, full width, height 400px, filter: grayscale(100%) — gives it a minimal, professional look matching the dark theme.

---

## 21. PAGE BANNER COMPONENT (`template-parts/page-banner.php`)

Reusable banner for all inner pages. Accept `$args` array with `title` and optionally `subtitle`.

```php
<?php
$banner_title = isset($args['title']) ? $args['title'] : get_the_title();
$banner_subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
?>
<section class="page-banner">
  <div class="circuit-overlay"></div>
  <div class="container text-center">
    <h1 class="page-banner-title"><?php echo esc_html($banner_title); ?></h1>
    <?php if ($banner_subtitle): ?>
      <p class="page-banner-subtitle"><?php echo esc_html($banner_subtitle); ?></p>
    <?php endif; ?>
    <nav class="breadcrumb-nav" aria-label="breadcrumb">
      <a href="<?php echo home_url(); ?>">Início</a>
      <span class="breadcrumb-sep">→</span>
      <span><?php echo esc_html($banner_title); ?></span>
    </nav>
  </div>
</section>
```

**SCSS:**
```scss
.page-banner {
  background: $color-navy;
  padding: 120px 0 80px;
  position: relative;
  overflow: hidden;

  .circuit-overlay {
    position: absolute; inset: 0;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/circuit-bg.svg');
    background-size: cover;
    opacity: 0.05;
    pointer-events: none;
  }

  .page-banner-title {
    font-family: $font-family-heading;
    font-size: clamp(2rem, 4vw, 3.5rem);
    font-weight: 800;
    color: #fff;
    margin-bottom: 16px;
    position: relative;
  }

  .page-banner-subtitle {
    font-size: 1rem;
    color: $color-text-mid;
    max-width: 500px;
    margin: 0 auto 20px;
    position: relative;
  }

  .breadcrumb-nav {
    position: relative;
    font-size: 0.8125rem;
    a { color: $color-electric; text-decoration: none; &:hover { text-decoration: underline; } }
    .breadcrumb-sep { color: $color-text-muted; margin: 0 10px; }
    span:last-child { color: $color-text-mid; }
  }
}
```

---

## 22. INNER PAGES

### `page-about.php`
```
page-banner.php (title: "Sobre Nós")
→ section-about.php (full version with more text)
→ section-stats.php
→ Team grid (WP_Query on lwt_team CPT or static)
→ How we work — numbered steps 01–04 (full dark section)
→ Partner logos carousel (static images or ACF repeater)
```

### `page-services.php`
```
page-banner.php (title: "Serviços")
→ Full services grid (all lwt_service CPTs, 3 columns)
→ Dark section: "Como entregamos excelência" — full width, headline + text + background image
→ 3 featured portfolio items
→ CTA section: "Pronto para o seu próximo projeto?" + Pedir Orçamento button
```

### `page-portfolio.php`
```
page-banner.php (title: "Portfólio")
→ Filter buttons (All + taxonomy terms — JS filter, no reload)
→ Portfolio grid (all lwt_project posts, 3 columns)
→ Each card: image, overlay on hover, category, title, link
```

**JS Filter:**
```javascript
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;
    document.querySelectorAll('.portfolio-item').forEach(item => {
      if (filter === 'all' || item.dataset.category === filter) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  });
});
```

### `page-contact.php`
```
page-banner.php (title: "Contacto")
→ 2-col section: CF7 form left, contact info right (light background)
→ Google Maps iframe (full width, 450px height, grayscale filter)
```

### `page-quote.php`
```
page-banner.php (title: "Pedir Orçamento", subtitle: "Descreva o seu projeto e entraremos em contacto em 24 horas.")
→ Centered full form: name, company, email, phone, project type (select), estimated timeline (select), detailed description (textarea), privacy checkbox
→ CTA section below: contact info + working hours (dark background)
```

---

## 23. THEME CUSTOMIZER (`inc/customizer.php`)

Add a section `"LWT Service — Configurações"` with these controls:

```php
// Company info
lwt_phone     → text   → "Telefone"
lwt_email     → text   → "Email"
lwt_address   → textarea → "Morada"
lwt_hours     → text   → "Horário"

// Social
lwt_linkedin  → url → "LinkedIn URL"
lwt_facebook  → url → "Facebook URL"
lwt_instagram → url → "Instagram URL"

// Hero
lwt_hero1_label    → text → "Slide 1 — Label"
lwt_hero1_title    → text → "Slide 1 — Título"
lwt_hero1_subtitle → textarea → "Slide 1 — Subtítulo"
lwt_hero2_label    → text → "Slide 2 — Label"
lwt_hero2_title    → text → "Slide 2 — Título"
lwt_hero2_subtitle → textarea → "Slide 2 — Subtítulo"

// Logo
lwt_logo      → image → "Logo do Site"
```

Use `get_theme_mod('lwt_phone', '+351 000 000 000')` throughout templates.

---

## 24. SCROLL ANIMATIONS

Add fade-in-up animation on scroll for section elements. No external libraries — pure JS IntersectionObserver + CSS:

```css
/* In main.scss */
.animate-on-scroll {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.6s ease, transform 0.6s ease;

  &.animated {
    opacity: 1;
    transform: translateY(0);
  }
}
.animate-delay-1 { transition-delay: 0.1s; }
.animate-delay-2 { transition-delay: 0.2s; }
.animate-delay-3 { transition-delay: 0.3s; }
.animate-delay-4 { transition-delay: 0.4s; }
```

```javascript
// In main.js
const scrollObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animated');
    }
  });
}, { threshold: 0.15 });

document.querySelectorAll('.animate-on-scroll').forEach(el => scrollObserver.observe(el));
```

Add `.animate-on-scroll` to: section headings, service cards, portfolio cards, stat items, testimonial content, blog cards.

---

## 25. PERFORMANCE & SEO

Add to `functions.php`:

```php
// Remove WordPress emoji scripts (not needed)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Add preconnect for Google Fonts
function lwt_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head', 'lwt_preconnect_fonts', 1);

// Native lazy loading on all images
add_filter('wp_lazy_loading_enabled', '__return_true');

// Open Graph basic tags
function lwt_open_graph() {
    if (is_front_page()) {
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:title" content="LWT Service — Engenharia de Automação Industrial">';
        echo '<meta property="og:description" content="Fornecimento de mão de obra técnica especializada em engenharia de automação, atuando em projetos industriais e sistemas de controle.">';
        echo '<meta property="og:url" content="' . home_url() . '">';
    }
}
add_action('wp_head', 'lwt_open_graph');
```

---

## 26. RESPONSIVE BREAKPOINTS

All sections must be tested and work perfectly at:
- **Mobile:** 375px — single column, reduced font sizes, stacked buttons, full-width images
- **Tablet:** 768px — 2 columns max, adjusted padding
- **Desktop:** 1200px — full layout as designed
- **Large:** 1400px+ — centered content, max-width container

Critical mobile fixes:
- Hero: reduce h1 to `clamp(2rem, 8vw, 2.5rem)`, subtitle 0.9rem
- Navbar: hamburger → offcanvas
- Stats: 2×2 grid instead of row
- Footer: 2×2 grid, then 1 column on small mobile

---

## 27. BUILD PROCESS

The theme uses npm. After all SCSS changes:

```bash
# Install dependencies (if not done)
npm install

# Build once
npm run build

# Watch for changes during development
npm run watch
```

Make sure `package.json` has these scripts configured for SCSS compilation and JS bundling.

---

## 28. IMPLEMENTATION ORDER

Follow this exact order to avoid rework:

```
1.  assets/main.scss     — color variables, typography, utility classes
2.  functions.php        — Google Fonts enqueue, menus, CPT includes
3.  inc/cpt-*.php        — register all 3 custom post types
4.  header.php           — complete rewrite with sticky navbar
5.  footer.php           — complete rewrite with 4 columns
6.  template-parts/page-banner.php      — reusable inner page banner
7.  template-parts/hero-slider.php      — homepage hero
8.  template-parts/section-services.php — services grid
9.  template-parts/section-about.php    — about section
10. template-parts/section-stats.php    — animated counters
11. template-parts/section-portfolio.php — portfolio grid
12. template-parts/section-testimonials.php — carousel
13. template-parts/section-blog.php     — recent posts
14. template-parts/section-contact.php  — form + map
15. front-page.php       — assemble homepage template parts
16. page-about.php       — About page template
17. page-services.php    — Services page template
18. page-portfolio.php   — Portfolio page with filter
19. page-contact.php     — Contact page template
20. page-quote.php       — Quote request page template
21. assets/main.js       — all JavaScript: navbar, counter, filter, animations
22. inc/customizer.php   — WordPress Customizer settings
23. npm run build        — compile SCSS and bundle JS
24. Responsive testing   — adjust all breakpoints
```

---

## FINAL QUALITY CHECKLIST

Before considering the theme complete, verify:

- [ ] Navbar is transparent on homepage hero, solid on all inner pages
- [ ] Navbar becomes solid on scroll (homepage only, immediately on inner pages)
- [ ] Logo displays correctly from Customizer
- [ ] All 5 main nav links work
- [ ] "Pedir Orçamento" button visible on all screen sizes
- [ ] Mobile menu opens as offcanvas with contact info
- [ ] Hero slider autoplay works, both slides present
- [ ] Scroll indicator bounces and scrolls to next section on click
- [ ] 4 service cards display correctly, hover animation works
- [ ] About section: image + numbered list displays correctly
- [ ] Stats counters animate when scrolled into view
- [ ] Portfolio grid shows hover overlay correctly
- [ ] Testimonials carousel swipes/clicks between slides
- [ ] Blog posts load dynamically from WordPress
- [ ] Contact form submits without page reload (CF7 AJAX)
- [ ] Footer has all 4 columns with correct content
- [ ] All pages have page banner with breadcrumb
- [ ] Portfolio filter works (no page reload)
- [ ] Google Maps embed loads on contact page
- [ ] All elements fade in on scroll
- [ ] Site fully responsive at 375px, 768px, 1200px
- [ ] npm build completes without errors
- [ ] No PHP warnings or errors in debug mode
- [ ] All Customizer settings save and reflect in templates

---

*This prompt was generated for Claude Code (VS Code IDE) — LWT Service WordPress Theme — May 2026*
