<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Lap Le(ll452)</td></tr>
<tr><td> <em>Generated: </em> 4/5/2022 12:33:29 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/ll452" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161671639-fd08b4a8-a707-4d90-a85d-b5b44d62d738.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Registration Error Message (Duplicate Email)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161671759-9146e8a7-37a3-4a73-af87-e8007a31419b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Successfully Registered Account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161672034-094f149d-a9ec-4127-bf5e-541eee0e37b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Newly Registered User<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/16">https://github.com/ll452/IT202/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The Register Tab has an email, username, password, and confirm form fields and<br>they all need to be populated with the correct input to be validated<br>and the user to be registered in the database. If the user input<br>invalid credentials or invalid responses for the form field they will be prompted<br>with an error message at the top.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161672307-58bd4099-b0b0-4751-bdc3-43a202d6440e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Invalid Password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161672400-c989dff5-8465-426e-aade-cee3458484d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Login Success and Dashboard<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/15">https://github.com/ll452/IT202/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The user has to login in through the login page which is login.php.<br>They need to either enter their username, or email which is shared on<br>one form field, and their correct password. Both inputs from the form fields<br>will be validated from the client side and server side to prompt a<br>successful login. f the user input incorrect credentials they will be prompted with<br>an error message telling them an incorrect password or invalid username/email.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161672595-7b64cad8-718d-4eeb-8d58-baf6384265a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Successfully Logout Message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161672735-fed515da-18c7-4b23-9e9c-bb570e5275ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of user cannot view login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/16">https://github.com/ll452/IT202/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>If the user clicks the logout tab, they will be successfully logged out<br>of their account. The user will be prompted with a successfully log-out flash<br>message after the user clicks logout.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161672735-fed515da-18c7-4b23-9e9c-bb570e5275ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of user not being able to view login protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161672983-f1bce33e-3109-42c1-aa3f-8f52ee45faf8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Basic Security Rules Implemented with Roles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161673387-8436a924-7013-4735-ad61-0b48ea9d4049.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Roles Table and Admin Data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161673255-ae9b5ffa-fe8a-44be-baf8-d374355266d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of UserRoles table with Admin data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/32">https://github.com/ll452/IT202/pull/32</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>If the user tries to access a page that requires the user to<br>be logged in they will be alerted with a message that tells them<br>they need to be logged in to view the page and redirects them<br>to the login page. On the code side, the function is_logged_in(); has to<br>be true to be able to access it.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>If the user tries to access a page where they do not have<br>permissions to view the page meaning they don&#39;t have admin rights, they will<br>be redirected to home if they are logged in. The user will be<br>alerted that they do not have permission to access the page. The code<br>checks if the profile is an admin or in this case has the<br>role to access the page before they allow the user to access the<br>page. The code uses the function has_role() to confirm that the user has<br>a role.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161673528-e533e8a3-699a-43d5-a9c8-fbe9e3ed5629.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of CSS styles applied to home page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/31">https://github.com/ll452/IT202/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I kept the CSS to a minimum where I only styled the body,<br>input box, and nav. I also changed the .alert-success to light green because<br>I wanted the color to look lighter and friendlier than the regular green.<br>The most noticeable changes would be that I changed the border-radius to 10%<br>and the nav to inline. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161673997-bdb6dddf-238d-45a4-afe5-7ce862770c5d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of error messages being user friendly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/16">https://github.com/ll452/IT202/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>The error messages were made friendly through the flashing of the messages. Whenever<br>the user input invalid text into any of the form fields a message<br>will flash on the top of the webpage telling the user the error<br>without breaking the page or showing them backend or coding errors. (There is<br>a typo on the flash message but I fixed it within my code)<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161673686-94d84100-9d07-48a3-9fdc-f7516782acd2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Viewing User Profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/16">https://github.com/ll452/IT202/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The user is only able to see their profile only if they are<br>logged into their account. There they can see the available changes they can<br>make regarding their account and they can also view their current email and<br>username.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161674141-10083980-0470-457e-b4a6-9e89a10dc6d3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of user successfully being able to change password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161674275-866caefa-4c95-486a-9114-5e6e739f5e24.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of user changing username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161674415-5ec6397b-6f41-4ba8-9d10-13c3bf32d124.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of updated table after user changed username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/16">https://github.com/ll452/IT202/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The user can edit their profile through the profile.php file. There they can<br>change their username password but the password can only be updated if they<br>correctly input their current password and that both the new password and confirm<br>password match. If incorrect credentials are inputted in the password reset section then<br>they will be prompted with a message saying that the current password is<br>invalid or the new password isn&#39;t matching. Also, the username and email are<br>already displayed when a user visits their profile link on the website.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161671368-b3344b97-bc10-4ccd-ab73-3387b1790f43.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Milestone 1 Proposal Markdown Screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/161674656-3702d925-398c-4fc2-89b4-76566cdbebf1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Project Board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/ll452" target="_blank">Grading</a></td></tr></table>