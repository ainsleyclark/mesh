<?php

//Page variables
$pageData = [
    'pageTitle' => 'Modal',
    'pageDescription' => 'mesh includes a pure CSS modal to easily display custom information & content via an animated popup section.',
    'activePage' => 'modal',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'centered' => 'Centered',
    'small' => 'Small',
    'large' => 'Large',
    'scroll' => 'Scroll',
    'javascript' => 'Javascript',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content modal-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Modals are notoriously difficult to accomplish with pure CSS. There are two ways of adding popup functionality, one through the <code class="inline">:target</code> selector, the other the <code class="inline">checkbox</code> method.
                        <br>We have opted to create our modals via the checkbox technique as having empty links on a page can hinder your SEO efforts. 
                        <br>Of course if you prefer to use vanilla JS for modals, there is a simple script you can you use at the bottom of this page. 
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <p class="secondary-lead"></p>
                        <ul class="list-line">
                            <li>There needs to be an action button & check box that links to the modal in order for it to appear.</li>
                            <li>To achieve this, add a <code class="inline">&lt;label&gt;</code> element with a <code class="inline">for</code> attribute. Then create a checkbox with the class <code class="inline">modal-toggle</code> and set the ID the same as the label.</li>
                            <li>If you wish to add multiple close buttons, just simply add more labels with the <code class="inline">for</code> attribute set equal to the ID of the checkbox.</li>
                            <li>The modal compromises of a <code class="inline">modal-container</code> to wrap the modal content, a <code class="inline">modal-header</code> for the title & close button, the <code class="inline">modal-body</code> for the main content & the <code class="inline">modal-footer</code> for action buttons.</li>
                            <li>The <code class="inline">modal-overlay</code> is entirely optional, if you wish to disable the close functionality, simply change the <code class="inline">&lt;label&gt;</code> to a <code class="inline">&lt;div&gt;</code></li> 
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Example:</h3>
                        <p class="secondary-lead">Click the modal button! The id's have been highlighted to see where you need to change them.</p>
                    </div>
                    <div class="modal-cont">
                        <label for="exampleModal" class="btn btn-secondary c-white">Click Me</label>
                        <input type="checkbox" class="modal-toggle" id="exampleModal">
                        <div class="modal modal-centered" aria-hidden="true">
                            <div class="modal-container">
                                <div class="modal-header">
                                    <h3>Modal Title</h3>
                                    <label class="modal-btn-close" for="exampleModal">
                                        <i class="fas fa-times"></i>
                                    </label>
                                </div>
                                <div class="modal-body">
                                    <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                                    <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn mr-2 btn-primary">Nice Story!</button>
                                    <label for="exampleModal" class="btn btn-secondary">Close</label>
                                </div>
                            </div>
                            <label for="exampleModal" class="modal-overlay"></label>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;label for=&quot;<strong>exampleModal</strong>&quot; class=&quot;btn btn-secondary c-white&quot;&gt;Centered&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;modal-toggle&quot; id=&quot;<strong>exampleModal</strong>&quot;&gt;

&lt;div class=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-container&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h3&gt;Modal Title&lt;/h3&gt;
            &lt;label class=&quot;modal-btn-close&quot; for=&quot;<strong>exampleModal</strong>&quot;&gt;
                &lt;i class=&quot;fas fa-times&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;An old man walked across the beach...&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button class=&quot;btn mr-2 btn-primary&quot;&gt;Nice Story!&lt;/button&gt;
            &lt;label for=&quot;<strong>exampleModal</strong>&quot; class=&quot;btn btn-secondary&quot;&gt;Close&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;label for=&quot;<strong>exampleModal</strong>&quot; class=&quot;modal-overlay&quot;&gt;&lt;/label&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Centered -->
                <article class="section-scroll" id="centered">
                    <h2 class="b-b-light hash">Centered</h2>
                    <p class="secondary-lead">
                        To center a modal in the middle of the viewport, just add the <code class="inline">modal-centered</code> class to the <code class="inline">modal</code>.
                    </p>
                    <div class="modal-cont">
                        <label for="centeredModal" class="btn btn-secondary c-white">Centered</label>
                        <input type="checkbox" class="modal-toggle" id="centeredModal">
                        <div class="modal modal-centered" aria-hidden="true">
                            <div class="modal-container">
                                <div class="modal-header">
                                    <h3>Modal Title</h3>
                                    <label class="modal-btn-close" for="centeredModal">
                                        <i class="fas fa-times"></i>
                                    </label>
                                </div>
                                <div class="modal-body">
                                    <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                                    <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn mr-2 btn-primary">Nice Story!</button>
                                    <label for="centeredModal" class="btn btn-secondary">Close</label>
                                </div>
                            </div>
                            <label for="centeredModal" class="modal-overlay"></label>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;label for=&quot;<strong>centeredModal</strong>&quot; class=&quot;btn btn-secondary c-white&quot;&gt;Centered&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;modal-toggle&quot; id=&quot;<strong>centeredModal</strong>&quot;&gt;

&lt;div class=&quot;modal modal-centered&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-container&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h3&gt;Modal Title&lt;/h3&gt;
            &lt;label class=&quot;modal-btn-close&quot; for=&quot;<strong>centeredModal</strong>&quot;&gt;
                &lt;i class=&quot;fas fa-times&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;An old man walked across the beach...&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button class=&quot;btn mr-2 btn-primary&quot;&gt;Nice Story!&lt;/button&gt;
            &lt;label for=&quot;<strong>centeredModal</strong>&quot; class=&quot;btn btn-secondary&quot;&gt;Close&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;label for=&quot;<strong>centeredModal</strong>&quot; class=&quot;modal-overlay&quot;&gt;&lt;/label&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Small -->
                <article class="section-scroll" id="small">
                    <h2 class="b-b-light hash">Small</h2>
                    <p class="secondary-lead">
                        As a <code class="inline">max-width</code> property has been set on the modal, there is no need to add any additional classes. These are great for small alert type modals.
                    </p>
                    <div class="modal-cont">
                        <label for="smallModal" class="btn btn-secondary c-white">Small</label>
                        <input type="checkbox" class="modal-toggle" id="smallModal">
                        <div class="modal" aria-hidden="true">
                            <div class="modal-container">
                                <div class="modal-header">
                                    <h3>Modal Title</h3>
                                    <label class="modal-btn-close" for="smallModal">
                                        <i class="fas fa-times"></i>
                                    </label>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to do this?</p>
                                </div>
                                <div class="modal-footer">
                                    <label for="smallModal" class="btn btn-secondary mr-1">Not really</label>
                                    <label for="smallModal" class="btn btn-primary">Yes</label>
                                </div>
                            </div>
                            <label for="smallModal" class="modal-overlay"></label>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;label for=&quot;<strong>smallModal</strong>&quot; class=&quot;btn btn-secondary c-white&quot;&gt;Small&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;modal-toggle&quot; id=&quot;<strong>smallModal</strong>&quot;&gt;

&lt;div class=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-container&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h3&gt;Modal Title&lt;/h3&gt;
            &lt;label class=&quot;modal-btn-close&quot; for=&quot;<strong>smallModal</strong>&quot;&gt;
                &lt;i class=&quot;fas fa-times&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;Are you sure you want to do this?&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;label for=&quot;<strong>smallModal</strong>&quot; class=&quot;btn btn-secondary mr-1&quot;&gt;Not really&lt;/label&gt;
            &lt;label for=&quot;<strong>smallModal</strong>&quot; class=&quot;btn btn-primary&quot;&gt;Yes&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;label for=&quot;<strong>smallModal</strong>&quot; class=&quot;modal-overlay&quot;&gt;&lt;/label&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Large -->
                <article class="section-scroll" id="large">
                    <h2 class="b-b-light hash">Large</h2>
                    <p class="secondary-lead">
                        To create a large modal, simply add the <code class="inline">modal-large</code> to the <code class="inline">modal</code> element. This will increase the maximum width to 700 pixels.
                    </p>
                    <div class="modal-cont">
                        <label for="largeModal" class="btn btn-secondary c-white">Large</label>
                        <input type="checkbox" class="modal-toggle" id="largeModal">
                        <div class="modal modal-large" aria-hidden="true">
                            <div class="modal-container">
                                <div class="modal-header">
                                    <h3>Modal Title</h3>
                                    <label class="modal-btn-close" for="largeModal">
                                        <i class="fas fa-times"></i>
                                    </label>
                                </div>
                                <div class="modal-body">
                                    <p>An elderly carpenter was ready to retire. He told his employer-contractor of his plans to leave the house-building business to live a more leisurely life with his wife and enjoy his extended family. He would miss the paycheck each week, but he wanted to retire. They could get by.</p>
                                    <p>The contractor was sorry to see his good worker go & asked if he could build just one more house as a personal favor. The carpenter said yes, but over time it was easy to see that his heart was not in his work. He resorted to shoddy workmanship and used inferior materials. It was an unfortunate way to end a dedicated career.</p>
                                    <p>When the carpenter finished his work, his employer came to inspect the house. Then he handed the front-door key to the carpenter and said, “This is your house… my gift to you.”</p>
                                    <p>The carpenter was shocked!</p>
                                    <p>What a shame! If he had only known he was building his own house, he would have done it all so differently.</p>
                                    <p>So it is with us. We build our lives, a day at a time, often putting less than our best into the building. Then, with a shock, we realize we have to live in the house we have built. If we could do it over, we would do it much differently.</p>
                                    <p>But, you cannot go back. You are the carpenter, and every day you hammer a nail, place a board, or erect a wall. Someone once said, “Life is a do-it-yourself project.” Your attitude, and the choices you make today, help build the “house” you will live in tomorrow. Therefore, Build wisely!</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn mr-2 btn-primary">Nice Story!</button>
                                    <label for="largeModal" class="btn btn-secondary">Close</label>
                                </div>
                            </div>
                            <label for="largeModal" class="modal-overlay"></label>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;label for=&quot;<strong>largeModal</strong>&quot; class=&quot;btn btn-secondary c-white&quot;&gt;Large&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;modal-toggle&quot; id=&quot;<strong>largeModal</strong>&quot;&gt;

&lt;div class=&quot;modal modal-large&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-container&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h3&gt;Modal Title&lt;/h3&gt;
            &lt;label class=&quot;modal-btn-close&quot; for=&quot;<strong>largeModal</strong>&quot;&gt;
                &lt;i class=&quot;fas fa-times&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;An elderly carpenter was ready to retire...&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button class=&quot;btn mr-2 btn-primary&quot;&gt;Nice Story!&lt;/button&gt;
            &lt;label for=&quot;<strong>largeModal</strong>&quot; class=&quot;btn btn-secondary&quot;&gt;Close&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;label for=&quot;<strong>largeModal</strong>&quot; class=&quot;modal-overlay&quot;&gt;&lt;/label&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>
                
                <!-- Scrolling -->
                <article class="section-scroll" id="scroll">
                    <h2 class="b-b-light hash">Scroll</h2>
                    <p class="secondary-lead">
                        If you have a large amount of content, the modal will automatically become scroll-able using the<code class="inline">overflow-y: auto;</code> property. Give it a go!
                    </p>
                    <div class="modal-cont">
                        <label for="scrollingModal" class="btn btn-secondary c-white">Scrolling Content</label>
                        <input type="checkbox" class="modal-toggle" id="scrollingModal">
                        <div class="modal" aria-hidden="true">
                            <div class="modal-container">
                                <div class="modal-header">
                                    <h3>Modal Title</h3>
                                    <label class="modal-btn-close" for="scrollingModal">
                                        <i class="fas fa-times"></i>
                                    </label>
                                </div>
                                <div class="modal-body">
                                    <p>In a small village, in the valley, lived a man who was always happy, kind, and well disposed to everyone he met. He always smiled, and had kind and encouraging words to say, whenever it was necessary. Everyone who met him, left feeling better, happier and elated. People knew they could count on him, and regarded him as a great friend.</p>
                                    <p>One of the village dwellers was curious to know what his secret was, and how he could always be so kind and helpful. He wondered, how is it that he held no grudge toward anyone, and always was happy.</p>
                                    <p>Once, upon meeting him in the street he asked him: "Most people are selfish and unsatisfied. They do not smile as often as you do; neither are they as helpful or kind as you are. How do you explain it?"</p>
                                    <p>The man smiled at him and replied, "When you make peace with yourself, you can be in peace with the rest of the world. If you can recognize the spirit in yourself, you can recognize the spirit in everyone, and then you find it natural to be kind and well disposed to all."</p>
                                    <p>"If your thoughts are under your control, you become strong and firm.</p>
                                    <p>The personality is like a robot programmed to do certain tasks. Your habits and thoughts are the tools and programs that control your personality. Become free from being programmed, and then, the inner good and the happiness that reside within you will be revealed."</p>
                                    <p>"But a lot of work is necessary. Good habits have to be developed. The ability to concentrate and to control the thoughts has to be strengthened. The work is difficult and endless. There are many walls that need to be to climbed. It is not an easy task." Lamented the villager.</p>
                                    <p>"Do not think about the difficulties, otherwise this is what you will see and experience. Just quieten your feelings and thoughts, and try to stay in this peace. Just try to be calm, and do not let yourself be carried away by your thoughts."</p>
                                    <p>"Is that all?" Asked the villager.</p>
                                    <p>"Try to watch your thoughts and see how they come and go. Stay in the quietness that arises. The moments of peace will be brief at first, but in time they will get longer. This peace is also strength, power, kindness, and love. In time, you will realize that you are one with the Universal Power, and this will lead you to act from a different dimension - point of
                                        view -consciousness, not from the selfish, small, limited ego."</p>
                                    <p>"I will try to remember your words," said the villager, and continued, "there is another thing that I am curious about. You do not seem to be influenced by the environment. You have a kind word for everyone, and you are helpful. People treat you well, and never exploit your goodness."</p>
                                    <p>"Being good and being kind do not necessarily point to weakness. When you are good, you can also be strong. People sense your inner strength, and therefore, do not impose on you. When you are strong and calm inside, you help people, because you can, and you want to. You act from strength, not from weakness. Goodness is not a sign of weakness, as some people
                                        erroneously think. It can manifest together with power and strength."</p>
                                    <p>"Thank you very much for your advice and explanations", said the villager, and went away happy and satisfied.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn mr-2 btn-primary">Nice Story!</button>
                                    <label for="scrollingModal" class="btn btn-secondary">Close</label>
                                </div>
                            </div>
                            <label for="scrollingModal" class="modal-overlay"></label>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;label for=&quot;<strong>scrollingModal</strong>&quot; class=&quot;btn btn-secondary c-white&quot;&gt;Scrolling Content&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;modal-toggle&quot; id=&quot;<strong>scrollingModal</strong>&quot;&gt;
&lt;div class=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-container&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h3&gt;Modal Title&lt;/h3&gt;
            &lt;label class=&quot;modal-btn-close&quot; for=&quot;<strong>scrollingModal</strong>&quot;&gt;
                &lt;i class=&quot;fas fa-times&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;In a small village, in the valley, lived a man who was always happy..&lt;/p&gt; 
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button class=&quot;btn mr-2 btn-primary&quot;&gt;Nice Story!&lt;/button&gt;
            &lt;label for=&quot;<strong>scrollingModal</strong>&quot; class=&quot;btn btn-secondary&quot;&gt;Close&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;label for=&quot;<strong>scrollingModal</strong>&quot; class=&quot;modal-overlay&quot;&gt;&lt;/label&gt;
&lt;/div&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Javascript -->
                <article class="section-scroll" id="javascript">
                    <h2 class="b-b-light hash">Javascript</h2>
                    <p class="secondary-lead">
                        If you wish to use Javascript instead of the checkbox technique, follow the notation below and be sure to use our demo JS code at the very bottom.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <p class="secondary-lead"></p>
                        <ul class="list-line">
                            <li>All thats required for the modal to work with JS is a button with the attribute <code class="inline">data-modal</code> set to the ID of the modal itself.</li>
                            <li>Be sure to add the hash tag to the data attribute.</li>
                            <li>The <code class="inline">modal-hide</code> class will dismiss the modal.</li>
                        </ul>
                    </div>
                    <div class="modal-cont">
                        <button data-modal="#meshjsmodal" class="btn btn-secondary nohover c-white">Javascript</button>
                        <div class="modal" id="meshjsmodal" aria-hidden="true">
                            <div class="modal-container">
                                <div class="modal-header">
                                    <h3>Modal Title</h3>
                                    <div class="modal-btn-close modal-hide">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                                    <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn mr-2 btn-primary">Nice Story!</button>
                                    <button class="btn btn-secondary modal-hide">Close</label>
                                </div>
                            </div>
                            <div class="modal-overlay modal-hide"></div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button data-modal=&quot;<strong>#meshjsmodal</strong>&quot; class=&quot;btn btn-secondary nohover c-white&quot;&gt;Javascript&lt;/button&gt;
&lt;div class=&quot;modal&quot; id=&quot;<strong>meshjsmodal</strong>&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-container&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h3&gt;Modal Title&lt;/h3&gt;
            &lt;div class=&quot;modal-btn-close modal-hide&quot;&gt;
                &lt;i class=&quot;fas fa-times&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;An old man walked across the beach...&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button class=&quot;btn mr-2 btn-primary&quot;&gt;Nice Story!&lt;/button&gt;
            &lt;button class=&quot;btn btn-secondary modal-hide&quot;&gt;Close&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;modal-overlay modal-hide&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <div class="text-cont">
                        <h3>Code:</h3>
                        <p class="secondary-lead">
                            Here we are looping through the buttons and adding a eventListener for clicks. When clicked the <code class="inline">modal-open</code> class is added to the modal, trigging the animation.
                            We then loop through the <code class="inline">modal-hide</code> classes and remove the class mentioned above on click.
                        </p>
                    </div>          
                    <pre class="highlight"><code class="javascript">document.addEventListener('DOMContentLoaded', function() {
    (document.querySelectorAll('[data-modal]') || []).forEach(function(button) {
        modal = document.querySelector(button.getAttribute('data-modal'));
        button.addEventListener('click', function() {
            modal.classList.add('modal-open');
        });
        (document.querySelectorAll('.modal-hide') || []).forEach(function(el) {
            el.addEventListener('click', function() {
                el.closest('.modal').classList.remove('modal-open');
            });
        });
    });
});
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <div class="text-cont">
                        <h3>Open/Close function:</h3>
                        <p class="secondary-lead">Its handy having open and close functions to call with JS, here's an example fragment for you to take away.</p>
                    </div>          
                    <pre class="highlight"><code class="javascript">//Open modal function
const closeModal = id => document.querySelector(id).classList.remove('modal-open');
//Close modal function
const openModal = id => document.querySelector(id).classList.add('modal-open');
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>

<?php function scripts()
{?>
<script>

let closeModal = id => document.querySelector(id).classList.remove('modal-open');
let openModal = id => document.querySelector(id).classList.add('modal-open');

document.addEventListener('DOMContentLoaded', function() {
    (document.querySelectorAll('[data-modal]') || []).forEach(function(button) {
        modal = document.querySelector(button.getAttribute('data-modal'));
        button.addEventListener('click', function() {
            modal.classList.add('modal-open');
        });
        (document.querySelectorAll('.modal-hide') || []).forEach(function(el) {
            el.addEventListener('click', function() {
                el.closest('.modal').classList.remove('modal-open');
            });
        });
    });
});
</script>
<?php }?>