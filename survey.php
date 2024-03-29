<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap By SKILLHUB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://b0mh0lt.github.io/freeCodeCamp/_assets/css/material-components700.min.css">
  </head>
  <body>
    <style>
        :root {
  --mdc-theme-secondary: var(--mdc-theme-primary);
}
.test {
  display: inline-block;
}
body {
  font-family: "Roboto", sans-serif;
  font-size: .938rem;
  font-weight: 400;
  background-color: #fafafa;
  margin: 0;
}
h2 {
  margin-top: .75em;
  margin-bottom: .25em;
}
p {
  margin-top: 0;
}
.flex-column {
  display: flex;
  flex-direction: column;
}
.w-100 {
  width: 100%;
}

.ribbon {
  background-color: #018786;
  flex-shrink: 0;
  height: 42vh;
  width: 100%;
}
.card-container {
  display: flex;
  justify-content: center;
  margin-top: -40vh;
}
.mdc-card {
  width: 100%;
  max-width: 860px;
  margin: 16px;
}

#dropdown {
  display: none;
}

.mdc-radio {
  margin-right: 2px;
}



.mdc-text-field--radio {
  height: 1.75rem;
}

.mdc-text-field--radio input {
  font-size: 0.875rem;
}
    </style>
    
<main>
  <div class="ribbon"></div>
  <div class="card-container">
    <div class="mdc-card">
      
      <form id="survey-form">
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            
            
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop">
              <div class="test">
              <i class="fas fa-poll-h fa-3x"></i>
              </div>
              <div class="test">
              <h1 id="title">New Coder Survery</h1>
              <p id="description">— an anonymous survey of thousands of people who recently started coding.</p>
              </div>
            </div>
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop">
              <h2>Personal Details</h2>
            </div>
            
            
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop">
              <label id="name-label" class="mdc-text-field mdc-text-field--filled w-100">
                <span class="mdc-text-field__ripple"></span>
                <input id="name" 
                       class="mdc-text-field__input" 
                       type="text" 
                       placeholder="Enter your name" 
                       aria-labelledby="name-floating-label" 
                       required>
                <span class="mdc-floating-label" id="name-floating-label">Full Name</span>
                <span class="mdc-line-ripple"></span>
              </label>
            </div>
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop">
              <h2>Survey Questions</h2>
            </div>
            
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop flex-column">
              <p>1. Are you already working as a software developer?</p>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="is-software-dev" type="radio" value="0">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Yes</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="is-software-dev" type="radio" value="1">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>No</label>
              </div>
            </div>
            
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop flex-column">
              <p>2. Would you prefer to ...</p>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-pref" type="radio" value="0">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>work for a startup</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-pref" type="radio" value="1">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>start your own business</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-pref" type="radio" value="2">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>work for a multinational corporation</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-pref" type="radio" value="3">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>freelance</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-pref" type="radio" value="4">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>work for a medium-sized company</label>
              </div>
            </div>
            
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop flex-column">
              <p>3. Which one of these roles are you most interested in?</p>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="0">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Front-End Web Developer</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="1">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Mobile Developer</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="2">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Data Scientist / Data Engineer</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="3">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>User Experience Designer</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="4">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Back-End Web Developer</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="5">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Full-Stack Web Developer</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="6">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Quality Assurance Engineer</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="7">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Product Manager</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="8">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>DevOps / SysAdmin</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-role-interest" type="radio" value="9">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label class="mdc-text-field mdc-text-field--filled mdc-text-field--radio mdc-text-field--no-label">
                  <span class="mdc-text-field__ripple"></span>
                  <input class="mdc-text-field__input" type="text" placeholder="Other" aria-label="Label">
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
            </div>
            
            <div class="mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-12-desktop flex-column">
              <p>4. When do you plan to start applying for developer jobs?</p>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-apply-when" type="radio" value="0">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>I'm already applying</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-apply-when" type="radio" value="1">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Within the next 6 months</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-apply-when" type="radio" value="2">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>Within 7 to 12 months</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-apply-when" type="radio" value="3">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>More than 12 months from now</label>
              </div>
              <div class="mdc-form-field">
                <div class="mdc-radio">
                  <input class="mdc-radio__native-control" name="job-apply-when" type="radio" value="4">
                  <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                  </div>
                  <div class="mdc-radio__ripple"></div>
                </div>
                <label>I haven't decided</label>
              </div>
            </div>
            
          
          </div>
        </div>
        
        
      </form>
    </div> 
  </div>
  
    
  
  
  
  
  <!--
 
         
              <p>5. Would you prefer to work...</p>
              <div>
                <p>
                  <label>
                    <input name="job-where-pref" type="radio" value="0" />
                    <span>from home</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="job-where-pref" type="radio" value="1" />
                    <span>in an office with other developers</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="job-where-pref" type="radio" value="2" />
                    <span>No preference</span>
                  </label>
                </p>
              </div>
              <p>6. Are you willing to relocate for a job?</p>
              <div>
                <p>
                  <label>
                    <input name="job-relocate" type="radio" value="0" />
                    <span>Yes</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="job-relocate" type="radio" value="1" />
                    <span>No</span>
                  </label>
                </p>
              </div>
              <p>7. Which types of in-person coding events have you attended?</p>
              <div>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="0" />
                    <span>Coffee & Codes</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="1" />
                    <span>Hackathons</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="2" />
                    <span>Conferences</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="3" />
                    <span>NodeSchool</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="4" />
                    <span>RailsBridge</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="5" />
                    <span>Startup Weekend</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="6" />
                    <span>Women Who Code</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="7" />
                    <span>Girl Develop It</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="8" />
                    <span>None</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="coding-event" type="radio" value="9" />
                    <span>
                      <input class="radio-input" type="text" placeholder="Other">
                    </span>
                  </label>
                </p>
              </div>
              <p>8. Which learning resources have you found helpful?</p>
              <div>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="0" />
                    <span>edX</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="1" />
                    <span>Coursera</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="2" />
                    <span>freeCodeCamp</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="3" />
                    <span>Khan Academy</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="4" />
                    <span>Code School (Pluralsight)</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="5" />
                    <span>Codecademy</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="6" />
                    <span>Udacity</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="7" />
                    <span>Udemy</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="8" />
                    <span>Code Wars</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="9" />
                    <span>The Odin Project</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="10" />
                    <span>DevTips</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="learning-resource" type="radio" value="11" />
                    <span>
                      <input class="radio-input" type="text" placeholder="Other">
                    </span>
                  </label>
                </p>
              </div>
              <p>9. About how many hours do you spend learning each week?</p>
              <div class="input-field inline">
                <input type="number">
              </div>
              <p>10. About how many months have you been programming for?</p>
              <div class="input-field inline">
                <input type="number">
              </div>
              <p>11. Any additional comments or suggestions?</p>
              <div class="input-field">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <h5>User Agreement</h5>
            <div id="agreement" class="col">
              <p>
                <label>
                  <input type="checkbox" class="filled-in" value="0" />
                  <span>I agree to the <a href="https://www.freecodecamp.com/terms" target="_blank" rel="noopener noreferrer">Terms of Service</a> and <a href="https://www.freecodecamp.com/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a></span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" value="1" />
                  <span>Send me free email updates</span>
                </label>
              </p>
              <button id="submit" class="btn waves-effect waves-light" type="submit" name="action">Submit 
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
-->
</main>
<footer>
  <a href="https://github.com/b0mh0lt" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-alt fa-lg"></i> M. Bomholt</a>
</footer>

    <script>
       const projectName = 'survey-form';
localStorage.setItem('example_project', 'Survey Form');

const textFields = document.querySelectorAll('.mdc-text-field');
for (const textField of textFields) {
  mdc.textField.MDCTextField.attachTo(textField);
}

mdc.select.MDCSelect.attachTo(document.querySelector('.mdc-select'));

var radios = document.querySelectorAll('.mdc-radio');
for (var i = 0, radio; radio = radios[i]; i++) {
  new mdc.radio.MDCRadio(radio);
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://b0mh0lt.github.io/freeCodeCamp/_assets/js/jquery351.min.js" ></script>
    <script src="https://b0mh0lt.github.io/freeCodeCamp/_assets/js/material-components700.min.js" ></script>
    <script src="https://b0mh0lt.github.io/freeCodeCamp/_assets/js/solid.min.js" ></script>
    <script src="https://b0mh0lt.github.io/freeCodeCamp/_assets/js/fontawesome.min.js" ></script>
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js" ></script>
  </body>
</html>