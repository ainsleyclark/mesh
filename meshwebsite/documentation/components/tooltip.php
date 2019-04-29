<?php

//Page variables
$pageData = [
    'pageTitle' => 'Tooltip',
    'pageDescription' => '',
    'activePage' => 'tooltip',
    'parentDirectory' => basename(__DIR__)
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<style>
    code{
        background-color:lightgrey;
        wordwrap:break-word;
    }
    .temp-btn{
        color:blue;
    }
    .temp-btn:hover{
        color:blue;
    }
</style>
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="mb-2">Tool Tips</h1>
                <div class="lead">To Add Tool Tips To Any Element add -> data-tool-tip="tool tip text"</div>
                <!-- How to add a tooltip -->
                <h2>There are 2 ways to add tool tips to elements</h2>
                <ol>
                    <li style="margin-top:40px;margin-bottom:40px;font-weight:800;">Default tooltip all you need to do is add the data-tool-tip attribute to any element</li>
                        <p>By default this will add a black background and white text tooltip when you hover over said element.</p>
                        <p>Example - plain tool tip</p>
                        <code style="margin-bottom:5px;">
                        &lt;div data-tool-tip="A tool tip"&gt; Tool Tip Div &lt;/div&gt;
                        </code>
                        <div data-tool-tip="A tool tip">HOVER OVER ME</div>
                    <li style="margin-top:40px;margin-bottom:40px;font-weight:800;">Styled tool Tip</li>
                    <p>You can style a tool tip one of 2 ways, by adding one of the default classes or by adding the style="--tooltip-{var}=X;"</p>
                    <br/>
                    <h2 style="font-size:2.3em;">Color Classes</h2>
                    <table style="width:100%; border-color:grey;">
                        <tr style="text-align:center; border-color:grey;">
                            <th >Class</th>
                            <th >Text Color</th> 
                            <th >Background Color</th>
                        </tr>
                        <tr style="text-align:center;">
                            <td >.tool-light</td>
                            <td >Black</td> 
                            <td >White</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td >.tool-dark</td>
                            <td >Black</td> 
                            <td >White</td>
                        </tr>
                    </table>
                    <div>
                        <h4>Light tool tip</h4>
                        <code>&lt;div class="tool-light" data-tool-tip="A tool tip"&gt; Tool Tip Div &lt;/div&gt;</code>
                        <div class="tool-light" data-tool-tip="light tool tip">HOVER OVER ME - Light</div>
                        <br />
                        <h4>Dark tool tip</h4>
                        <code>&lt;div class="tool-light" data-tool-tip="A tool tip"&gt; Tool Tip Div &lt;/div&gt;</code>
                        <div class="tool-dark" data-tool-tip="dark tool tip">HOVER OVER ME - dark</div>
                       <br />
                        <hr>
                        <br />
                        <h2 style="font-size:2.3em;">Positioning Classes</h2>
                            <table style="width:100%; border-color:grey;">
                                <tr style="text-align:center; border-color:grey;">
                                    <th >Class</th>
                                    <th >Description</th> 
                                </tr>
                                <tr style="text-align:center;">
                                    <td >.top</td>
                                    <td >pushes tip above element</td> 
                                </tr>
                                <tr style="text-align:center;">
                                    <td >.bot</td>
                                    <td >pushes tip below element (default)</td> 
                                </tr>
                                <tr style="text-align:center;">
                                    <td >.left</td>
                                    <td >pushes tip inline and to the left of element</td> 
                                </tr>
                                <!-- <tr style="text-align:center;">
                                    <td >.right</td>
                                    <td >pushes tip inline and to the right of element</td> 
                                </tr> -->
                            </table>
                            <code>&lt;div &gt; &lt;span class="top" data-tool-tip="A tool tip" &gt; Tool Tip Div &lt;/span&gt; &lt;/div&gt;</code>
                            <div ><span class="top" data-tool-tip="span tool tip">HOVER OVER ME - .top</span></div>
                            <br />
                            <code>&lt;div &gt; &lt;span class="bot" data-tool-tip="A tool tip" &gt; Tool Tip Div &lt;/span&gt; &lt;/div&gt;</code>
                            <div ><span class="bot" data-tool-tip="span tool tip">HOVER OVER ME - .bot</span></div>
                            <br />
                            <code>&lt;div &gt; &lt;span class="left" data-tool-tip="A tool tip" &gt; Tool Tip Div &lt;/span&gt; &lt;/div&gt;</code>
                            <div ><span class="left" data-tool-tip="span tool tip">HOVER OVER ME - .left</span></div>
                            <!-- <br />
                            <code>&lt;div &gt; &lt;span class="right" data-tool-tip="A tool tip" &gt; Tool Tip Div &lt;/span&gt; &lt;/div&gt;</code>
                            <div ><span class="right" data-tool-tip="span tool tip">HOVER OVER ME - .right</span></div> -->
                        <br />
                        <hr>
                        <br />
                        <h2>Utilities</h2>
                        <table style="width:100%; border-color:grey;">
                        <tr style="text-align:center; border-color:grey;">
                            <th >Class</th>
                            <th >Description</th> 
                        </tr>
                        <tr style="text-align:center;">
                            <td >.no-point</td>
                            <td >Removes the point from the tool tip</td> 
                        </tr>
                    </table>
                    <br />
                        <code>&lt;div &gt; &lt;span class="no-point" data-tool-tip="A tool tip" &gt; Tool Tip Div &lt;/span&gt; &lt;/div&gt;</code>
                        <div ><span class="no-point" data-tool-tip="span tool tip">HOVER OVER ME - .no-point</span></div>
                        <br />
                        <hr>
                        <br />
                        <h2 style="font-size:2.3em;">CUSTOM TOOL TIPS </h2>  
                        <h4>USE CSS VARIABLES WHICH ARE NOT FULLY SUPPORTED (~91%)</h4>
                        <br />
                        <h4>Custom tool tip 1 (default border color set to text color)</h4>
                        <p>You can customize the data attributes to your needs by adding 1,2... or all of the style variables</p>
                        <code>&lt;div class="custom-tool" 
                    data-tool-tip="A tool tip" 
                    style='--tooltip-color:blue;
                    --tooltip-bg:red;
                    --tooltip-font-size:20px;
                    --tooltip-font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;' 
                        &gt; Tool Tip Div &lt;/div&gt;</code>
                        <div class="custom-tool" data-tool-tip="custom tool tip" style='--tooltip-color:blue;--tooltip-bg:red;--tooltip-font-size:20px;--tooltip-font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;' >HOVER OVER ME - custom</div>
                        <h4>Custom tool tip 2 (setting border color explicitly)</h4>
                        <p>You can customize the data attributes to your needs by adding 1,2... or all of the style variables</p>
                        <code>&lt;div class="custom-tool" 
                    data-tool-tip="A tool tip" 
                    style='--tooltip-border-color:green;
                    --tooltip-color:blue;
                    --tooltip-bg:red;' 
                        &gt; Tool Tip Div &lt;/div&gt;</code>
                        <div class="custom-tool" data-tool-tip="custom tool tip" style='--tooltip-border-color:green;--tooltip-color:blue;--tooltip-bg:red;' >HOVER OVER ME - custom</div>
                        <!-- ovverides -->
                        <table style="width:100%">
                        <tr style="text-align:center; border-color:grey;">
                            <th >Variable Attribute</th>
                            <th >Effects</th>
                        </tr>
                        <tr style="text-align:center;">
                            <td >--tooltip-color</td>
                            <td >Text (& border color if you do not set border color)</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td >--tooltip-bg</td>
                            <td >background-color</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td >--tooltip-border-color</td>
                            <td >ovverides the default color (set from ---tooltip-color) for the border and pointer</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td >--tooltip-font-family</td>
                            <td >Font Style (family)</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td >--tooltip-font-size</td>
                            <td >Text Size</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td >--tooltip-cursor</td>
                            <td >Cursor property (default to help or pointer for button/a)</td>
                        </tr>
                    </table>
                    </div>
                    <hr>
                    <br />
                    <h2 style="font-size:2.3em;">Other Notes</h2>
                        <ul>
                            <li>Add Classes to any element (li,ul,span,div,button,a etc...)</li>
                            <li>Positioning classes do not work together</li>
                            <li>Combine all other classes as desired</li>
                            <li>Custom styles using --tooltip-XXX must have class custom and do not work with color classes</li>
                            <li>Cursors on buttons and A tags are set to pointer not the default help</li>
                        </ul>
                        
                </ol>
                <div style="height:300px;"></div>
                

</section>
<?php include_once('../../partials/smallnav.php'); ?>
<?php include_once('../../partials/footer.php'); ?>