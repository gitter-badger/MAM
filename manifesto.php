<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'3'},
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
                                    <td><i class="fa fa-file-text-o" title="Dashboard Concept"></i>&nbsp;<a href="#" title="ID: 1; Published">Dashboard Concept</a></td>
                                    <td><strong>Just Imagine if your Manager was like this</strong></td>
                                    <td><time>Today</time></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-file-text-o" title="MAM Manifesto"></i>&nbsp;<a href="#" title="ID: 3; Published"><strong>MAM Manifesto</strong></a></td>
                                    <td>Read the public declaration for MAM by JP DeVries</td>
                                    <td><time>Today</time></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-file-text-o" title="README"></i>&nbsp;<a href="#" title="ID: 4; Published">README</a></td>
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
<?php get_play_controls(); ?>
<?php get_main_nav(); ?>
            </div>
        </section>
        <div class="page-wrapper" style="padding-bottom:6em">
            <div class="dashbox">
                <div class="shell shell-legible shell-readme">
                    <div id="manifesto" class="box speakable" data-transcript="manifesto">
                        <h1 style="text-transform:none"><i class="fa fa-bullhorn clickable speaker-btn"></i><br>Manifesto <div><code class="subtle unspeakable" style="position:absolute;top:0;right:0;opacity:1"><a href="http://twitter.com/MODX" target="_blank" title="Follow MODX on Twitter">#MODX</a></code></div></h1>
                        
                        <h3><i class="fa fa-child"></i>&nbsp;About MAM</h3>
                        <p>
                            <code data-enunciate="ma'am">MAM</code> (More Accessible Manager) is a series of conceptual proofs developed by @jpdevries<!-- mod<strong>more</strong> -->. These proofs aim&nbsp;to:
                        </p>
                        <ul style="padding-left:1.4em">
                            <li>
                                Prove how we think a <code>MODX 3<span class="unspeakable">.x</span></code> Manager could allow you to author the web
                            </li>
                            <li>
                                Value creative freedom while building accessible interfaces
                            </li>
                            <li>
                                Be all <a href="#">OpenSource</a> about it&nbsp;<i class="fa fa-github"></i>
                            </li>
                        </ul>
                        <br>
                        <h3>But Why, <code data-enunciate="ma'am">MAM</code>?</h3>
                        <p>We <i class="fa fa-heart-o" data-enunciate="love"></i> <code data-enunciate="mod ex">MODX</code> and the creative freedom it provides the worldwide community. We want each day of creating content in <code data-enunciate="mod ex">MODX</code> to be easier than the last. This project focuses on creating extremely accessible web components through an open research and development project. With these little bitty bits, we've already begun <a href="index.php" class="apparent-link" title="Concept of a MODX \"3.0\" Dashboard">imagining the interfaces</a> we hope to use. While a more accessible <code data-enunciate="mod ex">MODX</code> Manager is where this <span style="color:red">r</span><span style="color:orange">a</span><span style="color:yellow">i</span><span style="color:green">n</span><span style="color:blue">b</span><span style="color:indigo">o</span><span style="color:violet">w</span> leads, much of our focus will be on providing abstract front end tools, best practices, tutorials and conversations. So welcome; whether you are an avid <code data-enunciate="mod ex">MODX</code>'er&nbsp;or&nbsp;not.</p>
                        
<blockquote style="border-color:transparent">
    We challenge oursleves to work within the limitations proposed by the browser while maintaining our commitment to allowing anyone to easily publish content using our tools.
</blockquote>

<aside class="subtle smaller unaligned lowercase unspeakable"><i class="fa fa-clock-o"></i><br>This post is about a five minute read and can be <a id="listened-to-as-well" class="apparent-link">listened to</a> as&nbsp;well</aside>
                        
                        <hr>
                        <h3>Best Practices&nbsp;<i class="fa fa-thumbs-up speakable-tip" title="We think a better web for everyone is a better web for everyone."></i></h3>
                        <p>
                            <code data-enunciate="ma'am">MAM</code> is responsive and accessible in nature because it is built mobile first along with progressive enhancement and <code>&lt;HTML&gt;</code> first <a href="#" class="apparent-link">best practices</a>. All markup <strike>is</strike> <i>should be</i>:
                        </p>
                        <ol style="padding-left:2em">
                            <li>
                                authored to be <a href="http://a11yproject.com"><code>#a11y</code></a> friendly
                            </li>
                            <li>
                                beautified with Object-Oriented <code class="sass">Sass</code>
                            </li>
                            <li>
                                enhanced with <a href="#" class="facebook"><code>React.js</code></a>
                            </li>
                        </ol>
                        <!--blockquote style="border-color:transparent">A web for everyone is a better web for everyone</blockquote-->
                        <p>&#8220;But you said Creative Freedom, now you say I have to use these tools?&#8221; Now hold onto that tomato (hopefully it's organic) and first let me explain that one of the founding principles of <code data-enunciate="ma'am">MAM</code> is that it doesn't stricly require anything other than the <code class="html5">HTML5</code> <code>doctype</code>. You don't have to use <code class="sass">Sass</code>. Nor do you have to use <code>React.js</code> to enhance your markup, but you probably will want to.<!--By combining  <code>React.js</code> with <code data-enunciate="ma'am">MAM</code> we think you'll get the <i class="fa fa-dot-circle-o"></i>&nbsp;react<strong>ion</strong> you've been looking for.--> We've chosen tools like these to help keep our codebase <code title="Do Not Repeat Yourself">DRY</code> and if you follow along with our workflow you can achieve similar results; but <i>you don't have to</i>.</p>
<p><code data-enunciate="ma'am">MAM</code> gives you nice tools that do fancy things but what we are most excited about is releasing the findings of this R&amp;D project through tutorials, concepts and documentation. We draw inspiration from open-source projects like <a href="http://ionicframework.com/" class="apparent-link">Ionic Framework</a> that <a href="http://ionicframework.com/blog/where-does-the-ionic-framework-fit-in/">help promote recommended design patterns and document best&nbsp;practices</a>.</p>
                        <hr>
                        <h4><i class="fa fa-code"></i>&nbsp;First Things First</h4>
                        <p>Architecting the front end of our interfaces <code>&lt;HTML&gt;</code> and mobile first isn't just about ensuring our <a href="http://a11yproject.com/about.html" target="_blank" class="apparent-link">pages are accessible</a>. We must find a way to work within the limitations proposed by the browser while maintaining our <strong>commitment to allowing anyone to easily publish content</strong> using our tools. To do this we revert our technology stack back to the ubiquity of <code>&lt;HTML&gt;</code> and web standards. Our views are initially drawn with <code>&lt;HTML&gt;</code> markup and then enhanced asynchronously with&nbsp;scripts. This differs from allowing <code>JavaScript</code> to author and populate the <code>DOM</code> for us. We are free to enhance, mutilate, alter or entirely replace our source markup. The key principle of <code data-enunciate="ma'am">MAM</code> is that <i>there is source markup</i>.</p>
<!--p>For a moment, travel back with me to the Art Institute Portland around 2006. I'm a Graphic Design student whose just started taking some Web Development electives. Week 1 of my basic <code>&lt;HTML&gt;</code> class with <a href="https://www.linkedin.com/pub/chris-rohde/0/416/34" target="_blank">Chris Rohde</a> changed not only my career but my values as a digital creative. We were instructed to remove the shortcut to Dreamweaver from our desktops and not open the app for the remainder of the term. Every character of every assignment was to be written manually. He taught us the web is a fabric that everyone feels and we must sit there and tediously master the art of threading the needle. It wasn't about how many users have JavaScript enabled or a debate about the fundamental importance of accessibility; it was about understanding and mastering the one thing we feed browsers to generate experiences, <code>&lt;HTML&gt;</code>.</p>
<p><code data-enunciate="ma'am">MAM</code> markup will be under our governance because we hold ourselves to the standard of self-authoring markup for the&nbsp;experience. Concepts are submittable as wireframes or <code>HTML</code> and nothing more because by dropping our carefully crafted markup into our <code data-enunciate="ma'am">MAM</code> wrapper, we should be able to experience is as expected..</p-->
<br>

<h4><i class="fa fa-spin fa-circle-o-notch"></i>&nbsp;Asynchronous Enhancements</h4>
<!--p>If you are coming from <code>MODX Revo 2.x</code>, this may be a different approach. >We don't use <code>JSON</code> or <code>scripts</code> to author our markup. We author markup manually before doing anything else.</p-->

<!--div class="flex">
    <div>
        <h5>Lifecycle of an Ion Components</h5>
        <ol>
            <li>
                <code>&lt;HTML&gt;</code>
            </li>
            <li>
                <code>{CSS}</code>
            </li>
            <li>
                <code>{js};</code>
            </li>
        </ol>
    </div>    
</div-->

<p>We use scripts to enhance our GUI when needed, rather than to construct and control every aspect of it.</p>

<blockquote style="border-color:transparent">MAM views are drawn first from accessible markup then enhanced asynchronously with&nbsp;scripts.</blockquote>

<p>
     In other words you won't be writing your user experiences in <code>JSON</code> with your fingers crossed. When markup is enhanced and asynchronous features are added <i>we</i> like to do so with <code>React.js</code>. Following along with us, you can too. You'll hear the concept of mutable components tossed around a lot, both here and at the <a href="#"><code>React.js</code></a> <a href="#" class="apparent-link">docs</a>. We'll get into that later. The key thing to understand is we try to build individual components that have no inherent knowledge or relationship to one another. It's kind of cool though; the dumber we make our components the better job we&nbsp;do.</p>

<blockquote cite="http://devries.jp">
    <a href="#" class="twitter subtle"><i class=" fa fa-twitter"></i></a>
    <br><br>
&#8220;If any page, component, or necessary interaction of our user's experience isn't accessible as plain markup <span style="">we've&nbsp;failed</span>.&#8221;&emsp;&emsp;<code class="subtle">#a11y</code><cite>&emsp;&emsp;&mdash;&emsp;&emsp;<span style="font-style:normal">@jpdevries</span></cite>
    <br><br>
    <a href="#" class="twitter subtle"><i class=" fa fa-retweet"></i></a>
</blockquote>
<script>

</script>
<p>Markup isn't scary. Neither is the synchronicity of traditional hypertext pre-processing. These are tools with limitations like any other. By adhering to and respecting the limitations throughout our process, we are rewarded with more than just a pat on the back from the <a class="code">#a11y</a> crowd. Our app is functional <i>immediately</i>. Why? <code>&lt;HTML&gt;</code>. Our <code>&lt;form&gt;</code> elements have accessible <code>action</code> attributes that degrade to being processed with <code>&lt;form action&gt;</code> like it's 1999 and yes, we plan to keep partying that&nbsp;way.</p>
<p>This isn't just about making things accessible to users without <code>JavaScript</code> enabled. Nor is it just about snappiness, responsiveness, and reliability of our web app. Yes, the user's experience is accessible immediately; it couldn't be snappier. Yes, if you're on a mobile device and just waiting to make a simple change there's no need to wait on internal or external scripts to load and <a href="https://www.google.com/search?client=safari&rls=en&q=undefined+is+not+a+function&ie=UTF-8&oe=UTF-8" target="_blank" onclick="(function() { var a = ['We couldn\'t figure out how to generate the markup from the server so just hold tight hopefully we don\'t run into any semicolons&hellip;','Arnold forgot a semicolon in the JavaScript, people can\'t buy products anymore.','you probably wish undefined was an object right now'
]; for(var i = 0; i < Math.random() * 3; i++) { alert(a[i]); } }());return false;" class="apparent-link">hope your app works</a> once they do. <code>jQuery CDN</code> down? Doesn't matter. Some other script causing a fatal error? Doesn't matter. But that's not what matters either.</p>

<blockquote style="border-color:transparent">Most of the code that makes <code data-enunciate="ma'am">MAM</code> really nice is already in your modern browser.</blockquote>

<p><code>&lt;HTML&gt;</code> is what matters. It is the fabric our user feels as they experience the interface we custom tailored for them. We can't design for this experience without focusing on our markup. We need to have control over how and where our fabric is made. We weave it ourselves. If we accept this in our process I doubt we will find ourselves <a href="#" class="apparent-link">crowdsourcing solutions</a> to lack of accessibility down the line because we'll be <i>designing within the limitations put forth by the lowest common denominator of our tech stack</i> from start&nbsp;to&nbsp;finish.</p>
<hr>
<h3>Looking Forward&nbsp;<i class="fa fa-chevron-circle-right"></i></h3>
    <p><code>ExtJS</code> was likely the right tool to build the MODX Revolution 2.x manager interface years ago. It offers many very useful components and powers most all of the Manager in one way or another. The issue is that <i>it powers most all of the Manager in one way or another</i> while staking ownership over much of the <code>DOM</code>. The other problem is we shouldn't build web tools for yesterday or even&nbsp;
<time id="looking-forward-time">today</time>.</p>

<blockquote style="border-color:transparent">Every single piece of software ever is always out&nbsp;of&nbsp;date.</blockquote>

<p>The web is always changing. A lot of amazing new features like media queries and new input types have been added to both the <code>HTML5</code> and <code>CSS3</code> specs since <code>ExtJS</code> was chosen to power the Manager years ago. Unfortunately with the <code>2.x</code> default theme, these modern technologies can't feasibly be integrated. <!---With a <code>JavaScript</code> framework governing the layout of the entire app binding <code>resize</code> listeners and inline styling as if the <code>CSS</code> box model doesn't even exist the user experience feels like an after&nbsp;thought. -->So what could we do differently given the clean slate&nbsp;of&nbsp;a <code>3.x</code>? <code data-enunciate="mod ex">MODX</code> Developers the world over are fully aware they've stumbled upon the best backend Content Management System around. Let's create tailor&ndash;made front end components so smooth people barely realize they are using them. Let's focus on:</p>

<ul style="padding-left:1em">
    <li>considering all devices and users as equally relevant in need to access and post the experiences we provide</li>
     <li>creating components like this one that <a href="javascript:($('#manifesto .speaker-btn').click())" class="apparent-link">can be listened to</a></li>
     <li>creating pages like this one that can be <a href="javascript:($('body').toggleClass('inverted'))" class="apparent-link">inverted</a> to increase contrast</li>
     <li>using flexible layouts that respond well to user's font-size preferences</li>
     <li>forgetting about &#8220;<a>the fold</a>&#8221;</li>
     <li>not hiding important actions under contextual menus</li>
     <li>proving the concept of <a href="#" title="" class="apparent-link">js&ndash;drivers</a></li>
     <li>&#8220;counting the clicks&#8221; required for any user interaction</li>
     <li><a href="#" class="apparent-link">other stuff</a> too</li>
</ul>
    
<p>Our hope is that we can have that ongoing discussion openly here and from it actualize the front end web components of our dreams.</p>

<!--blockquote style="border-color:transparent">Ion helps us make user experience a forethought and build web apps together that are tailored toward what the web&nbsp;will&nbsp;become.</blockquote-->

<!--blockquote style="border:none">Think less thing that does everything and more things that do one thing&nbsp;each.</blockquote-->

<p>Web standards guide best practices for designers worldwide. <!--The <code data-enunciate="mod ex">MODX</code> Revolution project suffers today from not starting its design process with anything but web standards. -->Built upon web standards, <code data-enunciate="ma'am">MAM</code> has no expiration date and helps us make user experience a forethought. Together, we can build web apps that are tailored toward the infinite horizon of web standards. Web Browsers update themselves frequently and often automatically. We make use of modern technology using progressive enhancement. <a href="http://www.w3.org/TR/html5/"><code>&lt;HTML&gt;</code></a>, <a href="http://www.w3.org/TR/2001/WD-css3-roadmap-20010523/"><code>CSS3</code></a>, and <a href="https://people.mozilla.org/~jorendorff/es6-draft.html"><code>JavaScript</code></a> all have  different specs and roadmaps. We were reminded of this when <code>CSS3</code> added media queries which led to responsive layouts. This caused the layout system used by <code>MODX Revo 2.x</code> to become irrelevant overnight<!-- yet years later we still have a <code>JavaScript</code> framework preventing us from using modern <code>CSS3</code> technologies in standard components-->. This is why it is important to ensure that one area of our technology stack doesn't overly influence&nbsp;another.   <!-- While <code>React.js</code> is our asynchronous weapon of choice it is a goal of ours that you'll be free to another if you choose to&nbsp;do&nbsp;so. The best way to avoid this dilemma is to author our interface(s) with semantic <code>&lt;HTML&gt;</code> markup. --></p>
<!--ul>
    <li>Create Wireframes often sketched first</li>
    <li>Create Clickable Prototypes</li>
    <li>Identify Individual, Mutable Components within our Wireframes</li>
</ul-->
<hr>

<h3>Yes MAM&nbsp;<i class="fa fa-thumbs-o-up"></i></h3>
<p>We think we've managed to stumbled upon something. <a class="apparent-link" href="mailto:jp@modmore.com?subject=Ion%20Framework">Do&nbsp;you</a>?<br>Whether you are with us or against us, we could use your help. In all seriousness, we welcome critique and need your perspective from any constructive angle.<!-- We even keep a welcome <code>&lt;RANT&gt;</code> mat at our front door.--></p>
<p><code data-enunciate="ma'am">MAM</code> is in an early but rapid stage of development and has not yet been released on <a href="http://github.com/jpdevries/ion" class="apparent-link">GitHub</a>. For now please consider <a href="#">joining the mailing list</a> and checking out our <a href="http://forums.modx.com" class="apparent-link">Forum Thread</a> over at the <a href="http://forums.modx.com" class="apparent-link">MODX Forums</a>.</p>
<footer class="unaligned">
    <p class="subtle" style="margin-bottom:0"><small style="text-transform:lowercase">&mdash;&emsp;Thank you for your time&emsp;&mdash;</small></p>
</footer>
                    </div>
                </div>
            </div>
            <div class="dashbox">
                <div class="shell-legible shell-sign-manifesto shell">
                    <div class="box">
                        <h3 class="speakable-tip" title="We would appreciate your support. Please consider signing this manifesto below. YOLO.">Sign the Manifesto&nbsp;<i class="fa fa-bullhorn twitter" style="color:inherit"></i></button></h3>
                        <form style="margin-top:1em" style="js-dep">
                            <fieldset style="padding:0;margin-left:0;margin-right:0">
                                <script>document.write('<textarea rows="4" maxlength="140">I just signed the Ion Manifesto for a better user experience. http://dv.jp/2r52 #MODX @jpdevries</textarea>');</script>
                                <noscript>
                                    <input disabled type="text" placeholder="I just signed the Ion Manifesto for a better user experience. http://dv.jp/2r52 #MODX @jpdevries" />
                                </noscript>
                                <h4 class="unaligned" style="margin-top:1.5em">
                                    <input type="checkbox" id="web-everyone" name="web-everyone" value="1" checked disabled /><label for="web-everyone" style="display:inline;font-size:1.05em;text-transform:lowercase">&nbsp;Yes <code data-enunciate="ma'am">MAM</code>, the web is for everyone</label>
                                </h4>                                
                                <button id="signature-btn" style="margin-top:1.5em" class="larger twitter"><a href="http://twitter.com/home?status=I%20just%20signed%20the%20Ion%20Manifesto%20for%20a%20better%20user%20experience.%20http%3A%2F%2Fdv.jp%2F2r52%20%23MODX%20%40jpdevries" class="twitter-link">Tweet your Signature&nbsp;<i class="fa fa-twitter twitter" style="color:inherit"></i></a></button>
                                <script>
                                  document.getElementById('signature-btn').disabled = true;
                                  document.getElementById('web-everyone').disabled = document.getElementById('web-everyone').checked = false;
                                  
                                  document.querySelector('#web-everyone').addEventListener('change',function() {
                                       document.getElementById('signature-btn').disabled = !this.checked;
                                  });
                                </script>
                            </fieldset>
                            <!--script>document.write('<button style="margin-top:0.5em" class="larger twitter">Tweet your Signature&nbsp;<i class="fa fa-twitter twitter" style="color:inherit"></i></button>');</script-->
                        </form>
                        <!--noscript>
                            <a href="http://twitter.com/home?status=I%20just%20signed%20the%20Ion%20Manifesto%20for%20a%20better%20user%20experience.%20http%3A%2F%2Fdv.jp%2F2r52%20%23MODX%20%40jpdevries"><button style="margin-top:0.5em" class="larger twitter">Tweet your Signature&nbsp;<i class="fa fa-twitter twitter" style="color:inherit"></i></button></a>
                        </noscript-->
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
<script>
    $(document).ready(function(){
        setInterval(function(){
            $('#looking-forward-time').text(new Date())
        },500);
        $('#listened-to-as-well').on('click',function(event){
            event.preventDefault();
            event.stopPropagation();
            $('#manifesto').find('.speaker-btn').click();
            //$('#manifesto').data('plugin_speakable').yourOtherFunction();
        });
    });
</script>
</body></html>
