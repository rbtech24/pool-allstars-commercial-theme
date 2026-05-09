<?php get_header(); ?>
<?php pasc_breadcrumbs( array( array( 'label' => 'Contact' ) ) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Get in touch</span>
    <h1>Request a commercial <span class="red">pool service proposal.</span></h1>
    <p>Tell us about your property. We'll send a fixed-rate proposal, COI on file, and a transition plan within one business day.</p>
  </div>
</section>

<section class="contact-section">
  <div class="wrap">
    <div class="contact-grid">
      <form class="contact-form" id="proposalForm" method="post">
        <h2>Send us your scope</h2>
        <p class="lead">Or upload your current vendor's report and we'll match it line-for-line with our pricing.</p>

        <?php /* Honeypot — hidden from humans, bots fill it in */ ?>
        <div style="position:absolute;left:-9999px" aria-hidden="true">
          <label for="website">Website (leave empty)</label>
          <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="field-row">
          <div class="field"><label for="name">Your name</label><input id="name" type="text" name="name" required autocomplete="name"></div>
          <div class="field"><label for="company">Company / property name</label><input id="company" type="text" name="company" required autocomplete="organization"></div>
        </div>
        <div class="field-row">
          <div class="field"><label for="email">Email</label><input id="email" type="email" name="email" required autocomplete="email"></div>
          <div class="field"><label for="phone">Phone</label><input id="phone" type="tel" name="phone" required autocomplete="tel"></div>
        </div>
        <div class="field-row">
          <div class="field"><label for="propertytype">Property type</label><select id="propertytype" name="propertytype">
            <option>Hotel / resort</option><option>HOA / condo</option><option>Fitness / aquatic</option>
            <option>Multi-property portfolio</option><option>Municipal / school</option>
            <option>Vacation rental</option><option>Water park</option><option>Country club</option><option>Other</option>
          </select></div>
          <div class="field"><label for="numpools">Number of pools</label><select id="numpools" name="numpools">
            <option>1</option><option>2–5</option><option>6–10</option><option>11–25</option><option>25+</option>
          </select></div>
        </div>
        <div class="field"><label for="zip">Property ZIP code</label><input id="zip" type="text" name="zip" inputmode="numeric" pattern="[0-9]{5}" maxlength="5" required autocomplete="postal-code"></div>
        <div class="field"><label for="message">Tell us about your scope</label><textarea id="message" name="message" placeholder="Pool size, current vendor, any chemistry or compliance issues, RFP timeline..."></textarea></div>

        <div id="formStatus" role="status" aria-live="polite" style="display:none;padding:0.85rem 1rem;border-radius:10px;font-size:0.92rem;font-weight:500"></div>

        <button type="submit" class="btn btn-red" style="margin-top:0.5rem">Send proposal request</button>
      </form>

      <div class="contact-info">
        <div class="info-card">
          <span class="label">Phone · Mon–Sat 7am–7pm</span>
          <a href="tel:<?php echo esc_attr( pasc_phone_tel() ); ?>" class="value"><?php echo esc_html( pasc_phone_display() ); ?></a>
          <span class="meta">Talk to a real human. No call tree, no voicemail loop.</span>
        </div>
        <div class="info-card"><span class="label">Email</span><a href="mailto:commercial@poolallstars.com" class="value" style="font-size:1.05rem">commercial@poolallstars.com</a><span class="meta">For RFPs, scope documents, COI requests.</span></div>
        <div class="info-card"><span class="label">Response time</span><span class="value">&lt; 24 hours</span><span class="meta">Most proposals returned same day.</span></div>
        <div class="info-card"><span class="label">Service area</span><span class="value">All of Florida</span><span class="meta"><a href="<?php echo esc_url( home_url( '/service-area/' ) ); ?>" style="color:var(--red)">See all regions →</a></span></div>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  var f=document.getElementById('proposalForm');
  if(!f||typeof pascForm==='undefined')return;
  var status=document.getElementById('formStatus');
  function show(msg,ok){
    if(!status)return;
    status.textContent=msg;
    status.style.display='block';
    status.style.background=ok?'#ECFDF5':'#FEF2F2';
    status.style.color=ok?'#065F46':'#991B1B';
    status.style.border='1px solid '+(ok?'#A7F3D0':'#FECACA');
  }
  f.addEventListener('submit',function(e){
    e.preventDefault();
    var btn=f.querySelector('button[type="submit"]');
    var originalLabel=btn?btn.textContent:'';
    if(btn){btn.disabled=true;btn.textContent='Sending...';}
    if(status)status.style.display='none';

    var data=new FormData(f);
    data.append('action','pasc_proposal');
    data.append('pasc_nonce',pascForm.nonce);

    fetch(pascForm.ajaxUrl,{method:'POST',body:data,credentials:'same-origin'})
      .then(function(r){return r.json().then(function(j){return {ok:r.ok,body:j};});})
      .then(function(res){
        if(res.ok&&res.body&&res.body.success){
          f.innerHTML='<div style="text-align:center;padding:2rem 0"><div style="font-family:Inter Tight,sans-serif;font-weight:800;font-size:1.5rem;color:var(--ink);margin-bottom:0.85rem;letter-spacing:-0.025em">Thanks &mdash; your proposal request is in.</div><p style="color:var(--gray);font-size:0.98rem;line-height:1.5;margin-bottom:1rem">We&rsquo;ll review your scope and respond within one business day. For urgent requests, call <a href="tel:'+pascForm.phone.replace(/[^0-9]/g,'')+'" style="color:var(--red);font-weight:600;text-decoration:underline">'+pascForm.phone+'</a>.</p></div>';
        }else{
          var msg=(res.body&&res.body.data&&res.body.data.message)?res.body.data.message:'Sorry, something went wrong. Please call '+pascForm.phone+'.';
          show(msg,false);
          if(btn){btn.disabled=false;btn.textContent=originalLabel;}
        }
      })
      .catch(function(){
        show('Network error. Please call '+pascForm.phone+' or try again.',false);
        if(btn){btn.disabled=false;btn.textContent=originalLabel;}
      });
  });
})();
</script>

<?php get_footer(); ?>
