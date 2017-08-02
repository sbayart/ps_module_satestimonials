
<h4>Les Témoignages</h4>
{foreach $testimonials as $testimonial}
    <ul>
        <li>
            <a href="{$testimonial.link}">
            {$testimonial.testimonials}
            {$testimonial.author}
            </a>
        </li>
    </ul>
{/foreach}
