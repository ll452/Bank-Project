<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Bank Project</td></tr>
<tr><td> <em>Student: </em> Lap Le(ll452)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 1:28:28 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-bank-project/grade/ll452" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167991393-661ddd38-3d85-4dd4-bb1f-62dfb7de76d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Public TINYINT column on Users table for public or private profiles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167991578-a54ec7cf-944a-47fd-8fd8-18bc3b52fa90.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of profile edit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167991678-f2cd2c68-3736-4597-8ced-d46513f57ac4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Public View of a Private User&#39;s Profile Screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/62">https://github.com/ll452/IT202/pull/62</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/profile.php?id=2">https://ll452-dev.herokuapp.com/Project/profile.php?id=2</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>A user can toggle whether they want their profile to be public or<br>private through radio buttons in their profile tab. Every time the user clicks<br>update profile the radio is being recorded in the database, so if the<br>user keeps the radio button at private every time they update their profile<br>the profile will remain public. The radio button default will not switch unless<br>it is manually switched by the user.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to open a savings account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the create account page for savings with the form filled in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167991959-9f6343bd-5298-4ff6-a47b-63c79162db04.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create Savings Account Form Filled In Screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the code that determines the APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992148-f7a89e76-afee-4ca6-8be6-4ba52cfe2191.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Setting APY Function Screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the related error and success messages when creating a savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992217-be15dbf7-30cc-4ee0-b830-380e1407f730.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success Messages When Making A Savings Account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992426-fba97462-8ec3-450e-8b9c-5845a1d10406.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Error Messages When Making a Savings Account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the db showing the new savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992296-a8df5659-3b3b-459d-91ac-6f9faa1c62cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Newly Created Savings Account In DB<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/64">https://github.com/ll452/IT202/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/create_account.php">https://ll452-dev.herokuapp.com/Project/create_account.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the logic behind the APY value</td></tr>
<tr><td> <em>Response:</em> <p>The APY values for savings and loans are already fixed when it was<br>inserted into the database. When the user applies for a loan or creates<br>a savings account the fixed APY for the respected account will be applied<br>through functions that gets and updates the account before it is made.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to take out a loan </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the form for opening a loan along with the system generated APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992573-bd32b2fb-dd02-4b5e-ab1c-77b36d9468ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Opening a Loan Account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing the user's accounts that can be deposited into</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992647-04de916e-ea78-465e-94dd-bcf17e82b39f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing user&#39;s available accounts that the loan can be applied to<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot from the db showing the loan account has a negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992745-064d0243-b8f9-4720-a1ad-765b8664924b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Loan Balance in Database but loan balance is a positive value.<br>Payments to loan gets subtracted to zero.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot from the User's account list page showing the loan displaying as a positive value</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992991-07b75c49-369b-4688-810c-690c64103c7f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan displayed on User&#39;s account list as a positive value. Note of transaction<br>tells the user which account the loan was applied to.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the code logic for updating the loan's balance per the requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167992967-8a11c107-9cfa-4972-82c7-5f1461234308.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan is being applied to user&#39;s account. User&#39;s account balance has been increased.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot showing user can't transfer more money from a loan account (alternatively don't show loan accounts in the dropdown for transfer transactions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167993665-66968263-1c73-43ef-b8a6-07ff32575776.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot transfer more money than the loan or more money than their<br>balance to pay off loan.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167993790-5f1a3678-11c9-4ada-b884-6b7bd50c7469.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan accounts are only in the loan dropdown.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167993848-896280fc-f757-4ae5-b3dc-d0268bb5ded6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User&#39;s accounts that aren&#39;t loans are in the account dropdown used for payment.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167993929-8aee9337-3c10-433a-a8d8-8efa2d78f42f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan accounts are not available in dropdowns for transactions. Users can&#39;t deposit money<br>into the loan they must pay it off.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add screenshots of any other errors and success</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167994079-783e8001-1eda-475a-96cd-f1276d24cff7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Loan Payment Sreenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/issues/70">https://github.com/ll452/IT202/issues/70</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to create/open loan page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/loan.php">https://ll452-dev.herokuapp.com/Project/loan.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/takeoutloan.php">https://ll452-dev.herokuapp.com/Project/takeoutloan.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/payloan.php">https://ll452-dev.herokuapp.com/Project/payloan.php</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain the special code implementations for loans</td></tr>
<tr><td> <em>Response:</em> <p>I did the loans backwards a little bit by keeping the loan balance<br>in the database a positive value rather than a negative value. Part of<br>me got the instructions confused so I related to how I would see<br>it as a user when I take out loans in real life. Although<br>the loan balance in the database is positive, every time the user makes<br>a payment for the loan it gets subtracted from the loan balance in<br>the database and its history can be shown through the transactions history of<br>the loan account. The user cannot make a payment more than the loan<br>and can also not make a payment if they don&#39;t have enough money<br>in their account.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Listing accounts should show applicable APY or - if none is set for a particular account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the account list showing a combination of checkings, savings, loans, etc</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167994205-0a878d06-ecb8-4365-b03f-322e13416d5e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of APY being applied to accounts only applicable for it.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/64">https://github.com/ll452/IT202/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Account list page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/list_accounts.php">https://ll452-dev.herokuapp.com/Project/list_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> User will be able to close an account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing validation that an account can't be closed if it has a balance (regular account and loan)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167994396-d16df0ad-f1d4-45c5-89f7-b684c10d03a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>All funds must be transferred out to close an account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot from the DB showing a closed account as inactive</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167994557-e51dcfc1-f6f4-4f73-a10e-01333b4ad6c7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account entry at the bottom of the DB has an account that is<br>closed. Tinyint value is 0.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the various account list queries (in the code) showing the changes to use is_active (be sure to include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167994896-ab1287d8-1407-41bb-bdf2-fe0b2015af93.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Function containing close account code that contains query used to change an account&#39;s<br>state of open or closed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/66">https://github.com/ll452/IT202/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to the page where a user can close an account</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/closeaccount.php">https://ll452-dev.herokuapp.com/Project/closeaccount.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin role </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of user search with search results shown (show the user's name, link to view their accounts, link to open account, and link/button to deactivate user)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167995301-dc3ccf2b-b553-46ff-9879-92a36d7ed456.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of admin user search where it shows the user&#39;s firstname, lastname, link<br>to view their accounts, link to open an account for the user, and<br>link to deactivate the user.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the updated User's table of the new is_active column</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167995498-19361f1f-ac71-444f-a6b2-060b6ec21ee7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of is_active column in Users table where 1 is active and 0<br>is deactivated.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the admin's view of listing another user's account (from the user search results link) Show a mix of frozen and unfrozen accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167995711-df15096f-4a25-4e24-84a7-f540825cf880.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of admin viewing another user&#39;s accounts<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167995856-471b5a1c-57ff-4c20-a10c-1ac1a5b5ba32.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin view of a user&#39;s specific account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167995929-4175fa5a-5842-44f7-b8c5-fd2a8a170785.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin&#39;s view of a frozen account, it appears exactly the same as a<br>non frozen account but no transactions can be done with it and it<br>is frozen in the DB too.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167996059-1ed093d9-1aed-4d6a-8339-7b437ac9fcd9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Bottom two entries of DB are frozen accounts, can be identified with their<br>account numbers.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the admin's view of listing another user's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167995856-471b5a1c-57ff-4c20-a10c-1ac1a5b5ba32.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin&#39;s view of a specific account&#39;s transaction history<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of account lookup page with partial result matches (ensure it has links to the transactions page of the account and the ability to freeze/unfreeze)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167996221-2ce6b771-cf13-4adc-bdc9-d0fb4012b613.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin&#39;s account lookup page where they see the account name which is linked<br>to the account&#39;s transaction page and the ability to freeze the account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/67">https://github.com/ll452/IT202/pull/67</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related url(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/admin/user_search.php">https://ll452-dev.herokuapp.com/Project/admin/user_search.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/admin/view_user_accounts.php?id=1">https://ll452-dev.herokuapp.com/Project/admin/view_user_accounts.php?id=1</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/admin/admin_open_accounts.php?id=1">https://ll452-dev.herokuapp.com/Project/admin/admin_open_accounts.php?id=1</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/admin/deactivate.php?id=1">https://ll452-dev.herokuapp.com/Project/admin/deactivate.php?id=1</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/admin/account_numlookup.php">https://ll452-dev.herokuapp.com/Project/admin/account_numlookup.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/admin/admin_dupe_file.php?id=13&acc_num=840070845157">https://ll452-dev.herokuapp.com/Project/admin/admin_dupe_file.php?id=13&acc_num=840070845157</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-dev.herokuapp.com/Project/admin/freeze.php?id=13&acc_num=840070845157">https://ll452-dev.herokuapp.com/Project/admin/freeze.php?id=13&acc_num=840070845157</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code logic for the different views and admin actions</td></tr>
<tr><td> <em>Response:</em> <p>As an admin the user will have abilities to search or a user<br>or account number through partial match. They have two tabs they can use<br>which are &quot;search user&quot; and &quot;user account lookup&quot;. User search lets the user<br>match any letter with the first name and last name of a user<br>in the database and can view the user&#39;s accounts, open an account for<br>the user, or deactivate their user which won&#39;t allow them to login anymore<br>since its disabled. User account lookup is the same thing in regards of<br>partial matching but for account numbers. Admin user can lookup an account number,<br>view it&#39;s transaction history, or freeze the account, given they know the account<br>number they want to freeze.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167996543-8b236bad-c9f5-4083-be7c-da611c16ae44.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Proposal for Milestone4<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/167996704-ae6320f9-20c9-4fd9-874d-bd4a26214044.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Project Board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-bank-project/grade/ll452" target="_blank">Grading</a></td></tr></table>