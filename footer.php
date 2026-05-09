<?php
/**
 * Footer template (shared on every page)
 * @package PoolAllStarsCommercial
 */
?>
</main>

<footer>
  <div class="wrap">
    <div class="foot-brand">
      <span class="foot-logo-card"><img src="<?php echo esc_url( PASC_URI . '/assets/images/logo-horizontal.png' ); ?>" alt="<?php echo esc_attr( pasc_company_name() ); ?>"></span>
      <p>Commercial pool service for Florida property managers. Hotels, HOAs, condos, fitness, multi-property. Licensed, insured, CPO-certified.</p>
      <p><strong><?php echo esc_html( pasc_phone_display() ); ?></strong> · Mon–Sat 7am–7pm</p>
    </div>
    <div>
      <h5>Industries</h5>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/industries/hotels-resorts/' ) ); ?>">Hotels &amp; resorts</a></li>
        <li><a href="<?php echo esc_url( home_url( '/industries/hoas-condos/' ) ); ?>">HOAs &amp; condos</a></li>
        <li><a href="<?php echo esc_url( home_url( '/industries/fitness-aquatic/' ) ); ?>">Fitness &amp; aquatic</a></li>
        <li><a href="<?php echo esc_url( home_url( '/industries/multi-property/' ) ); ?>">Multi-property</a></li>
        <li><a href="<?php echo esc_url( home_url( '/industries/municipal-schools/' ) ); ?>">Municipal &amp; schools</a></li>
        <li><a href="<?php echo esc_url( home_url( '/industries/vacation-rentals/' ) ); ?>">Vacation rentals</a></li>
        <li><a href="<?php echo esc_url( home_url( '/industries/water-parks/' ) ); ?>">Water parks</a></li>
        <li><a href="<?php echo esc_url( home_url( '/industries/country-clubs/' ) ); ?>">Country clubs</a></li>
      </ul>
    </div>
    <div>
      <h5>Service area</h5>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/service-area/tampa-bay/' ) ); ?>">Tampa Bay</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service-area/orlando/' ) ); ?>">Orlando</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>">South Florida</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service-area/jacksonville/' ) ); ?>">Jacksonville</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service-area/sw-florida/' ) ); ?>">SW Florida</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service-area/space-coast/' ) ); ?>">Space Coast</a></li>
        <li><a href="<?php echo esc_url( home_url( '/service-area/lakeland/' ) ); ?>">Lakeland</a></li>
      </ul>
    </div>
    <div>
      <h5>Company</h5>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Pricing</a></li>
        <li><a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">Case studies</a></li>
        <li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
        <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a></li>
        <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a></li>
        <li><a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>">Accessibility</a></li>
      </ul>
    </div>
  </div>
  <div class="wrap foot-bottom">
    <div>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( pasc_company_name() ); ?>. All rights reserved.</div>
    <div>Licensed · Insured · CPO Certified · BBB A+</div>
  </div>
</footer>

<script>
(function(){
  var t=document.querySelector('.mobile-toggle'),m=document.getElementById('mobile-menu'),o=document.querySelector('.mobile-overlay'),c=document.querySelector('.mobile-close');
  if(!t||!m||!o)return;
  function open(){m.classList.add('open');o.classList.add('open');document.body.classList.add('menu-open');t.setAttribute('aria-expanded','true')}
  function close(){m.classList.remove('open');o.classList.remove('open');document.body.classList.remove('menu-open');t.setAttribute('aria-expanded','false')}
  t.addEventListener('click',open);if(c)c.addEventListener('click',close);o.addEventListener('click',close);
  m.querySelectorAll('a').forEach(function(a){a.addEventListener('click',close)});
  document.addEventListener('keydown',function(e){if(e.key==='Escape'&&m.classList.contains('open'))close()});
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
