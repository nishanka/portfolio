<?php include 'head.php';?>
    <div class="container flex-container">
        <?php include 'header.php';?>
        <section class="main-content">
            <!-- Tab links -->
            <aside class="tab flex-container flex-wrap">
                <button class="tabLink" onclick="openTable(event, 'W3Schools')">W3Schools</button>
                <button class="tabLink" onclick="openTable(event, 'LinkedInLearning')">LinkedIn</button>
                <button class="tabLink" onclick="openTable(event, 'SeekLearning')">Seek</button>
                <button class="tabLink" onclick="openTable(event, 'FreeCodeCampLearning')">FreeCodeCamp</button>
                <button class="tabLink" onclick="openTable(event, 'CodeWithMosh')">Mosh</button>
                <button class="tabLink" onclick="openTable(event, 'ThingsToLearn')">Things To Learn</button>
                <button id="defaultOpen" class="tabLink" onclick="openTable(event, 'CodingHelp')">Coding Help</button>
            </aside>
        
            <!-- Tab content -->
            <article id="W3Schools" class="tabContent flex-grow-1">
                <table>
                    <caption>W3Schools</caption>
                    <tr>
                        <th>Language</th>
                        <th>Tutorial</th>
                        <th>Exercises</th>
                        <th>Quiz</th>
                    </tr>
                    <tr>
                        <td>HTML 5</td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/html" title="Go to W3Schools HTML Tutorials" target="_blank">Complete</a></td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/html" title="Go to W3Schools HTML Exercises" target="_blank">Complete</a></td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/html" title="Go to W3Schools HTML Quiz" target="_blank">Complete</a></td>
                    </tr>
                    <tr>
                        <td>CSS 3</td>
                        <td><a href="https://www.w3schools.com/css/default.asp" title="Go to W3Schools CSS 3 Tutorials" target="_blank">Link</a></td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/css" title="Go to W3Schools CSS 3 Exercises" target="_blank">Complete</a></td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/css" title="Go to W3Schools CSS 3 Quiz" target="_blank">Complete</a></td>
                    </tr>
                    <tr>
                        <td>JavaScript ES6</td>
                        <td><a href="https://www.w3schools.com/js/default.asp" title="Go to W3Schools JavaScript Tutorials" target="_blank">Link</a></td>
                        <td><a href="https://www.w3schools.com/js/js_exercises.asp" title="Go to W3Schools JavaScript Exercises" target="_blank">Link</a></td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/js" title="Go to W3Schools JavaScript Quiz" target="_blank">Complete</a></td>
                    </tr>
                    <tr>
                        <td>Bootstrap 5</td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/bootstrap5" title="Go to W3Schools Bootstrap 5 Tutorials" target="_blank">Complete</a></td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/bootstrap5" title="Go to W3Schools Bootstrap 5 Exercises" target="_blank">Complete</a></td>
                        <td class="complete"><a href="https://my-learning.w3schools.com/tutorial/bootstrap5" title="Go to W3Schools Bootstrap 5 Quiz" target="_blank">Complete</a></td>
                    </tr>
                    <tr>
                        <td>JQuery</td>
                        <td><a href="https://www.w3schools.com/jquery/default.asp" title="Go to W3Schools JQuery Tutorials" target="_blank">Link</a></td>
                        <td><a href="https://www.w3schools.com/jquery/jquery_exercises.asp" title="Go to W3Schools JQuery Exercises" target="_blank">Link</a></td>
                        <td><a href="https://www.w3schools.com/jquery/jquery_quiz.asp" title="Go to W3Schools JQuery Quiz" target="_blank">Link</a></td>
                    </tr>
                    <tr>
                        <td>SASS</td>
                        <td><a href="https://www.w3schools.com/sass/default.php" title="Go to W3Schools SASS Tutorials" target="_blank">Link</a></td>
                        <td><a href="#" title="Go to W3Schools SASS Exercises" target="_blank">NA</a></td>
                        <td><a href="#" title="Go to W3Schools SASS Quiz" target="_blank">NA</a></td>
                    </tr>
                    <tr>
                        <td>TypeScript</td>
                        <td><a href="https://www.w3schools.com/typescript/index.php" title="Go to W3Schools TypeScript Tutorials" target="_blank">Link</a></td>
                        <td><a href="https://www.w3schools.com/typescript/typescript_exercises.php" title="Go to W3Schools TypeScript Exercises" target="_blank">Link</a></td>
                        <td><a href="https://www.w3schools.com/typescript/typescript_quiz.php" title="Go to W3Schools TypeScript Quiz" target="_blank">Link</a></td>
                    </tr>
                    <tr>
                        <td>Bootstrap 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bootstrap 4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </article>
            
            <article id="LinkedInLearning" class="tabContent flex-grow-1">
                <table>
                    <caption><a href="https://github.com/Ebazhanov/linkedin-skill-assessments-quizzes" target="_blank">LinkedIn Learning</a></caption>
                    <tr>
                        <th>Language</th>
                        <th>skill Assessments</th>
                        <th>Badge</th>
                    </tr>
                    <tr>
                        <td>HTML 5</td>
                        <td class="complete">
                            <a href="https://www.linkedin.com/skill-assessments/HTML/report/" title="Go to LinkedIn Skill Assessments" target="_blank">Complete</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span style=''>&#9734;</span></a>
                        </td>
                    </tr>   
                    <tr>
                        <td>CSS 3</td>
                        <td class="complete">
                            <a href="https://www.linkedin.com/skill-assessments/Cascading%20Style%20Sheets%20(CSS)/report/" title="Go to LinkedIn Skill Assessments" target="_blank">Complete</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span>&#9734;</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>JavaScript</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/JavaScript/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Front-End Development</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/Front-End%20Development/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Git</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/Git/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>jQuery</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/jQuery/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Node.js</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/Node.js/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Google Analytics</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/Google%20Analytics/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Angular</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/Angular/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Cybersecurity</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/Cybersecurity/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>                    
                    <tr>
                        <td>JSON</td>
                        <td>
                            <a href="https://www.linkedin.com/skill-assessments/JSON/quiz-intro/" title="Go to LinkedIn Skill Assessments" target="_blank">skill Assessments</a>
                        </td>
                        <td class="linkedIn-badge">
                            <a href="https://www.linkedin.com/skill-assessments/hub/reports/?resultType=PASSED" title="Go to LinkedIn Skill Assessment Results" target="_blank"><span></span></a>
                        </td>
                    </tr>
                </table>
            </article>

            <article id="SeekLearning" class="tabContent flex-grow-1">
                <table>
                    <caption>Seek Learning</caption>
                    <tr>
                        <th>Language</th>
                        <th>Tutorial</th>
                        <th>Exercises</th>
                        <th>Quiz</th>
                    </tr>
                    <tr>
                        <td>HTML 5</td>
                        <td><a href="#" title="Go to W3Schools XXXX Tutorials" target="_blank">Link</a></td>
                        <td><a href="#" title="Go to W3Schools XXXX Exercises" target="_blank">Link</a></td>
                        <td><a href="#" title="Go to W3Schools XXXX Quiz" target="_blank">Link</a></td>
                    </tr>
                </table>
            </article>
            
            <article id="FreeCodeCampLearning" class="tabContent flex-grow-1">
                <table>
                    <caption>FreeCodeCamp</caption>
                    <tr>
                        <th>Language</th>
                        <th>Tutorial</th>
                        <th>Exercises</th>
                        <th>Quiz</th>
                    </tr>
                    <tr>
                        <td>HTML 5</td>
                        <td><a href="#" title="Go to W3Schools XXXX Tutorials" target="_blank">Link</a></td>
                        <td><a href="#" title="Go to W3Schools XXXX Exercises" target="_blank">Link</a></td>
                        <td><a href="#" title="Go to W3Schools XXXX Quiz" target="_blank">Link</a></td>
                    </tr>
                </table>
            </article>
            
            <article id="CodeWithMosh" class="tabContent flex-grow-1">
                <table>
                    <caption>Code With Mosh</caption>
                    <tr>
                        <th>Language</th>
                        <th>Tutorial</th>
                        <th>Exercises</th>
                        <th>Quiz</th>
                    </tr>
                    <tr>
                        <td>HTML 5</td>
                        <td><a href="#" title="Go to W3Schools XXXX Tutorials" target="_blank">Link</a></td>
                        <td><a href="#" title="Go to W3Schools XXXX Exercises" target="_blank">Link</a></td>
                        <td><a href="#" title="Go to W3Schools XXXX Quiz" target="_blank">Link</a></td>
                    </tr>
                </table>
            </article>

            <article id="ThingsToLearn" class="tabContent flex-grow-1">
                <h3>Things To Learn</h3>
                <ol>
                    <li>Learn From W3C Reference - HTML <a href="https://www.w3schools.com/TAGS/default.asp" target="_blank">W3C Reference - HTML</a></li>
                    <li>Learn From W3C Reference - CSS <a href="https://www.w3schools.com/cssref/index.php" target="_blank">W3C Reference - CSS</a></li>
                    <li>Image sizes and Retina displays</li>
                    <li>Learn from W3Docs <a href="https://www.w3docs.com/snippets/css/what-does-the-css-tilde-selector-mean.html" target="_blank">CSS tilde(~)</a></li>
                </ol>
            </article>

            <article id="CodingHelp" class="tabContent flex-grow-1">
                <h3>Useful Links</h3>

                <ol>
                    <li>
                        <h4>Reference</h4>
                        <ul>
                            <li>
                                <a href="https://www.w3schools.com/tags/default.asp">HTML Reference</a>
                            </li>
                            <li>
                                <a href="https://www.w3schools.com/cssref/index.php">CSS Reference</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="https://www.w3schools.com/css/css_icons.asp">Css Icons</a></h4>
                        <ul>
                            <li>Font awesome Icons
                                <a href="https://fontawesome.com/" target="_blank">Link</a>
                            </li>
                            <li>Bootstrap Icons
                                <a href="https://getbootstrap.com/docs/3.3/components/" target="_blank">Link</a>
                            </li>
                            <li>Google Icons
                                <a href="https://fonts.google.com/icons" target="_blank">Link</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h4>Link Styling</h4>
                        <ul>
                            <li>a:link - a normal, unvisited link</li>
                            <li>a:visited - a link the user has visited</li>
                            <li>a:focus - a link the user focuses</li>
                            <li>a:hover - a link when the user mouses over it</li>
                            <li>a:active - a link the moment it is clicked</li>
                        </ul>
                    </li>
                    <li>
                        <h4>Cursors</h4>
                        <ul style="display:inline-block;margin-right: 30px; vertical-align: top;">
                            <li><span style="cursor:auto">auto</span></li>
                            <li><span style="cursor:crosshair">crosshair</span></li>
                            <li><span style="cursor:default">default</span></li>
                            <li><span style="cursor:e-resize">e-resize</span></li>
                        </ul>
                        <ul style="display:inline-block;margin-right: 30px; vertical-align: top;">
                            <li><span style="cursor:help">help</span></li>
                            <li><span style="cursor:move">move</span></li>
                            <li><span style="cursor:n-resize">n-resize</span></li>
                            <li><span style="cursor:ne-resize">ne-resize</span></li>
                        </ul>
                        <ul style="display:inline-block;margin-right: 30px; vertical-align: top;">
                            <li><span style="cursor:nw-resize">nw-resize</span></li>
                            <li><span style="cursor:pointer">pointer</span></li>
                            <li><span style="cursor:progress">progress</span></li>
                            <li><span style="cursor:s-resize">s-resize</span></li>
                        </ul>
                        <ul style="display:inline-block;margin-right: 30px; vertical-align: top;">
                            <li><span style="cursor:se-resize">se-resize</span></li>
                            <li><span style="cursor:sw-resize">sw-resize</span></li>
                            <li><span style="cursor:text">text</span></li>
                            <li><span style="cursor:w-resize">w-resize</span></li>
                        </ul>
                        <ul style="display:inline-block;margin-right: 30px; vertical-align: top;">
                            <li><span style="cursor:wait">wait</span></li>
                        </ul>
                    </li>
                    <li>
                        <h4>Lists Styles</h4>
                        <p>Unordered lists:</p>
                        <ul style="list-style-type: circle; display:inline-block;margin-right: 30px;">
                            <li>Coffee</li>
                            <li>Tea</li>
                            <li>Coca Cola</li>
                        </ul>
                        <ul style="list-style-type: square; display:inline-block;">
                            <li>Coffee</li>
                            <li>Tea</li>
                            <li>Coca Cola</li>
                        </ul>
                        <p>Ordered lists:</p>
                        <ol style="list-style-type: upper-roman; display:inline-block; margin-right: 30px;">
                            <li>Coffee</li>
                            <li>Tea</li>
                            <li>Coca Cola</li>
                        </ol>
                        <ol style="list-style-type: lower-alpha; display:inline-block;">
                            <li>CoffeCe</li>
                            <li>Tea</li>
                            <li>Coca ola</li>
                        </ol>
                    </li>
                    <li>
                        <h4>Block elemets & Inline elements <a href="https://www.w3schools.com/html/html_blocks.asp">More</a></h4>
                    </li>
                    <li>
                        <h4>Positions</h4>
                        <ul>
                            <li>static</li>
                            <li>relative</li>
                            <li>fixed</li>
                            <li>absolute</li>
                            <li>sticky</li>
                        </ul>
                    </li>
                    <li>
                        <h4>CSS Combinators</h4>
                        <ul>
                            <li>descendant selector (space)</li>
                            <li>child selector (>)</li>
                            <li>adjacent sibling selector (+)</li>
                            <li>general sibling selector (~)</li>
                        </ul>
                    </li>
                    <li>
                        <h4>CSS Pseudo Elements <a href="https://www.w3schools.com/css/css_pseudo_elements.asp">More</a></h4>
                    </li>
                    <li>
                        <h4>CSS Media Queries <a href="https://www.w3schools.com/css/css3_mediaqueries.asp">More</a></h4>
                    </li>
                    <li>
                        <h4>CSS Attr Selectors <a href="https://www.w3schools.com/css/css_attribute_selectors.asp">More</a></h4>
                        <ul>
                            <li>[attribute="value"] selector is used to select elements with a specified attribute and value.</li>
                            <li>[attribute~="value"] selector is used to select elements with an attribute value containing a specified word.</li>
                            <li>[attribute|="value"] selector is used to select elements with the specified attribute, whose value can be exactly the specified value, or the specified value followed by a hyphen (-).</li>
                            <li>[attribute^="value"] selector is used to select elements with the specified attribute, whose value starts with the specified value.</li>
                            <li>[attribute$="value"] selector is used to select elements whose attribute value ends with a specified value.</li>
                            <li>[attribute*="value"] selector is used to select elements whose attribute value contains a specified value.</li>
                            <li>item1</li>
                        </ul>
                    </li>
                    <li>
                        <h4>Css Units <a href="https://www.w3schools.com/css/css_units.asp">More</a></h4>
                        <ul>
                            <li>Absolute Length Units - cm, mm, in, px, pt, pc</li>
                            <li>Relative Length Units - em, ex, ch, rem, vw, vh, vmin, vmax, %</li>    
                        </ul>
                    </li>
                    <li>
                        <h4>Css Specificity</h4>
                        <ul>
                            <li>Inline styles</li>
                            <li>IDs - Example: #navbar</li>
                            <li>Classes, pseudo-classes, attribute selectors - Example: .test, :hover, [href]</li>
                            <li>Elements and pseudo-elements - Example: h1, :before</li>
                        </ul>
                        <h4>Calculate Specificity?</h4>
                        <ul>
                            <li><p>Start at 0, add 100 for each ID value, add 10 for each class value (or pseudo-class or attribute selector), add 1 for each element selector or pseudo-element.</p></li>
                            <li><p>Note: Inline style gets a specificity value of 1000, and is always given the highest priority!</p></li>
                            <li><p>Note 2: There is one exception to this rule: if you use the !important rule, it will even override inline styles!</p></li>
                            <li><p>The universal selector (*) and inherited values have a specificity of 0 - The universal selector (*) and inherited values are ignored!</p></li>
                        </ul>
                    </li>
                    <li>
                        <h4>Title</h4>
                        <ul>
                            <li>item1</li>
                            <li>item1</li>
                            <li>item1</li>
                        </ul>
                    </li>                   
                </ol>
            </article>
            
        </section>
    </div>
    <script type="text/javascript" src="js/tabs.js"></script>
<?php include 'footer.php';?>
