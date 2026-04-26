<?php get_header(); ?>

<main>
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <h1>Fresh, Flavorful, and Easy Recipes for Everyday Cooking</h1>
        <p>
          Welcome to Recipe Delight, a clean and attractive recipe website designed for readers who want practical
          food inspiration, beautiful presentation, and a smooth browsing experience. This homepage is built to work
          well on search engines, on mobile screens, and for users who want quick access to recipes, categories, and
          helpful kitchen ideas.
        </p>
        <p>
          We focus on easy navigation, original content, and a layout that supports trust and clarity. Whether your
          goal is to publish breakfast ideas, dinner recipes, healthy meals, desserts, or seasonal cooking guides,
          this WordPress-style template gives you a strong base for a professional recipe site. The design keeps the
          main content easy to scan while still feeling warm, modern, and visually appealing.
        </p>
        <a class="cta" href="#recipes">Explore Recipes</a>
      </div>
      <div class="hero-card">
        <img
          src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?auto=format&fit=crop&w=1200&q=80"
          alt="Fresh recipe inspiration"
        >
      </div>
    </div>
  </section>

  <section class="section" id="about">
    <div class="container content-box">
      <h2 class="section-title">About This Recipe Theme</h2>
      <p>
        This theme is designed to help you launch a recipe website that looks professional and performs well in search
        results. A successful recipe site needs more than just nice photos. It should deliver useful information, clearly
        structured content, and a user experience that makes visitors want to return. That means strong page titles,
        readable typography, intuitive navigation, and a layout that keeps the focus on the food.
      </p>
      <p>
        Search engine optimization is easier when each page has a distinct topic and useful written content. This homepage
        includes descriptive text that can support ranking potential without feeling stuffed with keywords. You can build
        supporting pages for categories, recipe archives, cooking tips, and ingredient guides. Adding structured recipe
        data later can further improve visibility and help your content qualify for rich search results.
      </p>
      <p>
        The theme also considers trust and compliance. Legal pages such as Disclaimer and Privacy Policy are linked from
        the footer, which is important for transparency. If you plan to use ads, always keep your layout user-friendly,
        avoid deceptive behavior, and ensure that ads do not interfere with content readability. Clear spacing, content
        hierarchy, and thoughtful placement all help maintain a good user experience.
      </p>
      <p>
        Image reliability is another important factor. Broken images can make a recipe site feel unfinished or low quality.
        This template uses a fallback handler so if a photo does not load, a placeholder appears instead. That keeps the
        design intact and prevents empty spaces from harming the page layout. You can later replace sample images with your
        own optimized photos for faster loading and better branding.
      </p>
      <p>
        Over time, you can expand this homepage into a full content hub. Add categories like breakfast, lunch, dinner,
        appetizers, desserts, snacks, vegetarian meals, and holiday dishes. You can also include recipe details such as
        prep time, cook time, servings, ingredients, step-by-step directions, and serving tips. A well-organized recipe
        site can build strong organic traffic because people constantly search for meal ideas and practical kitchen help.
      </p>
      <p>
        This template is meant to be a strong starting point. It combines attractive styling with a content strategy that
        is friendly for visitors and search engines. If you continue publishing helpful, original, and relevant recipe
        content, this structure can support long-term growth and a strong brand identity in the food niche.
      </p>
    </div>
  </section>

  <section class="section" id="recipes">
    <div class="container">
      <h2 class="section-title">Featured Recipes</h2>
      <p class="muted">Use these cards to display your latest or most popular recipe posts.</p>
      <div class="grid">
        <?php
        $featured = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3
        ));
        if ($featured->have_posts()) :
          while ($featured->have_posts()) : $featured->the_post(); ?>
            <article class="card">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large'); ?>
                <?php else : ?>
                  <img src="https://via.placeholder.com/1200x800?text=Recipe+Image" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
              </a>
              <div class="card-content">
                <span class="badge">Recipe</span>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
              </div>
            </article>
          <?php endwhile;
          wp_reset_postdata();
        else : ?>
          <p>No recipes found yet. Publish your first recipe post to display it here.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>