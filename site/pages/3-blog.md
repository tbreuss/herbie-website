---
title: Blog
layout: blog.html
---

<div class="posts">
{% for item in site.posts.filterItems %}
    <section class="post">
        <header class="post-header">
            <h2 class="post-title">{{ link(item.route, item.title) }}</h2>
        </header>
        <div class="post-description">
            <p>{{ item.date|strftime("%e. %B %Y") }} - {{ item.excerpt }}</p>
        </div>
    </section>
{% endfor %}
</div>
