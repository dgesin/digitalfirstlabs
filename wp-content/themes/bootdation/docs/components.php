<?php $pn = "Components"; ?>
<?php include('temps/header.php'); ?>

    <!-- Docs page layout -->
    <div class="bs-header">
      <div class="container">
        <h1>Components</h1>
        <p>Dozens of reusable components built to provide iconography, dropdowns, navigation, alerts, popovers, and much more.</p>
       
      </div>
    </div>


    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-lg-3">
          <div class="bs-sidebar">
            <ul class="nav bs-sidenav">
              
                <li>
  <a href="#dropdowns">Dropdowns</a>
  <ul class="nav">
    <li><a href="#dropdowns-example">Example</a></li>
    <li><a href="#dropdowns-alignment">Alignment options</a></li>
    <li><a href="#dropdowns-headers">Headers</a></li>
    <li><a href="#dropdowns-disabled">Disabled menu items</a></li>
  </ul>
</li>
<li>
  <a href="#btn-groups">Button groups</a>
  <ul class="nav">
    <li><a href="#btn-groups-single">Basic button group</a></li>
    <li><a href="#btn-groups-toolbar">Button toolbar</a></li>
    <li><a href="#btn-groups-vertical">Vertical variation</a></li>
    <li><a href="#btn-groups-justified">Justified link buttons</a></li>
  </ul>
</li>
<li>
  <a href="#btn-dropdowns">Button dropdowns</a>
  <ul class="nav">
    <li><a href="#btn-dropdowns-single">Single button dropdown</a></li>
    <li><a href="#btn-dropdowns-split">Split button dropdown</a></li>
    <li><a href="#btn-dropdowns-sizes">Button sizes</a></li>
    <li><a href="#btn-dropdowns-dropup">Dropup variation</a></li>
  </ul>
</li>
<li>
  <a href="#input-groups">Input groups</a>
  <ul class="nav">
    <li><a href="#input-groups-basic">Basic input group</a></li>
    <li><a href="#input-groups-sizes">Sizing options</a></li>
    <li><a href="#input-groups-checkboxes-radios">Checkbox and radios addons</a></li>
    <li><a href="#input-groups-buttons">Button addons</a></li>
    <li><a href="#input-groups-buttons-dropdowns">Buttons with dropdowns</a></li>
    <li><a href="#input-groups-buttons-segmented">Segmented buttons</a></li>
  </ul>
</li>
<li>
  <a href="#nav">Navs</a>
  <ul class="nav">
    <li><a href="#tabs">Tabs nav</a></li>
    <li><a href="#pills">Pills nav</a></li>
    <li><a href="#justified">Justified nav</a></li>
    <li><a href="#nav-disabled-links">Disabled links</a></li>
    <li><a href="#nav-alignment">Alignment options</a></li>
    <li><a href="#nav-dropdowns">Using dropdowns</a></li>
  </ul>
</li>
<li>
  <a href="#navbar">Navbar</a>
  <ul class="nav">
    <li><a href="#navbar-basic">Basic navbar</a></li>
    <li><a href="#navbar-nav">Nav links</a></li>
    <li><a href="#navbar-forms">Forms in navbars</a></li>
    <li><a href="#navbar-buttons">Buttons in navbars</a></li>
    <li><a href="#navbar-text">Text in navbars</a></li>
    <li><a href="#navbar-links">Links in navbars</a></li>
    <li><a href="#navbar-component-alignment">Component alignment</a></li>
    <li><a href="#navbar-fixed-top">Fixed top navbar</a></li>
    <li><a href="#navbar-fixed-bottom">Fixed bottom navbar</a></li>
    <li><a href="#navbar-static-top">Static top navbar</a></li>
    <li><a href="#navbar-responsive">Responsive navbar</a></li>
  </ul>
</li>
<li><a href="#breadcrumbs">Breadcrumbs</a></li>
<li>
  <a href="#pagination">Pagination</a>
  <ul class="nav">
    <li><a href="#pagination-default">Default pagination</a></li>
    <li><a href="#pagination-pager">Pager</a></li>
  </ul>
</li>
<li><a href="#labels">Labels</a></li>
<li><a href="#badges">Badges</a></li>
<li>
  <a href="#type-components">Typography</a>
  <ul class="nav">
    <li><a href="#type-components-jumbotron">Jumbotron</a></li>
    <li><a href="#type-components-page-header">Page header</a></li>
  </ul>
</li>
<li><a href="#thumbnails">Thumbnails</a></li>
<li>
  <a href="#alerts">Alerts</a>
  <ul class="nav">
    <li><a href="#alerts-default">Default alert</a></li>
    <li><a href="#alerts-block">Block alerts</a></li>
    <li><a href="#alerts-alternatives">Contextual alternatives</a></li>
    <li><a href="#alerts-links">Links in alerts</a></li>
  </ul>
</li>
<li>
  <a href="#progress">Progress bars</a>
  <ul class="nav">
    <li><a href="#progress-basic">Basic progress bar</a></li>
    <li><a href="#progress-alternatives">Contextual alternatives</a></li>
    <li><a href="#striped">Striped</a></li>
    <li><a href="#progress-animated">Animated</a></li>
    <li><a href="#progress-stacked">Stacked</a></li>
  </ul>
</li>
<li><a href="#media">Media object</a></li>
<li>
  <a href="#list-group">List group</a>
  <ul class="nav">
    <li><a href="#list-group-basic">Basic list group</a></li>
    <li><a href="#list-group-badges">Badges</a></li>
    <li><a href="#list-group-linked">Linked items</a></li>
    <li><a href="#list-group-custom-content">Custom content</a></li>
    <!-- <li><a href="#list-group-pic">Leading picture</a></li> -->
  </ul>
</li>
<li>
  <a href="#panels">Panels</a>
  <ul class="nav">
    <li><a href="#panels-basic">Basic panel</a></li>
    <li><a href="#panels-heading">Panel with heading</a></li>
    <li><a href="#panels-alternatives">Contextual alternatives</a></li>
    <li><a href="#panels-list-group">With list groups</a>
  </ul>
</li>
<li><a href="#wells">Wells</a></li>

              
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
            <!-- Dropdowns
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="dropdowns">Dropdown menus</h1>
    </div>
    <p class="lead">Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.</p>

    <h3 id="dropdowns-example">Example</h3>
    <p>Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.</p>
    <div class="bs-example">
      <div class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
          <li><a tabindex="-1" href="#">Action</a></li>
          <li><a tabindex="-1" href="#">Another action</a></li>
          <li><a tabindex="-1" href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a tabindex="-1" href="#">Separated link</a></li>
        </ul>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Link or button to toggle dropdown --&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span> <span class="na">role=</span><span class="s">&quot;menu&quot;</span> <span class="na">aria-labelledby=</span><span class="s">&quot;dropdownMenu&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">tabindex=</span><span class="s">&quot;-1&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">tabindex=</span><span class="s">&quot;-1&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">tabindex=</span><span class="s">&quot;-1&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">tabindex=</span><span class="s">&quot;-1&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="dropdowns-alignment">Aligning the menus</h3>
    <p>Add <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu pull-right&quot;</span> <span class="na">role=</span><span class="s">&quot;menu&quot;</span> <span class="na">aria-labelledby=</span><span class="s">&quot;dLabel&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3 id="dropdowns-headers">Dropdown headers</h3>
    <p>Add a header to break up label sections of actions in any dropdown menu.</p>
    <div class="bs-example">
      <div class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
          <li class="dropdown-header">Dropdown header</li>
          <li><a tabindex="-1" href="#">Action</a></li>
          <li><a tabindex="-1" href="#">Another action</a></li>
          <li><a tabindex="-1" href="#">Something else here</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Dropdown header</li>
          <li><a tabindex="-1" href="#">Separated link</a></li>
        </ul>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span> <span class="na">role=</span><span class="s">&quot;menu&quot;</span> <span class="na">aria-labelledby=</span><span class="s">&quot;dropdownMenu&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;dropdown-header&quot;</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;dropdown-header&quot;</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3 id="dropdowns-disabled">Disabled menu options</h3>
    <p>Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.</p>
    <div class="bs-example">
      <div class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
          <li><a tabindex="-1" href="#">Regular link</a></li>
          <li class="disabled"><a tabindex="-1" href="#">Disabled link</a></li>
          <li><a tabindex="-1" href="#">Another link</a></li>
        </ul>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span> <span class="na">role=</span><span class="s">&quot;menu&quot;</span> <span class="na">aria-labelledby=</span><span class="s">&quot;dropdownMenu&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">tabindex=</span><span class="s">&quot;-1&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Regular link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;disabled&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">tabindex=</span><span class="s">&quot;-1&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">tabindex=</span><span class="s">&quot;-1&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
  </div>



  <!-- Button Groups
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="btn-groups">Button groups</h1>
    </div>
    <p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#js-buttons">our buttons plugin</a>.</p>

    <div class="bs-callout bs-callout-info">
      <h4>Tooltips &amp; popovers in button groups require special setting</h4>
      <p>When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
    </div>

    <h3 id="btn-groups-single">Basic button group</h3>
    <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
    <div class="bs-example">
      <div class="btn-group" style="margin: 9px 0 5px;">
        <button type="button" class="btn default">Left</button>
        <button type="button" class="btn default">Middle</button>
        <button type="button" class="btn default">Right</button>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="btn-groups-toolbar">Multiple button groups</h3>
    <p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
    <div class="bs-example">
      <div class="btn-toolbar" style="margin: 0;">
        <div class="btn-group">
          <button type="button" class="btn default">1</button>
          <button type="button" class="btn default">2</button>
          <button type="button" class="btn default">3</button>
          <button type="button" class="btn default">4</button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn default">5</button>
          <button type="button" class="btn default">6</button>
          <button type="button" class="btn default">7</button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn default">8</button>
        </div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-toolbar&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="btn-groups-nested">Nested button groups</h3>
    <p>Place buttons groups within button groups when you want dropdown menus mixed with a series of buttons.</p>
    <div class="bs-example">
      <div class="btn-group">
        <button type="button" class="btn default">1</button>
        <button type="button" class="btn default">2</button>
        <button type="button" class="btn default">3</button>

        <div class="btn-group">
          <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">
            Dropdown
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Dropdown link</a></li>
            <li><a href="#">Dropdown link</a></li>
            <li><a href="#">Dropdown link</a></li>
           </ul>
        </div>
      </div>
    </div>

    <h3 id="btn-groups-vertical">Vertical button groups</h3>
    <p>Make a set of buttons appear vertically stacked rather than horizontally.</p>
    <div class="bs-example">
      <div class="btn-group-vertical">
        <button type="button" class="btn default">Button</button>
        <button type="button" class="btn default">Button</button>
        <button type="button" class="btn default">Button</button>
        <button type="button" class="btn default">Button</button>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group-vertical&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="btn-groups-justified">Justified button groups</h3>
    <p>Make a group of buttons stretch at the same size to span the entire width of its parent.</p>

    <div class="bs-callout bs-callout-warning">
      <h4>Element-specific usage</h4>
      <p>This only works with <code>&lt;a&gt;</code> elements as the <code>&lt;button&gt;</code> doesn't pick up these styles.</p>
    </div>

    <div class="bs-example">
      <div class="btn-group justified">
        <a href="#" class="btn default">Left</a>
        <a href="#" class="btn default">Right</a>
        <a href="#" class="btn default">Middle</a>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group justified&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

  </div>



  <!-- Split button dropdowns
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="btn-dropdowns">Button dropdown menus</h1>
    </div>
    <p class="lead">Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>

    <div class="bs-callout bs-callout-danger">
      <h4>Plugin dependency</h4>
      <p>Button dropdowns require the <a href="../javascript/#dropdowns">dropdown plugin</a> to be included in your version of Bootdation.</p>
    </div>

    <h3 id="btn-dropdowns-single">Single button dropdowns</h3>
    <p>Turn a button into dropdown toggle with some basic markup changes.</p>
    <div class="bs-example">
      <div class="btn-toolbar" style="margin-bottom: 10px;">
        <div class="btn-group">
          <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Single button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
    Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="btn-dropdowns-split">Split button dropdowns</h3>
    <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
    <div class="bs-example">
      <div class="btn-toolbar" style="margin: 0;">
        <div class="btn-group">
          <button type="button" class="btn default">Action</button>
          <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn primary">Action</button>
          <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn danger">Danger</button>
          <button type="button" class="btn danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn warning">Warning</button>
          <button type="button" class="btn warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn success">Success</button>
          <button type="button" class="btn success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div><!-- /btn-toolbar -->
    </div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Split button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="btn-dropdowns-sizes">Works with all button sizes</h3>
    <p>Button dropdowns work with buttons of all sizes.</p>
    <div class="bs-example">
      <div class="btn-toolbar" style="margin: 0;">
        <div class="btn-group">
          <button class="btn default large dropdown-toggle" type="button" data-toggle="dropdown">
            Large button <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn default small dropdown-toggle" type="button" data-toggle="dropdown">
            Small button <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div><!-- /btn-toolbar -->
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Large button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn default large dropdown-toggle&quot;</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
    Large button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn default small dropdown-toggle&quot;</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
    Small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="btn-dropdowns-dropup">Dropup buttons</h3>
    <p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</p>
    <div class="bs-example">
      <div class="btn-toolbar">
        <div class="btn-group dropup">
          <button type="button" class="btn default">Dropup</button>
          <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group dropup">
          <button type="button" class="btn primary">Right dropup</button>
          <button type="button" class="btn primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group dropup&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Dropup<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

  </div>




  <!-- Input groups
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="input-groups">Input groups</h1>
    </div>
    <p class="lead">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input. Use <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a <code>.form-control</code>.</p>

    <div class="bs-callout bs-callout-danger">
      <h4>Cross-browser compatibility</h4>
      <p>Avoid using <code>&lt;select&gt;</code> elements here as they cannot be fully styled in WebKit browsers.</p>
    </div>
    <div class="bs-callout bs-callout-info">
      <h4>Tooltips &amp; popovers in input groups require special setting</h4>
      <p>When using tooltips or popovers on elements within an <code>.input-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
    </div>

    <h2 id="input-groups-basic">Basic input group</h2>
    <form class="bs-example bs-example-form">
      <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" placeholder="Username">
      </div>
      <br>
      <div class="input-group">
        <input type="text" class="form-control">
        <span class="input-group-addon">.00</span>
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control">
        <span class="input-group-addon">.00</span>
      </div>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Username&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h2 id="input-groups-sizes">Optional sizes</h2>
    <p>Add the relative form sizing classes to the <code>.input-group-addon</code>.</p>
    <form class="bs-example bs-example-form">
      <div class="input-group">
        <span class="input-group-addon input-large">@</span>
        <input type="text" class="form-control input-large" placeholder="Username">
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" placeholder="Username">
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon input-small">@</span>
        <input type="text" class="form-control input-small" placeholder="Username">
      </div>
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon input-large&quot;</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control input-large&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Username&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Username&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon input-small&quot;</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control input-small&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Username&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>


    <h2 id="input-groups-checkboxes-radios">Checkboxes and radio buttons</h2>
    <p>Place any checkbox or radio option within an input group's addon instead of text.</p>
    <form class="bs-example bs-example-form">
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox">
            </span>
            <input type="text" class="form-control">
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="radio">
            </span>
            <input type="text" class="form-control">
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
</code></pre></div>


    <h2 id="input-groups-buttons">Buttons instead of text</h2>
    <p>Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-btn</code> to wrap the buttons. This is required due to default browser styles that cannot be overridden.</p>
    <form class="bs-example bs-example-form">
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <span class="input-group-btn">
              <button class="btn default" type="button">Go!</button>
            </span>
            <input type="text" class="form-control">
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn default" type="button">Go!</button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-btn&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-btn&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
</code></pre></div>

    <h2 id="input-groups-buttons-dropdowns">Buttons with dropdowns</h2>
    <p></p>
    <form class="bs-example bs-example-form">
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div><!-- /btn-group -->
            <input type="text" class="form-control">
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-btn">
              <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
              <ul class="dropdown-menu pull-right">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group-btn&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-6&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group-btn&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu pull-right&quot;</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
</code></pre></div>

    <h2 id="input-groups-buttons-segmented">Segmented dropdown groups</h2>
    <form class="bs-example bs-example-form">
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn default" tabindex="-1">Action</button>
              <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
            <input type="text" class="form-control">
          </div><!-- /.input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-btn">
              <button type="button" class="btn default" tabindex="-1">Action</button>
              <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
          </div><!-- /.input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group-btn&quot;</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group-btn btn-group&quot;</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>




  <!-- Navs
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="nav">Navs</h1>
    </div>

    <p class="lead">Navs available in Bootdation have shared markup, starting with the base <code>.nav</code> class, as well as shared states. Swap modifier classes to switch between each style.</p>

    <h2 id="tabs">Tabs</h2>
    <p>Note the <code>.tabs</code> class requires the <code>.nav</code> base class.</p>
    <div class="bs-example">
      <ul class="nav tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav tabs&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h2 id="pills">Pills</h2>
    <p>Take that same HTML, but use <code>.pills</code> instead:</p>
    <div class="bs-example">
      <ul class="nav pills">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav pills&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
    <p>Pills are also vertically stackable. Just add <code>.stacked</code>.</p>
    <div class="bs-example">
      <ul class="nav pills stacked" style="max-width: 300px;">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav pills stacked&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h2>Options</h2>

    <h3 id="justified">Justified links</h3>
    <p>Easily make tabs or pills equal widths of their parent with <code>.justified</code>.</p>
    <div class="bs-example">
      <ul class="nav tabs justified">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <br>
      <ul class="nav pills justified">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav tabs justified&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav pills justified&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3 id="nav-disabled-links">Disabled state</h3>
    <p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover effects</strong>.</p>

    <div class="bs-callout bs-callout-warning">
      <h4>Link functionality not impacted</h4>
      <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
    </div>

    <div class="bs-example">
      <ul class="nav pills">
        <li><a href="#">Clickable link</a></li>
        <li><a href="#">Clickable link</a></li>
        <li class="disabled"><a href="#">Disabled link</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav pills&quot;</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;disabled&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>


    <h3 id="nav-alignment">Component alignment</h3>
    <p>To align nav links, use the <code>.pull-left</code> or <code>.pull-right</code> utility classes. Both classes will add a CSS float in the specified direction.</p>


    <hr class="bs-docs-separator">


    <h2 id="nav-dropdowns">Dropdowns</h2>
    <p>Add dropdown menus with a little extra HTML and the <a href="../javascript/#dropdowns">dropdowns JavaScript plugin</a>.</p>

    <h3>Tabs with dropdowns</h3>
    <div class="bs-example">
      <ul class="nav tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Help</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Dropdown <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav tabs&quot;</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
      Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3>Pills with dropdowns</h3>
    <div class="bs-example">
      <ul class="nav pills">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Help</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Dropdown <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav pills&quot;</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;dropdown&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
      Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;caret&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

  </div>



  <!-- Navbar
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="navbar">Navbar</h1>
    </div>

    <h2 id="navbar-basic">Basic navbar</h2>
    <p>To start, navbars are static (not fixed to the top) and include support for a project name and basic navigation. Place one anywhere within a <code>.container</code>, which sets the width of your site and content.</p>
    <div class="bs-example">
      <div class="navbar">
        <a class="navbar-brand" href="#">Title</a>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;navbar-brand&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Title<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav navbar-nav&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h2>Navbar components</h2>

    <h3 id="navbar-brand">Brand</h3>
    <p>A simple link to show your brand or project name only requires an anchor tag.</p>
    <div class="bs-example">
      <div class="navbar">
        <a class="navbar-brand" href="#">Title</a>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;navbar-brand&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Title<span class="nt">&lt;/a&gt;</span>
</code></pre></div>

    <h3 id="navbar-nav">Nav links</h3>
    <p>Nav items are simple to add via unordered lists.</p>
    <div class="bs-example">
      <div class="navbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Link</a></li>
          <li class="disabled"><a href="#">Disabled</a></li>
        </ul>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav navbar-nav&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;disabled&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3 id="navbar-forms">Forms</h3>
    <p>To properly style and position a form within the navbar, add the appropriate classes as shown below. For a default form, include <code>.navbar-form</code> and either <code>.pull-left</code> or <code>.pull-right</code> to properly align it.</p>
    <div class="bs-example">

      <div class="navbar">
        <form class="navbar-form pull-left">
          <input type="text" class="form-control" style="width: 200px;">
          <button type="submit" class="btn default">Submit</button>
        </form>
      </div>

      <div class="navbar">
        <form class="navbar-form pull-left">
          <select name="" id="" class="form-control" style="width: 200px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
          <button type="submit" class="btn default">Submit</button>
        </form>
      </div>

      <div class="navbar">
        <form class="navbar-form pull-left">
          <input type="text" class="form-control" style="width: 200px;">
          <input type="checkbox">
          <button type="submit" class="btn default">Submit</button>
        </form>
      </div>

      <div class="navbar">
        <form class="navbar-form pull-left">
          <input type="text" class="form-control" style="width: 200px;">
          <label class="checkbox-inline">
            <input type="checkbox"> Remember me
          </label>
          <button type="submit" class="btn default">Submit</button>
        </form>
      </div>

    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">&quot;navbar-form pull-left&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 200px;&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</code></pre></div>

    <h3 id="navbar-buttons">Buttons</h3>
    <p>For buttons not residing in a <code>&lt;form&gt;</code>, add this class to vertically center buttons within a navbar.</p>
    <div class="bs-example">
      <div class="navbar">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="btn default navbar-btn">Sign in</button>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default navbar-btn&quot;</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
</code></pre></div>

    <h3 id="navbar-text">Text</h3>
    <p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper leading and color.</p>
    <div class="bs-example">
      <div class="navbar">
        <a href="#" class="navbar-brand">Brand</a>
        <p class="navbar-text">Signed in as Mark Otto</p>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;navbar-brand&quot;</span><span class="nt">&gt;</span>Brand<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;navbar-text&quot;</span><span class="nt">&gt;</span>Signed in as Mark Otto<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="navbar-links">Links</h3>
    <p>For folks using standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</p>
    <div class="bs-example">
      <div class="navbar">
        <a href="#" class="navbar-brand">Brand</a>
        <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;navbar-brand&quot;</span><span class="nt">&gt;</span>Brand<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;navbar-text pull-right&quot;</span><span class="nt">&gt;</span>Signed in as <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;navbar-link&quot;</span><span class="nt">&gt;</span>Mark Otto<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="navbar-component-alignment">Component alignment</h3>
    <p>Align nav links, forms, buttons, or text, using the <code>.pull-left</code> or <code>.pull-right</code> utility classes. Both classes will add a CSS float in the specified direction. To align nav links, put them in a separate <code>&lt;ul&gt;</code> with the respective utility class applied.</p>


    <h2>Optional display variations</h2>
    <p>Fix the navbar to the top or bottom of the viewport with an additional class on the outermost div, <code>.navbar</code>. These will also remove rounded corners.</p>

    <h3 id="navbar-fixed-top">Fixed to top</h3>
    <p>Add <code>.navbar-fixed-top</code>.</p>
    <div class="bs-example bs-navbar-top-example">
      <div class="navbar navbar-fixed-top">
        <div class="container" style="width: auto;">
          <a class="navbar-brand" href="#">Title</a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar navbar-fixed-top&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-danger">
      <h4>Body padding required</h4>
      <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the top of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
<div class="highlight"><pre><code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-top</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div>
      <p>Make sure to include this <strong>after</strong> the core Bootdation CSS.</p>
    </div>

    <h3 id="navbar-fixed-bottom">Fixed to bottom</h3>
    <p>Add <code>.navbar-fixed-bottom</code> instead.</p>
    <div class="bs-example bs-navbar-bottom-example">
      <div class="navbar navbar-fixed-bottom">
        <div class="container" style="width: auto;">
          <a class="navbar-brand" href="#">Title</a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar navbar-fixed-bottom&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-danger">
      <h4>Body padding required</h4>
      <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the bottom of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
<div class="highlight"><pre><code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-bottom</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div>
      <p>Make sure to include this <strong>after</strong> the core Bootdation CSS.</p>
    </div>

    <h3 id="navbar-static-top">Static top navbar</h3>
    <p>Create a full-width navbar that scrolls away with the page by adding <code>.navbar-static-top</code>. Unlike the <code>.navbar-fixed-*</code> classes, you do not need to change any padding on the <code>body</code>.</p>
    <div class="bs-example bs-navbar-top-example">
      <div class="navbar navbar-static-top" style="margin: -1px -1px 0;">
        <div class="container" style="width: auto;">
          <a class="navbar-brand" href="#">Title</a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar navbar-static-top&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>


    <h2 id="navbar-responsive">Responsive navbar</h2>
    <p>To implement a collapsing responsive navbar, wrap your navbar content in a containing div, <code>.nav-collapse.collapse</code>, and add the navbar toggle button, <code>.navbar-toggle</code>.</p>
    <div class="bs-example">
      <div class="navbar">
        <div class="container">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Title</a>
          <div class="nav-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Dropdown header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-left" action="">
              <input type="text" class="form-control col-lg-8" placeholder="Search">
            </form>
            <ul class="nav navbar-nav pull-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
      </div><!-- /.navbar -->
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;container&quot;</span><span class="nt">&gt;</span>

    <span class="c">&lt;!-- .navbar-toggle is used as the toggle for collapsed navbar content --&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;navbar-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;collapse&quot;</span> <span class="na">data-target=</span><span class="s">&quot;.navbar-responsive-collapse&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-bar&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-bar&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-bar&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>

    <span class="c">&lt;!-- Be sure to leave the brand out there if you want it shown --&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;navbar-brand&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Title<span class="nt">&lt;/a&gt;</span>

    <span class="c">&lt;!-- Place everything within .navbar-collapse to hide it until above 768px --&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;nav-collapse collapse navbar-responsive-collapse&quot;</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.nav-collapse --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.container --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.navbar --&gt;</span>
</code></pre></div>

    <div class="bs-callout bs-callout-danger">
      <h4>Plugin dependency</h4>
      <p>The responsive navbar requires the <a href="../javascript/#collapse">collapse plugin</a> to be included in your version of Bootdation.</p>
    </div>


    <h2>Inverted variation</h2>
    <p>Modify the look of the navbar by adding <code>.navbar-inverse</code>.</p>
    <div class="bs-example">
      <div class="navbar navbar-inverse">
        <div class="container">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Title</a>
          <div class="nav-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Dropdown header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-left" action="">
              <input type="text" class="form-control col-lg-8" placeholder="Search">
            </form>
            <ul class="nav navbar-nav pull-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
      </div><!-- /.navbar -->
    </div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;navbar navbar-inverse&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

  </div>



  <!-- Breadcrumbs
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="breadcrumbs">Breadcrumbs <small></small></h1>
    </div>
    <p class="lead">Indicate the current page's location within a navigational hierarchy.</p>
    <p>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</p>
    <div class="bs-example">
      <ul class="breadcrumb">
        <li class="active">Home</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Library</li>
      </ul>
      <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;breadcrumb&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
  </div>



  <!-- Pagination
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="pagination">Pagination</h1>
    </div>
    <p class="lead">Provide pagination links for your site or app with the multi-page pagination component, or the simpler <a href="#pagination-pager">pager alternative</a>.</p>

    <h2 id="pagination-default">Standard pagination</h2>
    <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
    <div class="bs-example">
      <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pagination&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3>Disabled and active states</h3>
    <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
    <div class="bs-example">
      <ul class="pagination">
        <li class="disabled"><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
     </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pagination&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;disabled&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
    <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code> to remove click functionality while retaining intended styles.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pagination&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;disabled&quot;</span><span class="nt">&gt;&lt;span&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;&lt;span&gt;</span>1<span class="nt">&lt;/span&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>


    <h3>Sizes</h3>
    <p>Fancy larger or smaller pagination? Add <code>.large</code> or <code>.small</code>  for additional sizes.</p>
    <div class="bs-example">
      <div>
        <ul class="pagination large">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <div>
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <div>
        <ul class="pagination small">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pagination large&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pagination pagination&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pagination small&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>


    <h2 id="pagination-pager">Pager</h2>
    <p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>

    <h3>Default example</h3>
    <p>By default, the pager centers links.</p>
    <div class="bs-example">
      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pager&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3>Aligned links</h3>
    <p>Alternatively, you can align each link to the sides:</p>
    <div class="bs-example">
      <ul class="pager">
        <li class="previous"><a href="#">&larr; Older</a></li>
        <li class="next"><a href="#">Newer &rarr;</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pager&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;previous&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;next&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>


    <h3>Optional disabled state</h3>
    <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
    <div class="bs-example">
      <ul class="pager">
        <li class="previous disabled"><a href="#">&larr; Older</a></li>
        <li class="next"><a href="#">Newer &rarr;</a></li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;pager&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;previous disabled&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;next&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
  </div>



  <!-- Labels
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="labels">Labels</h1>
    </div>
    <p class="lead"></p>

    <h3>Example</h3>
    <div class="bs-example">
      <h1>Example heading <span class="label">New</span></h1>
      <h2>Example heading <span class="label">New</span></h2>
      <h3>Example heading <span class="label">New</span></h3>
      <h4>Example heading <span class="label">New</span></h4>
      <h5>Example heading <span class="label">New</span></h5>
      <h6>Example heading <span class="label">New</span></h6>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;label&quot;</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
</code></pre></div>

    <h3>Available variations</h3>
    <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
    <div class="bs-example">
      <span class="label">Default</span>
      <span class="label success">Success</span>
      <span class="label warning">Warning</span>
      <span class="label danger">Danger</span>
      <span class="label info">Info</span>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;label&quot;</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;label success&quot;</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;label warning&quot;</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;label danger&quot;</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;label info&quot;</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
</code></pre></div>

  </div>



  <!-- Badges
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="badges">Badges</h1>
    </div>
    <p class="lead">Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links, Bootdation navs, and more.</p>

    <div class="bs-example">
      <a href="#">Inbox <span class="badge">42</span></a>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Inbox <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;badge&quot;</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
</code></pre></div>

    <h4>Self collapsing</h4>
    <p>When there are no new or unread items, badges will simply collapse (via CSS's <code>:empty</code> selector) provided no content exists within.</p>

    <div class="bs-callout bs-callout-danger">
      <h4>Cross-browser compatibility</h4>
      <p>Badges won't self collapse in Internet Explorer 8 because it lacks support for the <code>:empty</code> selector.</p>
    </div>

    <h4>Adapts to active nav states</h4>
    <p>Built-in styles are included for placing badges in active states in pill and list navigations.</p>
    <div class="bs-example">
      <ul class="nav pills">
        <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages <span class="badge">3</span></a></li>
      </ul>
      <br>
      <ul class="nav pills stacked" style="max-width: 260px;">
        <li class="active">
          <a href="#">
            <span class="badge pull-right">42</span>
            Home
          </a>
        </li>
        <li><a href="#">Profile</a></li>
        <li>
          <a href="#">
            <span class="badge pull-right">3</span>
            Messages
          </a>
        </li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav pills stacked&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;badge pull-right&quot;</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;</span>
      Home
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
  </div>



  <!-- Typographic components
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="type-components">Typographic components</h1>
    </div>

    <h2 id="type-components-jumbotron">Jumbotron</h2>
    <p>A lightweight, flexible component to showcase key content on your site. It works well on marketing and content-heavy sites.</p>
    <div class="bs-example">
      <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p><a class="btn primary large">Learn more</a></p>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;jumbotron&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn primary large&quot;</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h2 id="type-components-page-header">Page header</h2>
    <p>A simple shell for an <code>h1</code> to appropriately space out and segment sections of content on a page. It can utilize the <code>h1</code>'s default <code>small</code> element, as well as most other components (with additional styles).</p>
    <div class="bs-example">
      <div class="page-header">
        <h1>Example page header <small>Subtext for header</small></h1>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;page-header&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1&gt;</span>Example page header <span class="nt">&lt;small&gt;</span>Subtext for header<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
  </div>



  <!-- Thumbnails
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="thumbnails">Thumbnails</h1>
    </div>
    <p class="lead">Extend Bootdation's <a href="../css/#grid">grid system</a> with the thumbnail component to easily display grids of images, videos, text, and more.</p>

    <h3>Default thumbnails</h3>
    <p>By default, Bootdation's thumbnails are designed to showcase linked images with minimal required markup.</p>
    <div class="bs-example">
      <div class="row">
        <div class="col-lg-3">
          <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="">
          </a>
        </div>
        <div class="col-lg-3">
          <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="">
          </a>
        </div>
        <div class="col-lg-3">
          <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="">
          </a>
        </div>
        <div class="col-lg-3">
          <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="">
          </a>
        </div>
      </div>
    </div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-3&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;thumbnail&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">&quot;holder.js/100%x180&quot;</span> <span class="na">alt=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3>Custom content thumbnails</h3>
    <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
    <div class="bs-example">
      <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn primary">Action</a> <a href="#" class="btn default">Action</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn primary">Action</a> <a href="#" class="btn default">Action</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn primary">Action</a> <a href="#" class="btn default">Action</a></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;row&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;col-lg-3&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;thumbnail&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">&quot;holder.js/300x200&quot;</span> <span class="na">alt=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;caption&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h3&gt;</span>Thumbnail label<span class="nt">&lt;/h3&gt;</span>
        <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;btn primary&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;btn default&quot;</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
  </div>




  <!-- Alerts
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="alerts">Alerts</h1>
    </div>
    <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. For inline dismissal, use the <a href="../javascript/#js-alerts">alerts jQuery plugin</a>.</p>

    <h3 id="alerts-default">Default alert</h3>
    <p>Wrap any text and an optional dismiss button in <code>.alert</code> for a basic warning alert message.</p>

    <div class="bs-callout bs-callout-warning">
      <h4>Ensure proper behavior across all devices</h4>
      <p>Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data attribute.</p>
    </div>

    <div class="bs-example">
      <div class="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;close&quot;</span> <span class="na">data-dismiss=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Best check yo self, you&#39;re not looking too good.
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="alerts-block">Block alerts</h3>
    <p>For longer messages, increase the padding on the top and bottom of the alert wrapper by adding <code>.alert-block</code>.</p>
    <div class="bs-example">
      <div class="alert alert-block">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Warning!</h4>
        <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert alert-block&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;close&quot;</span> <span class="na">data-dismiss=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;h4&gt;</span>Warning!<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="alerts-alternatives">Contextual alternatives</h3>
    <p>Add optional classes to change an alert's connotation.</p>
    <div class="bs-example">
      <div class="alert danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
      <div class="alert success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div class="alert info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert danger&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert success&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert info&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="alerts-links">Links in alerts</h3>
    <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
    <div class="bs-example">
      <div class="alert danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
      </div>
      <div class="alert success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
      </div>
      <div class="alert info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert danger&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;alert-link&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert success&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;alert-link&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert info&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;alert-link&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
  </div>




  <!-- Progress bars
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="progress">Progress bars</h1>
    </div>
    <p class="lead">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>

    <div class="bs-callout bs-callout-danger">
      <h4>Cross-browser compatibility</h4>
      <p>Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.</p>
    </div>

    <h3 id="progress-basic">Basic</h3>
    <p>Default progress bar with a vertical gradient.</p>
    <div class="bs-example">
      <div class="progress">
        <div class="progress-bar" style="width: 60%;"></div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 60%;&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="progress-alternatives">Contextual alternatives</h3>
    <p>Progress bars use some of the same button and alert classes for consistent styles.</p>
    <div class="bs-example">
      <div class="progress" style="margin-bottom: 9px;">
        <div class="progress-bar info" style="width: 20%"></div>
      </div>
      <div class="progress" style="margin-bottom: 9px;">
        <div class="progress-bar success" style="width: 40%"></div>
      </div>
      <div class="progress" style="margin-bottom: 9px;">
        <div class="progress-bar warning" style="width: 60%"></div>
      </div>
      <div class="progress">
        <div class="progress-bar danger" style="width: 80%"></div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar info&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 20%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar success&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 40%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar warning&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 60%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar danger&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 80%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="striped">Striped</h3>
    <p>Uses a gradient to create a striped effect. Not available in IE8.</p>
    <div class="bs-example">
      <div class="progress striped" style="margin-bottom: 9px;">
        <div class="progress-bar info" style="width: 20%"></div>
      </div>
      <div class="progress striped" style="margin-bottom: 9px;">
        <div class="progress-bar success" style="width: 40%"></div>
      </div>
      <div class="progress striped" style="margin-bottom: 9px;">
        <div class="progress-bar warning" style="width: 60%"></div>
      </div>
      <div class="progress striped">
        <div class="progress-bar danger" style="width: 80%"></div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress striped&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar info&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 20%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress striped&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar success&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 40%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress striped&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar warning&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 60%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress striped&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar danger&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 80%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="progress-animated">Animated</h3>
    <p>Add <code>.active</code> to <code>.striped</code> to animate the stripes right to left. Not available in all versions of IE.</p>
    <div class="bs-example">
      <div class="progress striped active">
        <div class="progress-bar" style="width: 45%"></div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress striped active&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 45%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="progress-stacked">Stacked</h3>
    <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
    <div class="bs-example">
      <div class="progress">
        <div class="progress-bar success" style="width: 35%"></div>
        <div class="progress-bar warning" style="width: 20%"></div>
        <div class="progress-bar danger" style="width: 10%"></div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar success&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 35%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar warning&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 20%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;progress-bar danger&quot;</span> <span class="na">style=</span><span class="s">&quot;width: 10%&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
  </div>




  <!-- Media object
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="media">Media object</h1>
    </div>
    <p class="lead">Abstract object styles for building various types of components (like blog comments, Tweets, etc) that feature a left- or right-aligned image alongside textual content.</p>

    <h3>Default example</h3>
    <p>The default media allow to float a media object (images, video, audio) to the left or right of a content block.</p>
    <div class="bs-example">
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object" data-src="holder.js/64x64">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </div>
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object" data-src="holder.js/64x64">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" data-src="holder.js/64x64">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;media&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;pull-left&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">&quot;media-object&quot;</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;media-body&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">&quot;media-heading&quot;</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3>Media list</h3>
    <p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
    <div class="bs-example">
      <ul class="media-list">
        <li class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
            <!-- Nested media object -->
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Nested media heading</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                <!-- Nested media object -->
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Nested media heading</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  </div>
                </div>
              </div>
            </div>
            <!-- Nested media object -->
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Nested media heading</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
          </div>
        </li>
        <li class="media">
          <a class="pull-right" href="#">
            <img class="media-object" data-src="holder.js/64x64">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          </div>
        </li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;media-list&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;media&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;pull-left&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">&quot;media-object&quot;</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;media-body&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">&quot;media-heading&quot;</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
      ...
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
  </div>





  <!-- List group
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="list-group">List group</h1>
    </div>
    <p class="lead">List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>

    <h3 id="list-group-basic">Basic list group</h3>
    <p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>
    <div class="bs-example">
      <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3 id="list-group-badges">With badges</h3>
    <p>Add the badges component to any list group item and it will automatically be positioned on the right.</p>
    <div class="bs-example">
      <ul class="list-group">
        <li class="list-group-item">
          <span class="badge">14</span>
          Cras justo odio
        </li>
        <li class="list-group-item">
          <span class="badge">2</span>
          Dapibus ac facilisis in
        </li>
        <li class="list-group-item">
          <span class="badge">1</span>
          Morbi leo risus
        </li>
      </ul>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;badge&quot;</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

    <h3 id="list-group-linked">Linked list group</h3>
    <p>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>
    <div class="bs-example">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          Cras justo odio
        </a>
        <a href="#" class="list-group-item">Dapibus ac facilisis in
        </a>
        <a href="#" class="list-group-item">Morbi leo risus
        </a>
        <a href="#" class="list-group-item">Porta ac consectetur ac
        </a>
        <a href="#" class="list-group-item">Vestibulum at eros
        </a>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;list-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;list-group-item active&quot;</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Dapibus ac facilisis in
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Morbi leo risus
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Porta ac consectetur ac
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Vestibulum at eros
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="list-group-custom-content">Custom content</h3>
    <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
    <div class="bs-example">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;list-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;list-group-item active&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">&quot;list-group-item-heading&quot;</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;list-group-item-text&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
  </div>




  <!-- Panels
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="panels">Panels</h1>
    </div>
    <p class="lead">While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.</p>

    <h3 id="panels-basic">Basic panel</h3>
    <p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>
    <div class="bs-example">
      <div class="panel">
        Basic panel example
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel&quot;</span><span class="nt">&gt;</span>
  Basic panel example
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="panels-heading">Panel with heading</h3>
    <p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading.</p>
    <div class="bs-example">
      <div class="panel">
        <div class="panel-heading">Panel heading</div>
        Panel content
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        Panel content
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel-heading&quot;</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  Panel content
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel-heading&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;panel-title&quot;</span><span class="nt">&gt;</span>Panel title<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  Panel content
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="panels-footer">Panel with footer</h3>
    <p>Wrap buttons or secondary text in <code>.panel-footer</code>.</p>
    <div class="bs-example">
      <div class="panel">
        Panel content
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel&quot;</span><span class="nt">&gt;</span>
  Panel content
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel-footer&quot;</span><span class="nt">&gt;</span>Panel footer<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="panels-alternatives">Contextual alternatives</h3>
    <p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>
    <div class="bs-example">
      <div class="panel primary">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        Panel content
      </div>
      <div class="panel success">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        Panel content
      </div>
      <div class="panel warning">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        Panel content
      </div>
      <div class="panel danger">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        Panel content
      </div>
      <div class="panel info">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        Panel content
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel primary&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel success&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel warning&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel danger&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel info&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <h3 id="panels-list-group">With list groups</h3>
    <p>Easily include full-width <a href="#list-group">list groups</a> within any panel.</p>
    <div class="bs-example">
      <div class="panel">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel heading</div>
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

        <!-- List group -->
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel&quot;</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;panel-heading&quot;</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>

  <span class="c">&lt;!-- List group --&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-group list-group-flush&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

  </div>





  <!-- Wells
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="wells">Wells</h1>
    </div>

    <h3>Default well</h3>
    <p>Use the well as a simple effect on an element to give it an inset effect.</p>
    <div class="bs-example">
      <div class="well">
        Look, I'm in a well!
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;well&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
    <h3>Optional classes</h3>
    <p>Control padding and rounded corners with two optional modifier classes.</p>
    <div class="bs-example">
      <div class="well large">
        Look, I'm in a well!
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;well large&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

    <div class="bs-example">
      <div class="well small">
        Look, I'm in a well!
      </div>
    </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;well small&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
  </div>

        </div>
      </div>

    </div>
<?php include('temps/footer.php');?>
