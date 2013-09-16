<?php $pn = "CSS"; ?>
<?php include('temps/header.php'); ?>

    <!-- Docs page layout -->
    <div class="bs-header">
      <div class="container">
        <h1>CSS</h1>
        <p>Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</p>
    </div>
    </div>
    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-lg-3">
          <div class="bs-sidebar">
            <ul class="nav bs-sidenav">
                <li>
  <a href="#overview">Overview</a>
  <ul class="nav">
    <li><a href="#overview-doctype">HTML5 doctype</a></li>
    <li><a href="#overview-mobile">Mobile first</a></li>
    <li><a href="#overview-responsive-images">Responsive images</a></li>
    <li><a href="#overview-type-links">Type and links</a></li>
    <li><a href="#overview-normalize">Normalize</a></li>
    <li><a href="#overview-container">Container</a></li>
  </ul>
</li>
<!-- <li>
  <a href="#glyphicons">Glyphicons</a>
</li> -->
<li>
  <a href="#print-styles">Print styles</a>
</li>
<li>
  <a href="#grid">Grid system</a>
  <ul class="nav">
    <li><a href="#grid-options">Available options</a></li>
    <li><a href="#grid-example-basic">Ex: Stacked-to-horizonal</a></li>
    <li><a href="#grid-example-mixed">Ex: Mobile-desktop</a></li>
    <li><a href="#grid-example-mixed-complete">Ex: Mobile, tablet, desktop</a></li>
    <li><a href="#grid-offsetting">Offset columns</a></li>
    <li><a href="#grid-nesting">Nested columns</a></li>
    <li><a href="#grid-column-ordering">Column ordering</a></li>
    <li><a href="#grid-less">LESS mixins and variables</a></li>
  </ul>
</li>
<li>
  <a href="#type">Typography</a>
  <ul class="nav">
    <li><a href="#type-headings">Headings</a></li>
    <li><a href="#type-body-copy">Body copy</a></li>
    <li><a href="#type-emphasis">Emphasis</a></li>
    <li><a href="#type-abbreviations">Abbreviations</a></li>
    <li><a href="#type-addresses">Addresses</a></li>
    <li><a href="#type-blockquotes">Blockquotes</a></li>
    <li><a href="#type-lists">Lists</a></li>
  </ul>
</li>
<li><a href="#code">Code</a>
  <ul class="nav">
     <li><a href="#keystrokes">Keystrokes</a></li>
  </ul>
</li>
<li>
  <a href="#tables">Tables</a>
  <ul class="nav">
    <li><a href="#tables-example">Basic example</a></li>
    <li><a href="#tables-striped">Zebra striping</a></li>
    <li><a href="#tables-bordered">Bordered tables</a></li>
    <li><a href="#tables-hover-rows">Hover rows</a></li>
    <li><a href="#tables-condensed">Condensed tables</a></li>
    <li><a href="#tables-row-classes">Contextual row classes</a></li>
  </ul>
</li>
<li>
  <a href="#forms">Forms</a>
  <ul class="nav">
    <li><a href="#forms-example">Basic example</a></li>
    <li><a href="#forms-inline">Inline variation</a></li>
    <li><a href="#forms-horizontal">Horizontal variation</a></li>
    <li><a href="#forms-controls">Supported controls</a></li>
    <li><a href="#forms-control-states">Control states</a></li>
    <li><a href="#forms-control-sizes">Control sizing</a></li>
    <li><a href="#forms-help-text">Help text</a></li>
  </ul>
</li>
<li>
  <a href="#buttons">Buttons</a>
  <ul class="nav">
    <li><a href="#buttons-options">Button options</a></li>
    <li><a href="#buttons-sizes">Sizes</a></li>
    <li><a href="#buttons-disabled">Disabled</a></li>
    <li><a href="#buttons-tags">Button tags</a></li>
  </ul>
</li>
<li><a href="#images">Images</a></li>
<li><a href="#helper-classes">Helper classes</a></li>
<li><a href="#responsive-utilities">Responsive utilities</a></li>

              
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
            <!-- Global Bootdation settings
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="overview">Overview</h1>
    </div>
    <p class="lead">Get the lowdown on the key pieces of Bootdation's infrastructure, including our approach to better, faster, stronger web development.</p>

    <h3 id="overview-doctype">HTML5 doctype required</h3>
    <p>Bootdation makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.</p>
<div class="highlight"><pre><code class="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">&quot;en&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/html&gt;</span>
</code></pre></div>

    <h3 id="overview-mobile">Mobile first</h3>
    <p>Instead of adding on optional mobile styles, they're baked right into the core. In fact, <strong>Bootdation is mobile first</strong>. Mobile first styles can be found throughout the entire library instead of in separate files.</p>
    <p>To ensure proper rendering and touch zooming, <strong>add the viewport meta tag</strong> to your <code>&lt;head&gt;</code>.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;viewport&quot;</span> <span class="na">content=</span><span class="s">&quot;width=device-width, initial-scale=1.0&quot;</span><span class="nt">&gt;</span>
</code></pre></div>

    <!-- <h3 id="overview-responsive-images">Responsive images</h3>
    <p>Images in Bootdation are responsive by default. an be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span> <span class="na">class=</span><span class="s">&quot;img-responsive&quot;</span> <span class="na">alt=</span><span class="s">&quot;Reponsive image&quot;</span><span class="nt">&gt;</span>
</code></pre></div> -->

    <h3 id="overview-type-links">Typography and links</h3>
    <p>Bootdation sets basic global display, typography, and link styles. Specifically, we:</p>
    <ul class="list">
      <li>Remove <code>margin</code> on the body</li>
      <li>Set <code>background-color: transparent;</code> on the <code>body</code></li>
      <li>Use the <code>@fontFamily</code>, <code>@fontSize</code>, and <code>@lineHeight</code> attributes as our typographic base</li>
      <li>Set the global link color via <code>@linkColor</code> and apply link underlines only on <code>:hover</code></li>
    </ul>
    <p>These styles can be found within <code>scaffolding.less</code>.</p>

    <h3 id="overview-normalize">Normalize reset</h3>
    <p>For improved cross-browser rendering, we use <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>. Unlike Bootstrap, however, Normailze is not presented as a single LESS file within the framework but rather is chopped up and distributed within the relevant LESS files. For example, Normalize's resets pertaining to form elements appear in <code>forms.less</code>, not in <code>reset.less</code>.</p>
	<p>This is admittedly a something of a maintenance headache when updates occur, but we do this to help ensure the the code base contains no more code that is required. So, if you should not need the <code>forms.less</code> file, you will not have unneccessary reset code will in your final stylesheet.</p>
    <h3 id="overview-container">Centering with container</h3>
    <p>Easily center a page's contents by wrapping its contents in a <code>.container</code>. Containers set <code>max-width</code> at various media query breakpoints to match our grid system.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;container&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
  </div>



  <!-- Glyphicons icon font
  ================================================== -->
  <!-- <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="glyphicons">Glyphicons</h1>
    </div>
    <p class="lead">With the launch of Bootdation 3, icons have been moved to a <a href="https://github.com/twbs/bootstrap-glyphicons">separate repository</a>. This keeps the primary project as lean as possible, makes it easier for folks to swap icon libraries, and makes Glyphicons icon fonts more readily available to more people outside Bootdation.</p>
    <p class="lead">
      <a href="http://glyphicons.getbootstrap.com/" class="btn default btn-large">Visit Glyphicons for Bootdation</a> or <a href="https://github.com/twbs/bootstrap-glyphicons">download from GitHub</a>
    </p>
  </div> -->

  <!-- Print styles
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="print-styles">Print styles</h1>
    </div>
    <p class="lead">Bootdation includes print styles developed by <a href="http://html5boilerplate.com/" target="_blank">HTML5 Boilerplate</a> to give you some basic print-specific styles.</p>
    <h3 id="overview-type-links">What print styles do</h3>
    <p>Print styles are activated when you print through a media query. They include:</p>
    <ul class="list">
    <li>Clearing out backgrounds, box shadows, and text shadows</li>
    <li>Appending link URLs after the anchor text</li>
    <li>Bordering blockquotes and pre elements</li>
    <li>Page cleanup and window minimization</li>
    </ul>
    <p>On top of that, Bootdation includes a couple of simple classes you can use to control elements printing, or not printing. Simply attach <code>.visible-print</code> to an element to only show when printing, and <code>.invisible-print</code> to hide something when printing.</p>
  </div>

  <!-- Grid system
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="grid">Grid system</h1>
    </div>
    <p class="lead">Bootdation includes a responsive, mobile-first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href="#grid-example-basic">predefined classes</a> for easy layout options, as well as powerful <a href="#grid-less">mixins for generating more semantic layouts</a>.</p>

    <h3 id="grid-options">Grid options</h3>
    <p>See how aspects of the Bootdation grid system work across multiple devices with a handy table.</p>
    <div class="bs-table-scrollable">
      <table class="table bordered striped bs-table">
        <thead>
          <tr>
            <th></th>
            <th>
              Tiny devices
              <small>Phones (&lt;768px)</small>
            </th>
            <th>
              Small devices
              <small>Tablets (&gt;768px)</small>
            </th>
            <th>
              Medium devices
              <small>Desktops (&gt;992px)</small>
            </th>
            <th>
              Large devices
              <small>Desktops (&gt;1200px)</small>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Grid behavior</th>
            <td>Horizontal at all times</td>
            <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
          </tr>
          <tr>
            <th>Max container width</th>
            <td>None (auto)</td>
            <td>728px</td>
            <td>940px</td>
            <td>1170px</td>
          </tr>
          <tr>
            <th>Class prefix</th>
            <td><code>.col-</code></td>
            <td><code>.col-sm-</code></td>
            <td colspan="2"><code>.col-lg-</code></td>
          </tr>
          <tr>
            <th># of columns</th>
            <td colspan="4">12</td>
          </tr>
          <tr>
            <th>Max column width</th>
            <td>Auto</td>
            <td>~60px</td>
            <td>~78px</td>
            <td>~98px</td>
          </tr>
          <tr>
            <th>Gutter width</th>
            <td colspan="4">30px (15px on each side of a column)</td>
          </tr>
          <tr>
            <th>Nestable</th>
            <td colspan="4">Yes</td>
          </tr>
          <tr>
            <th>Offsets</th>
            <td colspan="2" class="text-muted">N/A</td>
            <td colspan="2">Yes</td>
          </tr>
          <tr>
            <th>Column ordering</th>
            <td class="text-muted">N/A</td>
            <td colspan="3">Yes</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h3 id="grid-example-basic">Example: Stacked-to-horizontal</h3>
    <p>Using a single set of grid classes, you can create a basic grid system that starts out stacked on mobile and tablet devices before becoming horizontal on desktop devices.</p>
    <div class="bs-docs-grid">
      <div class="row show-grid">
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
        <div class="col-lg-1">1</div>
      </div>
      <div class="row show-grid">
        <div class="col-lg-8">8</div>
        <div class="col-lg-4">4</div>
      </div>
      <div class="row show-grid">
        <div class="col-lg-4">4</div>
        <div class="col-lg-4">4</div>
        <div class="col-lg-4">4</div>
      </div>
      <div class="row show-grid">
        <div class="col-lg-6">6</div>
        <div class="col-lg-6">6</div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-1&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-8&quot;</span><span class="nt">&gt;</span>8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="grid-example-mixed">Example: Combining mobile with desktop</h3>
    <p>Don't want your columns to simply stack in smaller devices? Use the small device grid system by adding <code>.col-*</code> classes to the existing <code>.col-lg-*</code> ones. See the example below for a better idea of how it all works.</p>
    <div class="bs-docs-grid">
      <div class="row show-grid">
        <div class="col-12 col-lg-8">8</div>
        <div class="col-6 col-lg-4">4</div>
      </div>
      <div class="row show-grid">
        <div class="col-6 col-lg-4">4</div>
        <div class="col-6 col-lg-4">4</div>
        <div class="col-6 col-lg-4">4</div>
      </div>
      <div class="row show-grid">
        <div class="col-6 col-lg-6">6</div>
        <div class="col-6 col-lg-6">6</div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-12 col-lg-8&quot;</span><span class="nt">&gt;</span>8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-lg-4&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-lg-6&quot;</span><span class="nt">&gt;</span>6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-lg-6&quot;</span><span class="nt">&gt;</span>6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="grid-example-mixed-complete">Example: Mobile, tablet, and desktop</h3>
    <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
    <div class="bs-docs-grid">
      <div class="row show-grid">
        <div class="col-12 col-sm-8 col-lg-8">.col-12 .col-lg-8</div>
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
      </div>
      <div class="row show-grid">
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
        <div class="col-6 col-sm-4 col-lg-4">.col-6 .col-lg-4</div>
      </div>
      <div class="row show-grid">
        <div class="col-6 col-sm-6 col-lg-6">.col-6 .col-lg-6</div>
        <div class="col-6 col-sm-6 col-lg-6">.col-6 .col-lg-6</div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-12 col-sm-8 col-lg-8&quot;</span><span class="nt">&gt;</span>.col-12 .col-lg-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-sm-4 col-lg-4&quot;</span><span class="nt">&gt;</span>.col-6 .col-lg-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-sm-4 col-lg-4&quot;</span><span class="nt">&gt;</span>.col-6 .col-lg-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-sm-4 col-lg-4&quot;</span><span class="nt">&gt;</span>.col-6 .col-lg-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-sm-4 col-lg-4&quot;</span><span class="nt">&gt;</span>.col-6 .col-lg-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-sm-6 col-lg-6&quot;</span><span class="nt">&gt;</span>.col-6 .col-lg-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-6 col-sm-6 col-lg-6&quot;</span><span class="nt">&gt;</span>.col-6 .col-lg-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-danger">
      <h4>Need more examples?</h4>
      <p>We dive into more grid layouts in a separate page, free of chrome and documentation to better show you the power of the grid.</p>
      <p><a class="btn danger" target="_blank" href="http://examples.getbootstrap.com/grid/">More grid examples</a></p>
    </div>

    <h3 id="grid-offsetting">Offsetting columns</h3>
    <p>Move columns to the right using <code>.col-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-offset-4</code> moves <code>.col-lg-4</code> over four columns.</p>
    <div class="bs-docs-grid">
      <div class="row show-grid">
        <div class="col-lg-4">4</div>
        <div class="col-lg-4 col-offset-4">4 offset 4</div>
      </div><!-- /row -->
      <div class="row show-grid">
        <div class="col-lg-3 col-offset-3">3 offset 3</div>
        <div class="col-lg-3 col-offset-3">3 offset 3</div>
      </div><!-- /row -->
      <div class="row show-grid">
        <div class="col-lg-6 col-offset-3">6 offset 3</div>
      </div><!-- /row -->
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-4&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-4 col-offset-4&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-3 col-offset-3&quot;</span><span class="nt">&gt;</span>3 offset 3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-3 col-offset-3&quot;</span><span class="nt">&gt;</span>3 offset 3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6 col-offset-3&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>


    <h3 id="grid-nesting">Nesting columns</h3>
    <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-lg-*</code> columns within an existing <code>.col-lg-*</code> column. Nested rows should include a set of columns that add up to 12.</p>
    <div class="row show-grid">
      <div class="col-lg-9">
        Level 1: 9 columns
        <div class="row show-grid">
          <div class="col-lg-6">
            Level 2: 6 columns
          </div>
          <div class="col-lg-6">
            Level 2: 6 columns
          </div>
        </div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-9&quot;</span><span class="nt">&gt;</span>
    Level 1: 9 columns
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
        Level 2: 6 columns
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
        Level 2: 6 columns
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="grid-column-ordering">Column ordering</h3>
    <p>Easily change the order of our built-in grid columns with <code>.col-push-*</code> and <code>.col-pull-*</code> modifier classes.</p>
    <div class="row show-grid">
      <div class="col-lg-9 col-push-3">9</div>
      <div class="col-lg-3 col-pull-9">3</div>
    </div>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-9 col-push-3&quot;</span><span class="nt">&gt;</span>9<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-3 col-pull-9&quot;</span><span class="nt">&gt;</span>3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="grid-less">LESS mixins and variables</h3>
    <p>In addition to <a href="#grid-example-basic">prebuilt grid classes</a> for fast layouts, Bootdation includes LESS variables and mixins for quickly generating your own simple, semantic layouts.</p>

    <h4>Variables</h4>
    <p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
<div class="highlight"><pre><code class="css"><span class="k">@gridColumns</span><span class="o">:</span>              <span class="nt">12</span><span class="p">;</span>
<span class="k">@gridGutterWidth</span><span class="o">:</span>         <span class="nt">30px</span><span class="p">;</span>
<span class="k">@gridFloatBreakpoint</span><span class="o">:</span>     <span class="nt">768px</span><span class="p">;</span>
</code></pre></div>

    <h4>Mixins</h4>
    <p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>
<div class="highlight"><pre><code class="css"><span class="o">//</span> <span class="nt">Creates</span> <span class="nt">a</span> <span class="nt">wrapper</span> <span class="nt">for</span> <span class="nt">a</span> <span class="nt">series</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nc">.make-row</span><span class="o">()</span> <span class="p">{</span>
  <span class="o">//</span> <span class="n">Negative</span> <span class="k">margin</span> <span class="n">the</span> <span class="n">row</span> <span class="n">out</span> <span class="n">to</span> <span class="n">align</span> <span class="n">the</span> <span class="k">content</span> <span class="n">of</span> <span class="n">columns</span>
  <span class="k">margin-left</span><span class="o">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gridGutterWidth</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="k">margin-right</span><span class="o">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gridGutterWidth</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="o">//</span> <span class="n">Then</span> <span class="k">clear</span> <span class="n">the</span> <span class="n">floated</span> <span class="n">columns</span>
  <span class="o">.</span><span class="n">clearfix</span><span class="p">();</span>
<span class="p">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">columns</span>
<span class="nc">.make-column</span><span class="o">(</span><span class="k">@columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="o">:</span> <span class="k">@gridFloatBreakpoint</span><span class="o">)</span> <span class="p">{</span>
    <span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
    <span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span> <span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span> <span class="nt">available</span>
    <span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span class="o">(</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@gridColumns</span><span class="o">)</span><span class="p">;</span>
  <span class="err">}</span>
  <span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span> <span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
  <span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span class="p">;</span>
  <span class="o">//</span> <span class="nt">Set</span> <span class="nt">inner</span> <span class="nt">padding</span> <span class="nt">as</span> <span class="nt">gutters</span> <span class="nt">instead</span> <span class="nt">of</span> <span class="nt">margin</span>
  <span class="nt">padding-left</span><span class="o">:</span>  <span class="o">(</span><span class="k">@gridGutterWidth</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>
  <span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gridGutterWidth</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">column</span> <span class="nt">offsets</span>
<span class="nc">.make-column-offset</span><span class="o">(</span><span class="k">@columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="o">:</span> <span class="k">@gridFloatBreakpoint</span><span class="o">)</span> <span class="p">{</span>
    <span class="nt">margin-left</span><span class="o">:</span> <span class="nt">percentage</span><span class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@gridColumns</span><span class="o">))</span><span class="p">;</span>
  <span class="err">}</span>
<span class="err">}</span>
</code></pre></div>

    <h4>Example usage</h4>
    <p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an example of using the default settings to create a two-column layout with a gap between.</p>
<div class="highlight"><pre><code class="css"><span class="nc">.wrapper</span> <span class="p">{</span>
  <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">row</span><span class="p">();</span>
<span class="p">}</span>
<span class="nc">.content-main</span> <span class="p">{</span>
  <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">column</span><span class="p">(</span><span class="m">8</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.content-secondary</span> <span class="p">{</span>
  <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">column</span><span class="p">(</span><span class="m">3</span><span class="p">);</span>
  <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">column</span><span class="o">-</span><span class="n">offset</span><span class="p">(</span><span class="m">1</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;wrapper&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;content-main&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;content-secondary&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

  </div>




  <!-- Typography
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="type">Typography</h1>
    </div>

    <!-- Headings -->
    <h2 id="type-headings">Headings</h2>
    <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>

    <div class="bs-example bs-example-type">
      <table class="table">
        <tbody>
          <tr>
            <th><h1>Bootdation heading</h1></th>
            <td>Semibold 44px/4.4rem</td>
          </tr>
          <tr>
            <th><h2>Bootdation heading</h2></th>
            <td>Semibold 37px/3.7rem</td>
          </tr>
          <tr>
            <th><h3>Bootdation heading</h3></th>
            <td>Semibold 27px/2.7rem</td>
          </tr>
          <tr>
            <th><h4>Bootdation heading</h4></th>
            <td>Semibold 23px/2.3rem</td>
          </tr>
          <tr>
            <th><h5>Bootdation heading</h5></th>
            <td>Semibold 17px/1.7rem</td>
          </tr>
          <tr>
            <th><h6>Bootdation heading</h6></th>
            <td>Semibold 14px/1.4rem</td>
          </tr>
        </tbody>
      </table>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;h1&gt;</span>...<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>...<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>...<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>...<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>...<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>...<span class="nt">&lt;/h6&gt;</span>
</code></pre>
    <h2 id="type-headings">Subheaders</h2>
    <p>Add <code><span class="s">&quot;.subhead&quot;</span></code> to any heading tag.</p>

    <div class="bs-example bs-example-type">
      <table class="table">
        <tbody>
          <tr>
            <th><h1 class="subhead">h1.subhead</h1></th>
          </tr>
          <tr>
            <th><h2 class="subhead">h2.subhead</h2></th>
          </tr>
          <tr>
            <th><h3 class="subhead">h3.subhead</h3></th>
          </tr>
          <tr>
            <th><h4 class="subhead">h4.subhead</h4></th>
          </tr>
          <tr>
            <th><h5 class="subhead">h5.subhead</h5></th>
          </tr>
          <tr>
            <th><h6 class="subhead">h6.subhead</h6></th>
          </tr>
        </tbody>
      </table>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;subhead&quot;</span><span class="nt">&gt;...<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">&quot;subhead&quot;</span><span class="nt">&gt;...<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;subhead&quot;</span><span class="nt">&gt;...<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">&quot;subhead&quot;</span><span class="nt">&gt;...<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">&quot;subhead&quot;</span><span class="nt">&gt;...<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">&quot;subhead&quot;</span><span class="nt">&gt;...<span class="nt">&lt;/h6&gt;</span>
</code></pre></div>

    <!-- Body copy -->
    <h2 id="type-body-copy">Body copy</h2>
      <p>Bootdation's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>22.652px</strong>, roughly equivalent to a 1.618 ratio; what is known as the <strong>golden measure</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their line-height (~11.3px by default).</p>
    <div class="bs-example">
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
      <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre></div>

    <!-- Body copy .lead -->
    <h3>Lead body copy</h3>
    <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
    <div class="bs-example">
      <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;lead&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre></div>

    <!-- Using LESS -->
    <h3>Built with Less</h3>
    <p>The typographic scale is based on two LESS variables in <strong>variables.less</strong>: <code>@fontSize</code> and <code>@lineHeight</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootdation adapts.</p>


    <!-- Emphasis -->
    <h2 id="type-emphasis">Emphasis</h2>
    <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

    <h3>Small text</h3>
    <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
    <div class="bs-example">
      <p><small>This line of text is meant to be treated as fine print.</small></p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span>
</code></pre></div>


    <h3>Bold</h3>
    <p>For emphasizing a snippet of text with a heavier font-weight.</p>
    <div class="bs-example">
      <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span>
</code></pre></div>

    <h3>Italics</h3>
    <p>For emphasizing a snippet of text with italics.</p>
    <div class="bs-example">
      <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-info">
      <h4>Alternate elements</h4>
      <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
    </div>

    <h3>Alignment classes</h3>
    <p>Easily realign text to components with text alignment classes.</p>
    <div class="bs-example">
      <p class="text-left">Left aligned text.</p>
      <p class="text-center">Center aligned text.</p>
      <p class="text-right">Right aligned text.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-left&quot;</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-center&quot;</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-right&quot;</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
</code></pre></div>

    <h3>Emphasis classes</h3>
    <p>Convey meaning through color with a handful of emphasis utility classes.</p>
    <div class="bs-example">
      <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
      <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
      <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
      <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
      <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-muted&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-primary&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-warning&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-danger&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-success&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-info&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre></div>


    <!-- Abbreviations -->
    <h2 id="type-abbreviations">Abbreviations</h2>
    <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

    <h3>Basic abbreviation</h3>
    <p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute with the <code>&lt;abbr&gt;</code> element.</p>
    <div class="bs-example">
      <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">&quot;attribute&quot;</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span>
</code></pre></div>

    <h3>Initialism</h3>
    <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
    <div class="bs-example">
      <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">&quot;HyperText Markup Language&quot;</span> <span class="na">class=</span><span class="s">&quot;initialism&quot;</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span>
</code></pre></div>


    <!-- Addresses -->
    <h2 id="type-addresses">Addresses</h2>
    <p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
    <div class="bs-example">
      <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@example.com</a>
      </address>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">&quot;Phone&quot;</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>

<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;mailto:#&quot;</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span>
</code></pre></div>


    <!-- Blockquotes -->
    <h2 id="type-blockquotes">Blockquotes</h2>
    <p>For quoting blocks of content from another source within your document.</p>

    <h3>Default blockquote</h3>
    <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
    <div class="bs-example">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      </blockquote>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre></div>

    <h3>Blockquote options</h3>
    <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

    <h4>Naming a source</h4>
    <p>Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
    <div class="bs-example">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
      </blockquote>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;small&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">&quot;Source Title&quot;</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/small&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre></div>

    <h4>Alternate displays</h4>
    <p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>
    <div class="bs-example" style="overflow: hidden;">
      <blockquote class="pull-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
      </blockquote>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">&quot;pull-right&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre></div>


    <!-- Lists -->
    <h2 id="type-lists">Lists</h2>
    <h3>Unstyled by default</h3>
    <p>Why? Because our experience is that the instances where <code>&lt;ul&gt;</code> is used as an actual list is the exception. More commonly, we will find these in navigation items. Therefore <code>&lt;ul&gt;</code> is unstyled by default.</p>
    <div class="bs-example">
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
<h3>Unordered</h3>
<p>A list of items in which the order does <em>not</em> explicitly matter. Add <code>.list</code> to a <code>&lt;ul&gt;</code> to create a list.</p>
<div class="bs-example">
  <ul class="list">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>Nulla volutpat aliquam velit
      <ul>
        <li>Phasellus iaculis neque</li>
        <li>Purus sodales ultricies</li>
        <li>Vestibulum laoreet porttitor sem</li>
        <li>Ac tristique libero volutpat at</li>
      </ul>
    </li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
  </ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul <span class="na">class=</span><span class="s">&quot;list&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre>
</div>
    <h3>Ordered</h3>
    <p>A list of items in which the order <em>does</em> explicitly matter. Since <code>&lt;ol&gt;</code> is almost always used for it's original purpose, these <em>are</em> styled as lists by default.</p>
    <div class="bs-example">
      <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ol>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ol<span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
</code></pre></div>

    <h3>Inline</h3>
    <p>Place all list items on a single line with <code>.list-inline</code> and some light padding.</p>
    <div class="bs-example">
      <ul class="list-inline">
        <li>Lorem ipsum</li>
        <li>Phasellus iaculis</li>
        <li>Nulla volutpat</li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-inline&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

<h3>Unordered Square &amp; Circle Lists</h3>
<div class="bs-example">
	<div class="clearfix" >
	<ul class="list-square col-4">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>Nulla volutpat aliquam velit
      <ul>
        <li>Phasellus iaculis neque</li>
        <li>Purus sodales ultricies</li>
        <li>Vestibulum laoreet porttitor sem</li>
        <li>Ac tristique libero volutpat at</li>
      </ul>
    </li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
  </ul>
<ul class="list-circle col-4">
  <li>Lorem ipsum dolor sit amet</li>
  <li>Consectetur adipiscing elit</li>
  <li>Integer molestie lorem at massa</li>
  <li>Facilisis in pretium nisl aliquet</li>
  <li>Nulla volutpat aliquam velit
    <ul>
      <li>Phasellus iaculis neque</li>
      <li>Purus sodales ultricies</li>
      <li>Vestibulum laoreet porttitor sem</li>
      <li>Ac tristique libero volutpat at</li>
    </ul>
  </li>
  <li>Faucibus porta lacus fringilla vel</li>
  <li>Aenean sit amet erat nunc</li>
  <li>Eget porttitor lorem</li>
</ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-square&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-circle&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div></div>

    <h3>Description</h3>
    <p>A list of terms with their associated descriptions.</p>
    <div class="bs-example">
      <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>

    <h4>Horizontal description</h4>
    <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side.</p>
    <div class="bs-example">
      <dl class="dl horizontal">
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        <dt>Felis euismod semper eget lacinia</dt>
        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
      </dl>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">&quot;dl horizontal&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-info">
      <h4>Auto-truncating</h4>
      <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
    </div>	
  </div>


  <!-- Code
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="code">Code</h1>
    </div>

    <h2>Inline</h2>
    <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
<div class="bs-example">
  For example, <code>&lt;section&gt;</code> should be wrapped as inline.
</div>
<div class="highlight"><pre><code class="html">For example, <span class="nt">&lt;code&gt;</span><span class="ni">&amp;lt;</span>section<span class="ni">&amp;gt;</span><span class="nt">&lt;/code&gt;</span> should be wrapped as inline.
</code></pre></div>

    <h2>Basic block</h2>
    <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
<div class="bs-example">
  <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;pre&gt;</span><span class="ni">&amp;lt;</span>p<span class="ni">&amp;gt;</span>Sample text here...<span class="ni">&amp;lt;</span>/p<span class="ni">&amp;gt;</span><span class="nt">&lt;/pre&gt;</span>
</code></pre></div>

    <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a y-axis scrollbar.</p>
	<h2 id="keystrokes">Keystrokes</h2>
	    <p>If you have keyboard affordances, you might need to explain them. To that end, there's a simple keystroke character affordance in Bootdation.</p>
	<div class="bs-example">
	  For example, to close your browser hit <kbd>Cmd</kbd> + <kbd>Q</kbd>. Don't actually do it. There are more docs to read.
	</div>
	<div class="highlight"><pre><code class="html">For example, to close your browser hit <span class="nt">&lt;kbd&gt;</span>Cmd<span class="nt">&lt;/kbd&gt;</span> + <span class="nt">&lt;kbd&gt;</span>Q<span class="nt">&lt;/kbd&gt;</span>. Don't actually do it. There are more docs to read.
	</code></pre></div>
  </div>



  <!-- Tables
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="tables">Tables</h1>
    </div>

    <h2 id="tables-example">Basic example</h2>
    <p>For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p>
    <div class="bs-example">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">&quot;table&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>


    <h2>Optional classes</h2>
    <p>Add any of the following classes to the <code>.table</code> base class.</p>

    <h3 id="tables-striped">Striped</h3>
    <p>Add <code>.striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
    <div class="bs-callout bs-callout-danger">
      <h4>Cross-browser compatibility</h4>
      <p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.</p>
    </div>
    <div class="bs-example">
      <table class="table striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">&quot;table striped&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>

    <h3 id="tables-bordered">Bordered</h3>
    <p>Add <code>.bordered</code> for borders on all sides of the table and cells.</p>
    <div class="bs-example">
      <table class="table bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootdation</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">&quot;table bordered&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>

    <h3 id="tables-hover-rows">Hover rows</h3>
    <p>Add <code>.hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
    <div class="bs-example">
      <table class="table hover">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">&quot;table hover&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>


    <h3 id="tables-condensed">Condensed</h3>
    <p>Add <code>.condensed</code> to make tables more compact by cutting cell padding in half.</p>
    <div class="bs-example">
      <table class="table condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">&quot;table condensed&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>



    <h2 id="tables-row-classes">Contextual table classes</h2>
    <p>Use contextual classes to color table rows or individual cells.</p>
    <div class="bs-table-scrollable">
      <table class="table table-bordered table-striped bs-table">
        <colgroup>
          <col class="col-lg-1">
          <col class="col-lg-7">
        </colgroup>
        <thead>
          <tr>
            <th>Class</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <code>.success</code>
            </td>
            <td>Indicates a successful or positive action</td>
          </tr>
          <tr>
            <td>
              <code>.danger</code>
            </td>
            <td>Indicates a dangerous or potentially negative action</td>
          </tr>
          <tr>
            <td>
              <code>.warning</code>
            </td>
            <td>Indicates a warning that might need attention</td>
          </tr>
          <tr>
            <td>
              <code>.active</code>
            </td>
            <td>Applies the hover color to a particular row or cell</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="bs-example">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <td>1</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="danger">
            <td>3</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="warning">
            <td>5</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="active">
            <td>7</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">&quot;success&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;td&gt;</span>1<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td&gt;</span>Column content<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td&gt;</span>Column content<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td&gt;</span>Column content<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span>
</code></pre></div>

  </div>



  <!-- Forms
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="forms">Forms</h1>
    </div>

    <h2 id="forms-example">Basic example</h2>
    <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
    <form class="bs-example">
      <fieldset>
        <legend>Legend</legend>
        <div class="form-group">
          <label for="exampleInputEmail">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
        <button type="submit" class="btn default">Submit</button>
      </fieldset>
    </form><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;fieldset&gt;</span>
    <span class="nt">&lt;legend&gt;</span>Legend<span class="nt">&lt;/legend&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">&quot;exampleInputEmail&quot;</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;exampleInputEmail&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Enter email&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">&quot;exampleInputPassword&quot;</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;password&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;exampleInputPassword&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Password&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">&quot;exampleInputFile&quot;</span><span class="nt">&gt;</span>File input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;file&quot;</span> <span class="na">id=</span><span class="s">&quot;exampleInputFile&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;help-block&quot;</span><span class="nt">&gt;</span>Example block-level help text here.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span> Check me out
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</code></pre></div>


    <h2>Optional layouts</h2>
    <p>Included with Bootdation are optional form layouts for common use cases.</p>

    <h3 id="forms-inline">Inline form</h3>
    <p>Add <code>.form-inline</code> for left-aligned and inline-block controls for a compact layout.</p>
    <div class="bs-callout bs-callout-danger">
      <h4>Requires custom widths</h4>
      <p>Inputs, selects, and textareas are 100% wide by default in Bootdation. To use the inline form, you'll have to set a width on the form controls used within.</p>
    </div>
    <form class="bs-example form-inline">
      <input type="text" class="form-control" placeholder="Email">
      <input type="password" class="form-control" placeholder="Password">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
      <button type="submit" class="btn default">Sign in</button>
    </form><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">&quot;form-inline&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Email&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;password&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Password&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span> Remember me
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</code></pre></div>

    <h3 id="forms-horizontal">Horizontal form</h3>
    <p>Use Bootdation's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form. Doing so changes <code>.form-group</code> to behave as grid rows, so no need for <code>.row</code>.</p>
    <form class="bs-example form-horizontal">
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn default">Sign in</button>
        </div>
      </div>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">&quot;form-horizontal&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">&quot;inputEmail&quot;</span> <span class="na">class=</span><span class="s">&quot;col-lg-2 control-label&quot;</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-10&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;inputEmail&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Email&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">&quot;inputPassword&quot;</span> <span class="na">class=</span><span class="s">&quot;col-lg-2 control-label&quot;</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-10&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;password&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;inputPassword&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Password&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span> Remember me
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</code></pre></div>


    <h2 id="forms-controls">Supported form controls</h2>
    <p>Examples of standard form controls supported in an example form layout.</p>

    <h3>Inputs</h3>
    <p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>
    <div class="bs-callout bs-callout-danger">
      <h4>Type declaration required</h4>
      <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
    </div>
    <form class="bs-example">
      <input type="text" class="form-control" placeholder="Text input">
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Text input&quot;</span><span class="nt">&gt;</span>
</code></pre></div>

    <h3>Textarea</h3>
    <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
    <form class="bs-example">
      <textarea class="form-control" rows="3"></textarea>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">rows=</span><span class="s">&quot;3&quot;</span><span class="nt">&gt;&lt;/textarea&gt;</span>
</code></pre></div>

    <h3>Checkboxes and radios</h3>
    <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
    <h4>Default (stacked)</h4>
    <form class="bs-example">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="">
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <br>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it&#39;s great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;radio&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">name=</span><span class="s">&quot;optionsRadios&quot;</span> <span class="na">id=</span><span class="s">&quot;optionsRadios1&quot;</span> <span class="na">value=</span><span class="s">&quot;option1&quot;</span> <span class="na">checked</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it&#39;s great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;radio&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">name=</span><span class="s">&quot;optionsRadios&quot;</span> <span class="na">id=</span><span class="s">&quot;optionsRadios2&quot;</span> <span class="na">value=</span><span class="s">&quot;option2&quot;</span><span class="nt">&gt;</span>
    Option two can be something else and selecting it will deselect option one
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h4>Inline checkboxes</h4>
    <p>Use <code>.checkbox-inline</code> or <code>.radio-inline</code> class to a series of checkboxes or radios for controls appear on the same line.</p>
    <form class="bs-example">
      <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
      </label>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;checkbox-inline&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">id=</span><span class="s">&quot;inlineCheckbox1&quot;</span> <span class="na">value=</span><span class="s">&quot;option1&quot;</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;checkbox-inline&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">id=</span><span class="s">&quot;inlineCheckbox2&quot;</span> <span class="na">value=</span><span class="s">&quot;option2&quot;</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;checkbox-inline&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">id=</span><span class="s">&quot;inlineCheckbox3&quot;</span> <span class="na">value=</span><span class="s">&quot;option3&quot;</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span>
</code></pre></div>

    <h3>Selects</h3>
    <p>Use the default option, or add <code>multiple</code> to show multiple options at once.</p>
    <form class="bs-example">
      <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <br>
      <select multiple class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>

<span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>
</code></pre></div>



    <h2 id="forms-control-states">Form control states</h2>
    <p>Provide feedback to users or visitors with basic feedback states on form controls and labels.</p>

    <h3 id="forms-input-focus">Input focus</h3>
    <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
    <form class="bs-example">
      <input class="form-control" id="focusedInput" type="text" value="This is focused...">
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;focusedInput&quot;</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">value=</span><span class="s">&quot;This is focused...&quot;</span><span class="nt">&gt;</span>
</code></pre></div>

    <h3 id="forms-disabled-inputs">Disabled inputs</h3>
    <p>Add the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.</p>
    <form class="bs-example">
      <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;disabledInput&quot;</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Disabled input here...&quot;</span> <span class="na">disabled</span><span class="nt">&gt;</span>
</code></pre></div>

    <h3 id="forms-disabled-fieldsets">Disabled fieldsets</h3>
    <p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the <code>&lt;fieldset&gt;</code> at once.</p>

    <div class="bs-callout bs-callout-warning">
      <h4>Link functionality of <code>&lt;a&gt;</code> not impacted</h4>
      <p>This class will only change the appearance of <code>&lt;a class="btn default"&gt;</code> buttons, not their functionality. Use custom JavaScript to disable links here.</p>
    </div>

    <div class="bs-callout bs-callout-danger">
      <h4>Cross-browser compatibility</h4>
      <p>While Bootdation will apply these styles in all browsers, Internet Explorer 9 and below don't actually support the <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
    </div>

    <form class="bs-example form-inline">
      <fieldset disabled>
        <input type="text" class="form-control" placeholder="Disabled input">
        <select class="form-control">
          <option>Disabled select</option>
        </select>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Can't check this
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">&quot;form-inline&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Disabled input&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span> Can&#39;t check this
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary&quot;</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</code></pre></div>

    <h3 id="forms-validation">Validation states</h3>
    <p>Bootdation includes validation styles for error, warning, and success states on from controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</li>

    <form class="bs-example">
      <div class="form-group has-warning">
        <label class="control-label" for="inputWarning">Input with warning</label>
        <input type="text" class="form-control" id="inputWarning">
      </div>
      <div class="form-group has-error">
        <label class="control-label" for="inputError">Input with error</label>
        <input type="text" class="form-control" id="inputError">
      </div>
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Input with success</label>
        <input type="text" class="form-control" id="inputSuccess">
      </div>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group has-warning&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;control-label&quot;</span> <span class="na">for=</span><span class="s">&quot;inputWarning&quot;</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;inputWarning&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group has-error&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;control-label&quot;</span> <span class="na">for=</span><span class="s">&quot;inputError&quot;</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;inputError&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;form-group has-success&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;control-label&quot;</span> <span class="na">for=</span><span class="s">&quot;inputSuccess&quot;</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">id=</span><span class="s">&quot;inputSuccess&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>


    <h2 id="forms-control-sizes">Control sizing</h2>
    <p>Set heights using classes like <code>.input-large</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>

    <h3>Height sizing</h3>
    <p>Create larger or smaller form controls that match button sizes.</p>
    <form class="bs-example bs-example-control-sizing">
      <div class="controls docs-input-sizes">
        <input class="form-control input-large" type="text" placeholder=".input-large">
        <input type="text" class="form-control" placeholder="Default input">
        <input class="form-control input-small" type="text" placeholder=".input-small">

        <select class="form-control input-large">
          <option value="">.input-large</option>
        </select>
        <select class="form-control">
          <option value="">Default select</option>
        </select>
        <select class="form-control input-small">
          <option value="">.input-small</option>
        </select>
      </div>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control input-large&quot;</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;.input-large&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Default input&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control input-small&quot;</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;.input-small&quot;</span><span class="nt">&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">&quot;form-control input-large&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">&quot;form-control input-small&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
</code></pre></div>

    <h3>Column sizing</h3>
    <p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
    <form class="bs-example" style="padding-bottom: 15px;">
      <div class="row">
        <div class="col-lg-2">
          <input type="text" class="form-control" placeholder=".col-lg-2">
        </div>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder=".col-lg-3">
        </div>
        <div class="col-lg-4">
          <input type="text" class="form-control" placeholder=".col-lg-4">
        </div>
      </div>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-2&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;.col-lg-2&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-3&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;.col-lg-3&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-4&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;.col-lg-4&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h2 id="forms-help-text">Help text</h2>
    <p>Block level help text for form controls.</p>
    <form class="bs-example">
      <input type="text" class="form-control">
      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;help-block&quot;</span><span class="nt">&gt;</span>A longer block of help text that breaks onto a new line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span>
</code></pre></div>

  </div>



  <!-- Buttons
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="buttons">Buttons</h1>
    </div>

    <h2 id="buttons-options">Button options</h2>
    <p>Use any of the available button classes to quickly create a styled button.</p>
    <div class="bs-example">
      <button type="button" class="btn default">Default</button>
      <button type="button" class="btn primary">Primary</button>
      <button type="button" class="btn success">Success</button>
      <button type="button" class="btn info">Info</button>
      <button type="button" class="btn warning">Warning</button>
      <button type="button" class="btn danger">Danger</button>
      <button type="button" class="btn link">Link</button>
    </div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Standard gray button with gradient --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary&quot;</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn success&quot;</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn info&quot;</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn warning&quot;</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn danger&quot;</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn link&quot;</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span>
</code></pre></div>

    <h2 id="buttons-sizes">Button sizes</h2>
    <p>Fancy larger or smaller buttons? Add <code>.large</code>, <code>.small</code> or <code>.mini</code> for additional sizes.</p>
    <div class="bs-example">
      <p>
        <button type="button" class="btn primary large">Large button</button>
        <button type="button" class="btn default large">Large button</button>
      </p>
      <p>
        <button type="button" class="btn primary">Default button</button>
        <button type="button" class="btn default">Default button</button>
      </p>
      <p>
        <button type="button" class="btn primary small">Small button</button>
        <button type="button" class="btn default small">Small button</button>
      </p>
      <p>
        <button type="button" class="btn primary mini">Mini button</button>
        <button type="button" class="btn default mini">Mini button</button>
      </p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary large&quot;</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default large&quot;</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary&quot;</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary small&quot;</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default small&quot;</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary mini&quot;</span><span class="nt">&gt;</span>Mini button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default mini&quot;</span><span class="nt">&gt;</span>Mini button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
</code></pre></div>

    <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
    <div class="bs-example">
      <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
        <button type="button" class="btn primary large block">Block level button</button>
        <button type="button" class="btn default large block">Block level button</button>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary large block&quot;</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default large block&quot;</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
</code></pre></div>
    <p>Want round or square buttons? Add <code>.round</code> or <code>.square</code> to any button.</p>
    <div class="bs-example">
        <button type="button" class="btn primary large round">Round large primary button</button>
        <button type="button" class="btn default square">Square default button</button>
        <button type="button" class="btn warning small round">Round small warning button</button>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary large round&quot;</span><span class="nt">&gt;</span>Round large primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default square&quot;</span><span class="nt">&gt;</span>Square default button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn warning small round&quot;</span><span class="nt">&gt;</span>Round small warning button<span class="nt">&lt;/button&gt;</span>
</code></pre></div>


    <h2 id="buttons-disabled">Disabled state</h2>
    <p>Make buttons look unclickable by fading them back 50%.</p>

    <h3>Button element</h3>
    <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
    <p class="bs-example">
      <button type="button" class="btn primary large" disabled="disabled">Primary button</button>
      <button type="button" class="btn default large" disabled="disabled">Button</button>
    </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn large primary&quot;</span> <span class="na">disabled=</span><span class="s">&quot;disabled&quot;</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default large&quot;</span> <span class="na">disabled=</span><span class="s">&quot;disabled&quot;</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-danger">
      <h4>Cross-browser compatibility</h4>
      <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and below will render text gray with a nasty text-shadow that we cannot fix.</p>
    </div>

    <h3>Anchor element</h3>
    <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
    <p class="bs-example">
      <a href="#" class="btn primary large disabled">Primary link</a>
      <a href="#" class="btn default large disabled">Link</a>
    </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary large disabled&quot;</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default large disabled&quot;</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
</code></pre></div>
    <p>
      We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required.
    </p>
    <div class="bs-callout bs-callout-warning">
      <h4>Link functionality not impacted</h4>
      <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
    </div>


    <h2 id="buttons-tags">Using multiple tags</h2>
    <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
    <form class="bs-example">
      <a class="btn default" href="#">Link</a>
      <button class="btn default" type="submit">Button</button>
      <input class="btn default" type="button" value="Input">
      <input class="btn default" type="submit" value="Submit">
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">value=</span><span class="s">&quot;Input&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">value=</span><span class="s">&quot;Submit&quot;</span><span class="nt">&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-warning">
      <h4>Cross-browser rendering</h4>
      <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
      <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a Firefox bug</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
    </div>

  </div>



  <!-- Images
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="images">Images</h1>
    </div>

    <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
    <div class="bs-callout bs-callout-danger">
      <h4>Cross-browser compatibility</h4>
      <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
    </div>
    <div class="bs-example bs-example-images">
      <img data-src="holder.js/140x140" class="img-rounded">
      <img data-src="holder.js/140x140" class="img-circle">
      <img data-src="holder.js/140x140" class="img-thumbnail">
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span> <span class="na">class=</span><span class="s">&quot;img-rounded&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span> <span class="na">class=</span><span class="s">&quot;img-circle&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span> <span class="na">class=</span><span class="s">&quot;img-thumbnail&quot;</span><span class="nt">&gt;</span>
</code></pre></div>

    <!-- <div class="bs-callout bs-callout-warning">
      <h4>Responsive images</h4>
      <p>Looking for how to make images more responsive? <a href="../css#overview-responsive-images">Check out the responsive images section</a> up top.</p>
    </div> -->

  </div>


  <!-- Helpers
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="helper-classes">Helper classes</h1>
    </div>

    <h3>Close icon</h3>
    <p>Use the generic close icon for dismissing content like modals and alerts.</p>
    <div class="bs-example">
      <p><button type="button" class="close">&times;</button></p>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;close&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
</code></pre></div>

    <h3>.pull-left</h3>
    <p>Float an element left</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;pull-left&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
<div class="highlight"><pre><code class="css"><span class="nc">.pull-left</span> <span class="p">{</span>
  <span class="k">float</span><span class="o">:</span> <span class="k">left</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div>

    <h3>.pull-right</h3>
    <p>Float an element right</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;pull-right&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
<div class="highlight"><pre><code class="css"><span class="nc">.pull-right</span> <span class="p">{</span>
  <span class="k">float</span><span class="o">:</span> <span class="k">right</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div>

    <h3>.clearfix</h3>
    <p>Clear the <code>float</code> on any element. Utilizes <a href="http://nicolasgallagher.com/micro-clearfix-hack/">the micro clearfix</a> as popularized by Nicolas Gallagher.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;clearfix&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
<div class="highlight"><pre><code class="css"><span class="o">//</span> <span class="nt">Mixin</span>
<span class="nc">.clearfix</span> <span class="p">{</span>
  <span class="o">&amp;:</span><span class="n">before</span><span class="o">,</span>
  <span class="o">&amp;:</span><span class="n">after</span> <span class="err">{</span>
    <span class="k">content</span><span class="o">:</span> <span class="s2">&quot; &quot;</span><span class="p">;</span>
    <span class="k">display</span><span class="o">:</span> <span class="n">table</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="o">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="k">clear</span><span class="o">:</span> <span class="k">both</span><span class="p">;</span>
  <span class="p">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Usage</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="o">.</span><span class="n">clearfix</span><span class="p">();</span>
<span class="p">}</span>
</code></pre></div>
  </div>

  <!-- Responsive utilities
  ================================================== -->
  <div class="bs-docs-section" id="responsive-utilities">
    <div class="page-header">
      <h1>Responsive utilities</h1>
    </div>
    <p class="lead">For faster mobile-friendly development, use these utility classes for showing and hiding content by device via media query. Also included are utility classes for toggling content when printed.</p>

    <h3>Responsive classes</h3>
    <div class="bs-table-scrollable">
      <table class="table bordered striped responsive-utilities">
        <thead>
          <tr>
            <th>Class</th>
            <th>Small devices <small>Up to 768px</small></th>
            <th>Medium devices <small>768px to 979px</small></th>
            <th>Large devices <small>980px and up</small></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><code>.visible-sm</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
          </tr>
          <tr>
            <th><code>.visible-md</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
          </tr>
          <tr>
            <th><code>.visible-lg</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
          </tr>
          <tr>
            <th><code>.hidden-sm</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
          </tr>
          <tr>
            <th><code>.hidden-md</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
          </tr>
          <tr>
            <th><code>.hidden-lg</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h3>Print classes</h3>
    <div class="bs-table-scrollable">
      <table class="table bordered striped responsive-utilities">
        <thead>
          <tr>
            <th>Class</th>
            <th>Browser</th>
            <th>Print</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><code>.visible-print</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
          </tr>
          <tr>
            <th><code>.hidden-print</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h3>When to use</h3>
    <p>Use on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation. Responsive utilities are currently only available for block-level toggling, meaning <code>display: none;</code> or <code>display: block;</code>. Use with inline and table elements is currently not supported.</p>

    <h3>Test case</h3>
    <p>Resize your browser or load on different devices to test the responsive utility classes.</p>
    <h4>Visible on...</h4>
    <p>Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.</p>
    <ul class="responsive-utilities-test visible-on">
      <li>
        <span class="hidden-sm">Small</span>
        <span class="visible-sm">&#10004; Visible on small</span>
      </li>
      <li>
        <span class="hidden-md">Medium</span>
        <span class="visible-md">&#10004; Visible on medium</span>
      </li>
      <li>
        <span class="hidden-lg">Large</span>
        <span class="visible-lg">&#10004; Visible on large</span>
      </li>
    </ul>
    <h4>Hidden on...</h4>
    <p>Here, green checkmarks indicate the element <strong>is hidden</strong> in your current viewport.</p>
    <ul class="responsive-utilities-test hidden-on">
      <li>
        <span class="visible-sm">Small</span>
        <span class="hidden-sm">&#10004; Hidden on small</span>
      </li>
      <li>
        <span class="visible-md">Medium</span>
        <span class="hidden-md">&#10004; Hidden on medium</span>
      </li>
      <li>
        <span class="visible-lg">Large</span>
        <span class="hidden-lg">&#10004; Hidden on large</span>
      </li>
    </ul>

  </div>
<div>
	<h1>touch and position also needed from foundation</h1>
</div>

        </div>
      </div>

    </div>
<?php include('temps/footer.php'); ?>
