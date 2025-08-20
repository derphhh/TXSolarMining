<?php /* Front page template for TSM Solar Landing */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
  <div class="container wrap">
    <div class="logo">Texas Solar Mining</div>
    <nav class="nav">
      <a href="#how">How it works</a>
      <a href="#rig">Your solar rig</a>
      <a href="#rewards">Rewards</a>
      <a href="#faq">FAQ</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container">
    <div class="kicker">Solar‑Powered Bitcoin</div>
    <h1>Clean Bitcoin. Texas Sun. <span style="color:var(--acc)">$199/day</span>.</h1>
    <p>Rent 5,600&nbsp;TH/s powered by 100% Texas solar—earn monthly BTC with zero net emissions. No hardware. No electric bill.</p>
    <div class="ctas">
      <a class="btn" href="<?php echo esc_url( home_url('/rent') ); ?>">Rent a Day – $199</a>
      <a class="btn secondary" href="#how">See How It Works</a>
    </div>
    <div class="badges">Powered by Texas Solar • Monthly BTC via BitPay • No hardware to manage</div>
  </div>
</section>

<section class="section">
  <div class="container grid cols-3">
    <div class="card">
      <div class="kicker">Why it matters</div>
      <h3 class="h2">Zero net emissions</h3>
      <p class="small">Your rental is isolated to solar output—no fossil electricity in the mix.</p>
    </div>
    <div class="card">
      <div class="kicker">Effortless</div>
      <h3 class="h2">Set‑and‑forget</h3>
      <p class="small">We run and maintain everything; you receive BTC distributions monthly.</p>
    </div>
    <div class="card">
      <div class="kicker">Transparent</div>
      <h3 class="h2">Real reporting</h3>
      <p class="small">Monthly summaries + live ops visibility as modules come online.</p>
    </div>
  </div>
</section>

<section id="how" class="section">
  <div class="container">
    <div class="kicker">How it works</div>
    <h2 class="h2">4 simple steps</h2>
    <div class="grid cols-3">
      <div class="card"><strong>1) Rent days</strong><br>Pick 1–1,825 days at <strong>$199/day</strong> via site / Prelaunch / Indiegogo.</div>
      <div class="card"><strong>2) Sign</strong><br>DocuSign rental + add your BitPay address.</div>
      <div class="card"><strong>3) Go live</strong><br>Target ~4 months for build‑out and activation.</div>
      <div class="card"><strong>4) Get paid</strong><br>BTC distributes monthly, pro‑rata by rented days.</div>
    </div>
    <div class="ctas" style="margin-top:18px">
      <a class="btn" href="<?php echo esc_url( home_url('/rent') ); ?>">Start for $199</a>
      <a class="btn secondary" href="#faq">Read FAQs</a>
    </div>
  </div>
</section>

<section id="rig" class="section">
  <div class="container">
    <div class="kicker">Your solar‑powered rig</div>
    <h2 class="h2">5,600 TH/s • 225 kW solar per module</h2>
    <ul>
      <li><strong>14× Bitmain Hydro S21</strong> (≈400 TH/s each) per rental</li>
      <li><strong>Dedicated solar</strong>—daytime fully solar; excess net‑metered; grid draw offset</li>
      <li><strong>Operations handled</strong> by Texas Solar Mining, LLC</li>
    </ul>
  </div>
</section>

<section id="rewards" class="section">
  <div class="container">
    <div class="kicker">Projected rewards</div>
    <h2 class="h2">Straight talk on yield</h2>
    <p class="small">
      Current network‑wide estimate: ~0.00000055 BTC/TH/day → ≈ <strong>0.00308 BTC/day</strong> at full capacity.<br>
      Output declines over time with difficulty/halvings. BTC price is volatile. No guarantees.
    </p>
  </div>
</section>

<section id="faq" class="section">
  <div class="container grid cols-3">
    <div class="card">
      <strong>Timeline</strong><br>~4 months to online; 5‑year rental term (up to 1,825 days).
    </div>
    <div class="card">
      <strong>Distributions</strong><br>Monthly via BitPay, proportional to rented days.
    </div>
    <div class="card">
      <strong>Risks</strong><br>Difficulty increases, halvings, BTC volatility, downtime, regulation.
    </div>
    <div class="card">
      <strong>Refunds</strong><br>No refunds after DocuSign execution.
    </div>
    <div class="card">
      <strong>Green claim</strong><br>Solar‑isolated operations; excess net‑metered to offset nighttime draw.
    </div>
    <div class="card">
      <strong>Questions?</strong><br><a href="<?php echo esc_url( home_url('/contact') ); ?>">Contact us</a>
    </div>
  </div>
</section>

<div class="stickybar">
  <div class="container row">
    <div>$199/day • Solar‑Powered BTC Mining</div>
    <a class="btn" href="<?php echo esc_url( home_url('/rent') ); ?>">Rent Now</a>
  </div>
</div>

<footer class="footer">
  <div class="container">© <?php echo date('Y'); ?> Texas Solar Mining, LLC • Bexar County, Texas</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
