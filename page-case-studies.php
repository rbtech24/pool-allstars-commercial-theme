<?php get_header(); ?>
<?php pasc_breadcrumbs( array( array( 'label' => 'Case studies' ) ) ); ?>

<section class="page-hero">
  <div class="wrap">
    <span class="eyebrow">Case studies</span>
    <h1>Real Florida properties. <span class="red">Real outcomes.</span></h1>
    <p>Anonymized portfolio wins from the past 24 months. Specific scope, specific results, no names where the customer wanted privacy.</p>
  </div>
</section>

<section class="block">
  <div class="wrap">
    <div class="related-grid" style="grid-template-columns:1fr;max-width:1080px;margin:0 auto">

      <div class="related-card" style="text-align:left;padding:2.5rem 2rem">
        <span class="eyebrow" style="color:var(--red);margin-bottom:0.85rem;display:inline-block">Hospitality · 8-property portfolio</span>
        <h4 style="font-size:1.4rem;margin-bottom:1rem">22% hard-cost reduction across an 8-property hospitality group</h4>
        <p style="margin-bottom:1rem"><strong>The situation:</strong> A regional hospitality operator with 8 hotel and condo-hotel properties across Tampa Bay, Orlando, and South Florida was running 4 separate pool service vendors. Reporting was inconsistent, COIs expired without renewal, and equipment repair was being subcontracted at marked-up rates.</p>
        <p style="margin-bottom:1rem"><strong>What we did:</strong> Consolidated all 8 properties under one master contract with portfolio volume pricing. Single dedicated account manager. Consolidated monthly invoicing with per-property allocation. In-house repair techs eliminated subcontractor markup.</p>
        <p style="margin-bottom:1rem"><strong>Result:</strong> 22% reduction in total annual pool service spend. Account manager freed up an estimated 12 hours/month of accounting work (down from chasing 4 vendors). Zero COI lapses in 18 months.</p>
        <p style="font-size:0.9rem;color:var(--gray);font-style:italic">Industry: Hotel &amp; resort portfolios. Region: Multi-region (Tampa, Orlando, South FL).</p>
      </div>

      <div class="related-card" style="text-align:left;padding:2.5rem 2rem">
        <span class="eyebrow" style="color:var(--red);margin-bottom:0.85rem;display:inline-block">HOA · 600-unit condo association</span>
        <h4 style="font-size:1.4rem;margin-bottom:1rem">Three-pool resurface project delivered on a 28-day shutdown window</h4>
        <p style="margin-bottom:1rem"><strong>The situation:</strong> A 600-unit beachfront condominium association in Pinellas County had three amenity pools due for resurfacing as part of their 5-year reserve study. The board wanted to complete all three pools during a single off-peak shutdown to minimize resident disruption and avoid recurring vendor mobilization fees.</p>
        <p style="margin-bottom:1rem"><strong>What we did:</strong> Scoped the project as a sequenced resurface starting with the smallest pool (lap pool, 7 days), then the family pool (10 days), then the main pool (11 days). Coordinated with the reserve study consultant on plaster spec (NPT Quartzscape). Provided board-ready quote with fixed pricing and timeline guarantee.</p>
        <p style="margin-bottom:1rem"><strong>Result:</strong> All three pools resurfaced within the 28-day shutdown window. Project completed under reserve budget. Board approved as the next 5-year service contract — three years and counting.</p>
        <p style="font-size:0.9rem;color:var(--gray);font-style:italic">Industry: HOA / condo association. Region: Pinellas County, Tampa Bay.</p>
      </div>

      <div class="related-card" style="text-align:left;padding:2.5rem 2rem">
        <span class="eyebrow" style="color:var(--red);margin-bottom:0.85rem;display:inline-block">Fitness · YMCA aquatic facility</span>
        <h4 style="font-size:1.4rem;margin-bottom:1rem">Zero health-code citations across 24 months of unannounced inspections</h4>
        <p style="margin-bottom:1rem"><strong>The situation:</strong> A regional YMCA aquatic facility in Hillsborough County had received three citations in the prior year for combined chlorine readings and inadequate daily logs. The county health inspector was making unannounced visits roughly quarterly. Member complaints about "chlorine smell" and eye irritation were rising.</p>
        <p style="margin-bottom:1rem"><strong>What we did:</strong> Rebuilt chemistry from the baseline — reduced cyanuric acid from 95 ppm to 50 ppm via partial drain, recalibrated combined chlorine targets to under 0.3 ppm, set up twice-daily testing logs in the format the county inspector wanted to see. Trained YMCA's lifeguard staff on log entry. Instituted weekly chemistry summary email to facility director.</p>
        <p style="margin-bottom:1rem"><strong>Result:</strong> Zero citations across 24 months and four unannounced inspections. Member complaints about chlorine smell dropped to zero within 6 weeks. Aquatic Director: "Health inspector left happy, twice. That's a first."</p>
        <p style="font-size:0.9rem;color:var(--gray);font-style:italic">Industry: Fitness &amp; aquatic. Region: Hillsborough County, Tampa Bay.</p>
      </div>

    </div>
  </div>
</section>

<?php $pasc_cta_heading = 'Have a similar'; $pasc_cta_heading_red = 'situation?'; $pasc_cta_body = 'Send us the scope. We will quote a fixed-rate proposal with a project plan and timeline.'; get_template_part( 'template-parts/cta-final' ); ?>
<?php pasc_last_updated(); ?>
<?php get_footer(); ?>
