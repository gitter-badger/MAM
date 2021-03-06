<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'4'},
      tree:{branch:'0'}
  };
</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <section id="above-fold" style="top:-22.75em"><!-- PHP:set this to ((0-(60+(24*(n+2))+16))/16) in em units where n is $('#resource-view-body > tr').length -->
            <div class="page-wrapper">
<?php get_settings_nav(); ?>
                <div class="resources">
                    <div data-title="Imagine this is a tree-like navigation component for traversing and browsing contexts">
                        <div id="resource-view">
                            <div id="resource-view-reactable">
                                <h4>
                                    <a href="#" title="Switch to another Context"><i class="fa fa-globe"></i></a>&nbsp;
                                    Resources
                                    <div class="codepath">
                                        <a href="#" class="preview" title="Preview this Document"><i className="fa fa-eye"></i></a>
                                        <pre title="Imagine this is interactive, terminal like with tab-to-complete">/web/</pre>
                                    </div>
                                </h4>
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <thead>
                                        <tr>
                                            <th>Resource</th>
                                            <th>Intro Text</th>
                                            <th>Last Edited</th>
                                        </tr>
                                    </thead>
                                    <tbody id="resource-view-body">
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Context Settings Concept"></i>&nbsp;<a href="#" title="ID: 2; Published">Context Settings Concept</a></td>
                                            <td>Mobile&ndash;first concept for editing Contexts</td>
                                            <td><time>15 days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Dashboard Concept"></i>&nbsp;<a href="#" title="ID: 1; Published"><strong>Dashboard Concept</strong></a></td>
                                            <td>Just Imagine if your Manager was like this</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="MAM Manifesto"></i>&nbsp;<a href="#" title="ID: 3; Published">MAM Manifesto</a></td>
                                            <td>Read the public declaration for MAM by JP DeVries</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="README"></i>&nbsp;<a href="#" title="ID: 4; Published"><strong>README</strong></a></td>
                                            <td>Contribution Guidelines</td>
                                            <td><time>Yesterday</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Resource Edit Concept"></i>&nbsp;<a href="#" title="ID: 5; Published">Resource Edit Concept</a></td>
                                            <td>Concept for editing Resources</td>
                                            <td><time>3 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Resource Edit Concept"></i>&nbsp;<a href="#" title="ID: 16; Published">Resources</a></td>
                                            <td>Concept for browsing resources</td>
                                            <td><time>3 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Settings Page Concept"></i>&nbsp;<a href="#" title="ID: 6; Published">Settings Page Concept</a></td>
                                            <td>Quickly&ndash;Editable Settings Concept</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Spectacular Docs"></i>&nbsp;<a href="#" title="ID: 7; Published">Spectacular Docs</a></td>
                                            <td>Some Sass</td>
                                            <td><time>Yesterday</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Users Page Concept"></i>&nbsp;<a href="#" title="ID: 8; Published">Users Page Concept</a></td>
                                            <td>Editing Users could be similar to settings</td>
                                            <td><time>4 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-folder" title="Posts"></i>&nbsp;<a href="#" title="ID: 9; Published">Posts</a></td>
                                            <td>We've written some stuff</td>
                                            <td><time>Yesterday</time></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav class="grid-nav">
                                <a href="resource-edit.php" title="Add a new Resource under the root Web Context"><i class="fa fa-plus-square"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
<?php get_main_nav(); ?>
            </div>
        </section>
        <div class="page-wrapper" style="padding-bottom:6em">
            <div class="dashbox">
                <div class="shell shell-readme">
                    <div class="box">
                        <h1 style="text-transform:none"><i class="fa fa-code-fork"></i><br>Contribution Guidelines</h1>
                        
                        <h3><i class="fa fa-child"></i>&nbsp;About <code data-enunciate="ma'am">MAM</code></h3>
                        <p>
                            <code data-enunciate="ma'am">MAM</code> is a series of conceptual proofs developed by @jpdevries<!-- mod<strong>more</strong> -->. These proofs aim to:
                        </p>
                        <ul style="padding-left:1.4em">
                            <li>
                                Give proof to what we think a <code data-enunciate="mod ex">MODX</code> Manager could be
                            </li>
                            <li>
                                Open&ndash;source and document the frameworks, toolkits and workflows used and created
                            </li>
                            <li>
                                Stay true to the best practices we hold close to heart
                            </li>
                        </ul>
                        <hr>
                        <h3>Best Practices</h3>
                        <p>
                            <code data-enunciate="mod ex">MODX</code> is responsive in nature because it is built mobile first along with progressive enhancement and <code>&lt;HTML&gt;</code> first best practices. All markup <strike>is</strike> <i>should be</i>:
                        </p>
                        <ul style="padding-left:1.4em">
                            <li>
                                <code>.no-js</code> complaint
                            </li>
                            <li>
                                <code>#a11y</code> friendly
                            </li>
                            <li>
                                beautified with Object-Oriented <code>Sass</code>
                            </li>
                            <li>
                                enhanced with React.js
                            </li>
                        </ul>
                        <!--h4>AJAX Enhancements</h4>
                        <p>Asynchronous components are enhanced with <code>React.js</code> and adhere to their original markup structure using the <code>jsx</code> syntax. Components have mutable state, meaning as components they have no knowledge of one another.</p-->
                        <br>
                        <!--h3>Simplifying the Tech Stack</h3>
                        <p>
                            This boilerplate theme uses no JS framework to render the view and therefore, can be enhanced freely by theme authors. As a developer, you'll be starting off with semantic HTML markup that can be visually customized through <code>Object-Oriented Sass</code> or plain <code>CSS</code> stylesheets. Asynchronous Interaction can even be customized or replaced entirely by implementing your own scripts. <code>React.js</code> is our <code>JavaScript</code> framework of choice, but the MODX API return abstract JSON that can be consumed however you wish. 
                        </p-->
                        <br>
                        <h3>Design Process</h3>
                        <p>
                            Ideally concepts, or pages, are conceptualized on paper or a whiteboard away from the computer. This is because computers are fancy and distracting and <a href="https://www.google.com/?q=cats&gws_rd=ssl#q=kittens&tbm=vid" target="_blank" class="apparent-link"><strong><i>kittens</i></strong></a>. Once we realize what we never would have using a mouse, semantic <code>HTML</code> is written, decorated using our layout and styling best practices and if necessary enhanced asynchronously with scripts. 
                        </p>
                        <hr>
                        <h3><code>#a11y</code></h3>
                        <br>
                        <h4>Optical Accommodations</h4>
                        <p>To support particular eye conditions, or even just coding at night we support a <a class="toggle-contrast"><code>body.inverted</code></a> mode that renders the Manager using dark flat backgrounds and near white text and border colors.</p>
                        <p>We support this with simple styles using an <a class="toggle-contrast"><code>.inverted</code></a> class on the <code>&lt;body&gt;</code>. Go ahead, <a class="toggle-contrast apparent-link">try it</a>.</p>
                        <pre class="js-rem"><code>
.my-component {
  background:lighten(purple,30%);
  color:purple;
  body.inverted & { // when in invert mode accommodate with high contrast
    background:transparent;
    color:$white; // in _vars.scss we define $white as a near-white value
  }
}
                        </code></pre>
                        <p class="sassmeister" data-gist-id="912d345fc695e7843186" data-height="480" data-theme="tomorrow"><a href="http://sassmeister.com/gist/912d345fc695e7843186">Play with this gist on SassMeister.</a></p><script src="http://cdn.sassmeister.com/js/embed.js" async></script><br>
                        <h4>Zoom Support</h4>
                        <p>When in doubt <strong>we use em units</strong>. This keeps the layout and font sizes scalable by the browser. Aside from setting image sizes, and maybe a <code>border-radius</code> here from there you won't find <code>px</code> values in the stylesheets.</p>
                        <hr>
                        <h3>Sass Practices</h3>
                        <p>
                            Some Sass libraries and tricks that are heavily used on this project:
                        </p>
                        <ul style="padding-left:1.4em">
                            <li>Silent Classes</li>
                            <li>Neat Layout</li>
                            <li>Bourbon Toolkit</li>
                            <li>Inline Media Queries</li>
                        </ul>
                        <br>
                        <h4>Silent Classes</h4>
                        <p>Sass allows us to reuse our code using silent classes much like MODX does with Chunks. Say we find ourselves repeatedly making areas of our page more readable using some basic CSS. We can make a reusable <code>%legible</code> silent class that can be easily referenced. Using silent classes also helps optimize your CSS because selectors with the same declarations will be grouped together.</p>
                        <div class="js-rem">
                            <pre><code>
    .my-div p {
      max-width:42em; /* don't let lines get too wide */
      line-height:1.6em; /* keep things legible */
    }

    /* somewhere else in our stylesheet */
    .another-div p {
      max-width:42em; /* don't let lines get too wide */
      line-height:1.6em; /* keep things legible */
    }
                            </code></pre>
                            <p>We can move our re-usable code to a silent class called %legible.</p>
                            <pre><code>
    %legible {
      max-width:42em; /* don't let lines get too wide */
      line-height:1.6em; /* keep things legible */
    }
                            </code></pre>
                            <p>Now that we have a silent class, we can use it in multiple locations.</p>
                            <pre><code>
    .my-div p {
      @extend %legible;
    }

    .another-div p {
      @extend %legible;
    }
                            </code></pre>       
                        </div>

                        
                        <p class="sassmeister" data-gist-id="285eb801f2404e8c8732" data-height="480" data-theme="tomorrow"><a href="http://sassmeister.com/gist/285eb801f2404e8c8732">Play with this gist on SassMeister.</a></p><script src="http://cdn.sassmeister.com/js/embed.js" async></script>
                        
                        <p>Notice not only does this allow us to keep our <code>Sass</code> source styles Object-Oriented, it also optimizes our stylesheets by combining selectors. When Sass generates the CSS all elements that use the same silent classes are grouped together rather than re-printing many of the same styles under multiple declarations.</p>
                        <p>Now silent classes don't support passing arguments. Remember, they simple print the same code across multiple selectors. If you are looking to adjust output using parameters, see Sass mixins.</p>
                        <hr>
                        <h4>Layout Principles</h4>
                        <p>The first draft of these concepts did not use modern layout technologies but they quickly became imperative when the flexibility of well, flexible boxes was realized. We use <code>flexbox</code> and <strong>there is no polyfill</strong>. <a href="https://github.com/doctyper/" class="apparent-link">doctyper</a> on Github wrote a polypill for the 2009 spec, and rumor had it he was working on updating it for the 2014 spec, but I'm assuming <a href="https://github.com/doctyper/reflexie/issues/36" class="apparent-link">he's probably given up</a>.</p>
                        <p>Nevertheless, flexbox is <a href="http://html5please.com/#flexbox" class="apparent-link">safe to use</a>. <code data-enunciate="mod ex">MODX</code> Layout is written mostly with the <a href="http://bourbon.io/docs/#flexbox" class="apparent-link">Bourbon Flexbox syntax</a> so you won't see many floats or any bootstrap classes. Let's have a look at an example of how flexbox is used to create a flexible container whose children intuitively size themselves according to available space and a few&nbsp;parameters.</p>
                        
                        
                        
                        
                        <pre class="js-rem"><code>
.dashbox {
    @include display(flex); // be a flex container
    @include flex-direction(row); // lay children out horizontally
    @include flex-wrap(wrap); // allow wrapping
    .shell { // now for the children
        @include flex(1 1 auto); // be flexible (grow, shrink, auto basis)
        @include display(flex); // our children are also flex parents themselves
        &.shell-greedy { // greedy boxes, these take up a whole row no matter what
            @include flex(1 0 100%); // grow, don't shrink, 100 basis
        }
        &.shell-contexts {
            @include flex(0 1 28em); // we allow this component to shrink down to 28em and not grow (don't grow shrink 28em basis)
        }
        .box { // within shell, basically same concept as min-height:100%
            @include display(flex); // be a flex container
            @include flex-direction(column); // lay "children" (it is the only child) out vertically
            @include flex(1 1 auto); // be flexible (grow shrink auto basis)
        }
    }
}
                        </code></pre>
                        
<p class="sassmeister" data-gist-id="67000947f6550ce08128" data-height="480" data-theme="tomorrow"><a href="http://sassmeister.com/gist/67000947f6550ce08128">Play with this gist on SassMeister.</a></p><script src="http://cdn.sassmeister.com/js/embed.js" async></script>
<br>
    <h4>Pretty crazy right?</h4>
                        <p>The syntax is disgusting, the flexible box model can take some time, and then more time, to understand but the <a href="index.php" class="apparent-link">layouts that can be achieved</a> are unmatched. I find myself describing, sometimes even writing the principle of the layout I'm looking for down and then translating it. For example, "I'd like all children to be laid out horizontally, be flexible by growing and shrinking their width and take up all remaining space as needed."</p>
                        <hr>
                        <h4>Floats</h4>
                        <p>Flexbox is great, and can replace floats entirely but we don't have to take it to that extreme. <code data-enunciate="mod ex">MODX</code> uses the Neat Sass Library which allows us to <a href="http://neat.bourbon.io/examples/" class="apparent-link">create column based layouts</a> easily. You'll see <code>.focus</code>, <code>.primary</code>, and <code>.secondary</code> classes used. Focus is a wrapper class that clears floats. Primary can be thought of as your typical "left side" with secondary being the right. So, for a simple two column layout we might have:</p>
<pre class="js-rem"><code>.focus {
  @include outer-container(); // default 12column grid
  .primary {
    @include span-columns(6); // take up half
  }
  .secondary {
    @include span-columns(6); // talk up the other half
  }
}</code></pre>

<p class="sassmeister" data-gist-id="523455ef5fb32333e541" data-height="480" data-theme="tomorrow"><a href="http://sassmeister.com/gist/523455ef5fb32333e541">Play with this gist on SassMeister.</a></p><script src="http://cdn.sassmeister.com/js/embed.js" async></script>

<p>When using <code>@include outer-container()</code> your element will have a <code>max-width</code> set. You can prevent a <code>max-width</code> from being added using <code>@include outer-container(none)</code> or our silent shortcut <code>@extend %outer-container;</code></p>
                        <hr>
                        <h4>Inline Media Queries</h4>
                        <p>Media Queries are often found within elements themselves, rather than all in one location. For example:</p>
<div class="js-rem">
                            <pre><code>p {
      @include media($mobile) {
        font-size:1.2em;
        line-height:1.4em;
      }
    }</code></pre>
    <p>translates to:</p>
    <pre><code>
      @media screen and (max-width: 640px) {
        p {
          font-size:1.2em;
          line-height:1.4em;
        }
      }</code></pre>
</div>
<p class="sassmeister" data-gist-id="acaf591243a1c83e57db" data-height="480" data-theme="tomorrow"><a href="http://sassmeister.com/gist/acaf591243a1c83e57db">Play with this gist on SassMeister.</a></p><script src="http://cdn.sassmeister.com/js/embed.js" async></script><br>
<p>In <code>global/_vars.scss</code> you'll find the breakpoint variables such as <code>$mobile</code>. Contrary to the above example, we actually tend to write our styles mobile first, and then use <code>@include media($gtMobile)</code> for any desktop overrides. This is mobile-first style of breakpoints makes it possible for the media query polyfill to add support to legacy browsers.</p>
<hr>
<h4>Branding Colors</h4>
<p>We make it easy to store and get groups of colors using a <code>Sass</code> map stored in <code>global/_vars.scss</code>. For example:</p>
<pre><code>color:map-get(map-get($brands,modmore),green);
</code></pre>
<pre><code>$brands:(
  modx:(
    color:#1FABD6,
    blue:#1FABD6,
    green:#539E43,
    red:#E32929,
    orange:#F4874A,
    lightGreen:#ACCF52,
    lightBlue:#8FC4E0
  ),
  modmore:(
    color:#1f4a7f,
    blue:#1f4a7f,
    orange:#ff8f0d
 ),
 sass:(
    color:#c69,
    pink:#c69,
    blue:#036
 ),
 facebook:(color:#3b5998),
 twitter:(color:rgb(85,172,238)),
 css3:(color:#1672B6),
 slack:(color:#e30071),
 github:(color:#333333),
 googleplus:(color:#dd4b39),
 instagram:(color:#517fa4),
 kickstarter:(color:#76cc1e),
 lanyrd:(color:#152e51),
 lastfm:(color:#d51007),
 linkedin:(color:#007bb6),
 photodrop:(color:#cdb6e3),
 pinterest:(color:#cb2027),
 rdio:(color:#0088da),
 soundcloud:(color:#f60),
 vimeo:(color:#aad450),
 youtube:(color:#b00),
 rss:(color:#FE8F23,orange:#FE8F23)
);
</code></pre>
                    </div>
                </div>
            </div>

        </div>
<script>
[].map.call(document.querySelectorAll('.toggle-contrast'), function(el){
    el.classList.add('clickable');
    el.addEventListener('click',function(e){
        e.preventDefault();
        document.body.classList.toggle('inverted');
    });
});
</script>
<?php get_footer(); ?>
</body></html>
