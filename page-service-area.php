<?php get_header(); ?>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ItemList","name":"Service Areas","url":"<?php echo esc_url( get_permalink() ); ?>","itemListElement":[
{"@type":"ListItem","position":1,"name":"Tampa Bay","url":"<?php echo esc_url( home_url( '/service-area/tampa-bay/' ) ); ?>"},
{"@type":"ListItem","position":2,"name":"Orlando","url":"<?php echo esc_url( home_url( '/service-area/orlando/' ) ); ?>"},
{"@type":"ListItem","position":3,"name":"South Florida","url":"<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>"},
{"@type":"ListItem","position":4,"name":"Jacksonville","url":"<?php echo esc_url( home_url( '/service-area/jacksonville/' ) ); ?>"},
{"@type":"ListItem","position":5,"name":"SW Florida","url":"<?php echo esc_url( home_url( '/service-area/sw-florida/' ) ); ?>"},
{"@type":"ListItem","position":6,"name":"Space Coast","url":"<?php echo esc_url( home_url( '/service-area/space-coast/' ) ); ?>"},
{"@type":"ListItem","position":7,"name":"Lakeland","url":"<?php echo esc_url( home_url( '/service-area/lakeland/' ) ); ?>"}]}
</script>
<?php pasc_breadcrumbs( array( array( 'label' => 'Service area' ) ) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Florida coverage</span>
    <h1>Servicing properties <span class="red">across Florida.</span></h1>
    <p>Tampa Bay, Orlando, Jacksonville, Sarasota, Naples, South Florida, the Space Coast — and everywhere in between.</p>
  </div>
</section>

<section class="map-section">
  <div class="wrap">
    <div class="map-frame"><div id="service-map" role="img" aria-label="Pool All-Stars Florida service area"></div></div>
  </div>
</section>

<section class="regions">
  <div class="wrap">
    <div class="section-head center"><span class="eyebrow">Regions we serve</span><h2>Pick your <span class="red">region.</span></h2></div>
    <div class="region-grid">
      <a class="region-card" href="<?php echo esc_url( home_url( '/service-area/tampa-bay/' ) ); ?>" style="text-decoration:none"><h3>Tampa Bay</h3><p class="meta">Hillsborough · Pinellas · Pasco · Hernando · Manatee · Sarasota counties.</p><div class="cities"><span class="city-chip">Tampa</span><span class="city-chip">St. Petersburg</span><span class="city-chip">Clearwater</span><span class="city-chip">Sarasota</span><span class="city-chip">Bradenton</span></div></a>
      <a class="region-card" href="<?php echo esc_url( home_url( '/service-area/orlando/' ) ); ?>" style="text-decoration:none"><h3>Orlando &amp; Central FL</h3><p class="meta">Orange · Osceola · Seminole · Lake counties + Disney area.</p><div class="cities"><span class="city-chip">Orlando</span><span class="city-chip">Kissimmee</span><span class="city-chip">Lake Buena Vista</span><span class="city-chip">Winter Park</span></div></a>
      <a class="region-card" href="<?php echo esc_url( home_url( '/service-area/south-florida/' ) ); ?>" style="text-decoration:none"><h3>South Florida</h3><p class="meta">Miami-Dade · Broward · Palm Beach. High-rise condos &amp; resorts.</p><div class="cities"><span class="city-chip">Miami</span><span class="city-chip">Fort Lauderdale</span><span class="city-chip">Boca Raton</span><span class="city-chip">West Palm</span></div></a>
      <a class="region-card" href="<?php echo esc_url( home_url( '/service-area/jacksonville/' ) ); ?>" style="text-decoration:none"><h3>Jacksonville &amp; NE FL</h3><p class="meta">Duval · St. Johns · Nassau counties.</p><div class="cities"><span class="city-chip">Jacksonville</span><span class="city-chip">St. Augustine</span><span class="city-chip">Ponte Vedra</span></div></a>
      <a class="region-card" href="<?php echo esc_url( home_url( '/service-area/sw-florida/' ) ); ?>" style="text-decoration:none"><h3>SW Florida</h3><p class="meta">Collier · Lee counties. Coastal communities.</p><div class="cities"><span class="city-chip">Naples</span><span class="city-chip">Fort Myers</span><span class="city-chip">Marco Island</span><span class="city-chip">Bonita Springs</span></div></a>
      <a class="region-card" href="<?php echo esc_url( home_url( '/service-area/space-coast/' ) ); ?>" style="text-decoration:none"><h3>Space Coast</h3><p class="meta">Brevard · Indian River counties.</p><div class="cities"><span class="city-chip">Melbourne</span><span class="city-chip">Cocoa</span><span class="city-chip">Vero Beach</span></div></a>
      <a class="region-card" href="<?php echo esc_url( home_url( '/service-area/lakeland/' ) ); ?>" style="text-decoration:none"><h3>Lakeland &amp; Polk</h3><p class="meta">Lakeland, Winter Haven, Davenport, I-4 corridor.</p><div class="cities"><span class="city-chip">Lakeland</span><span class="city-chip">Winter Haven</span><span class="city-chip">Davenport</span></div></a>
    </div>
  </div>
</section>

<?php $pasc_cta_heading = 'Property in Florida?'; $pasc_cta_heading_red = 'We can service it.'; $pasc_cta_body = "Send us your address and we'll confirm coverage same day."; get_template_part( 'template-parts/cta-final' ); ?>

<script>
(function(){
  if(!document.getElementById('service-map')||typeof L==='undefined')return;
  var m=L.map('service-map',{center:[27.85,-82.5],zoom:7,scrollWheelZoom:false});
  L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_nolabels/{z}/{x}/{y}{r}.png',{attribution:'&copy; OpenStreetMap, &copy; CARTO',subdomains:'abcd',maxZoom:19}).addTo(m);
  L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_only_labels/{z}/{x}/{y}{r}.png',{subdomains:'abcd',maxZoom:19,pane:'shadowPane'}).addTo(m);
  var c=[['Tampa',27.9506,-82.4572],['St. Petersburg',27.7676,-82.6403],['Clearwater',27.9659,-82.8001],['Sarasota',27.3364,-82.5307],['Bradenton',27.4989,-82.5748],['Orlando',28.5383,-81.3792],['Lakeland',28.0395,-81.9498],['Jacksonville',30.3322,-81.6557],['Naples',26.1420,-81.7948],['Fort Myers',26.6406,-81.8723],['Melbourne',28.0836,-80.6081],['Fort Lauderdale',26.1224,-80.1373],['Miami',25.7617,-80.1918]];
  var ic=L.divIcon({className:'service-marker-icon',html:'<div class="service-marker-dot"></div>',iconSize:[18,18],iconAnchor:[9,9]});
  c.forEach(function(x){L.marker([x[1],x[2]],{icon:ic}).addTo(m).bindTooltip(x[0],{permanent:false,direction:'top',offset:[0,-8],className:'city-tooltip'})});
  m.fitBounds(L.featureGroup(c.map(function(x){return L.marker([x[1],x[2]])})).getBounds().pad(0.18));
})();
</script>

<?php get_footer(); ?>
