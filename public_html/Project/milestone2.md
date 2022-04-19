<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Lap Le(ll452)</td></tr>
<tr><td> <em>Generated: </em> 4/18/2022 11:35:25 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-bank-project/grade/ll452" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163880129-dc85aa65-c136-41e8-a9ad-42dae6372354.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of System User from Users Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163880256-d09a8e4d-7e9f-4b1b-9109-c21c2f1a8693.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of World Account from Accounts Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>The system user and the world account play an important role in the<br>bank project because it allows the user to make deposits and withdrawals. Since<br>transactions are meant to be done in pairs meaning you can&#39;t make a<br>transaction without a source and destination, the world account and system user can<br>act as a destination or source on where the money is coming from<br>or going where. The system user is a user that we won&#39;t sign<br>into, technically it doesn&#39;t belong to anybody. The system user has an account<br>called &quot;World&quot; and its balance can be negative or positive. The system user&#39;s<br>id is also the World account&#39;s user_id.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/36">https://github.com/ll452/IT202/pull/36</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td> <em>Response:</em> <p><img src="https://user-images.githubusercontent.com/98070780/163881275-325d18d4-fb34-4917-a628-2a65552c49fb.png" alt="image"><br>Screenshot of Dashboard Page<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>The dashboard page also known as home.php is only able to be accessed<br>when the user signs in to their user account. When they first signs<br>into their account they will be redirected to the dashboard page where they<br>will be able to access links such as (Create Account, My Accounts, Deposit,<br>Withdraw, Transfer, and Profile). At the moment, the only link that is under<br>construction is &quot;Transfer&quot;, as instructions for that link have not been supplied in<br>Milestone 2. Create Account will allow the user to make a checking account<br>(for now) that can withdraw or deposit money. My Accounts takes the user<br>to a page where all of their accounts are listed, only 5 accounts<br>should show right now. Deposit allows the user to select which account they<br>want to deposit money in. Withdraw allows the user to withdraw money from<br>a specified account, and Profile takes the user to the edit profile page<br>for their user.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/47">https://github.com/ll452/IT202/pull/47</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163882815-1add6217-e484-4c3f-80f8-be262bc5fd92.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Create Account Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163883147-5571e548-5fff-4407-938e-baacf8a262ed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Successfully Created Account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163883316-341f1fb0-903f-4b08-af2a-ac1dc645fdf2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Error Messages of Invalid Inputs<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="![image](https://user-images.githubusercontent.com/98070780/163883629-058b8c61-4ff7-434f-8e9a-4c011ec95105.png)">![image](https://user-images.githubusercontent.com/98070780/163883629-058b8c61-4ff7-434f-8e9a-4c011ec95105.png)</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p>For the account number for each new account created, I decided to go<br>with both options that were given to me in the Bank Project Proposal.<br>My logic is, if a user never made an account before and is<br>making their very first account, their account number will be a bunch of<br>0s but with their user_id at the end. If the user decides to<br>create more accounts, my code will assign them a random 12-digit number as<br>their account number.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/49">https://github.com/ll452/IT202/pull/49</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/create_account.php">https://ll452-prod.herokuapp.com/Project/create_account.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163884156-45c8e51f-c55f-49ec-ae54-63f6a9c41d02.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of User View Accounts Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>The page displays the user&#39;s accounts but only shows 5 of the most<br>recent accounts being used currently. If the users don&#39;t have 5 accounts made,<br>the page will display all the accounts the user currently has. The accounts<br>are displayed in descending order from the most recent changes that were made<br>to an account shown at the top. SQL query limits only 5 rows<br>to ensure only 5 accounts show up on the page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/50">https://github.com/ll452/IT202/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/list_accounts.php">https://ll452-prod.herokuapp.com/Project/list_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history (should have at least a few samples) Show account number/type, balance, opened date and transaction details</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163884652-3b3f1fd1-b5d4-4767-abc5-2ed1885609ec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Account&#39;s Transaction History and Account Information<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>From the My Accounts Page, the account number is a link that takes<br>the user to a transactions history page where it shows more information about<br>the account. This page displays the account number, account type, balance, the created<br>timestamp, along with all of the account&#39;s transactions in detail. The transaction history<br>is displayed with the 10 most recent transactions in descending order. The SQL<br>statement has a limit of 10 which ensures only 10 transactions show.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/51">https://github.com/ll452/IT202/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/transaction_history.php?id=1&acc_num=000000000001">https://ll452-prod.herokuapp.com/Project/transaction_history.php?id=1&acc_num=000000000001</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163885127-89ec0d87-e218-4b81-8d6a-28b5f1edfaa2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Deposit Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163885216-a5b20b37-6f62-46e7-b751-f27ec2200b1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Withdraw Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163885458-ad2fb523-9ed0-494f-a421-d32b6552790c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Negative Withdraw Error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163885745-c30cc358-80bc-4482-adf7-d739dcc82a59.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Deposit of Negative Value<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163885644-0911dbb6-a9fc-41e4-b60d-b5a8c0812524.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Withdrawing More than Balance Error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163885854-671f8489-56ea-408d-ac55-de29cde18211.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Successful Deposit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163885962-b063305d-2f2e-4a6e-9325-3ebecc0fabbf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Successful Withdrawal<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests (should have accurate expected_total values)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163886309-3430dcaf-e619-4e5a-845d-69b9be6bb486.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Test Withdraw and Deposit Transaction Pairs<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163886429-c4836125-6f6a-4cee-bb07-97bb64ef6954.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction History Screen shows an easier view but only shows the user&#39;s account<br>not world account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>Each transaction is recorded as a transaction pair in the Transaction table, when<br>a user deposits or withdraws from an account, they are in a transaction<br>pair with the world account which would be the one giving the money<br>or receiving the money. Making deposits only requires the user to deposit a<br>value more than 0 as it&#39;s impossible to make a 0 deposit or<br>a negative deposit. Withdrawing money also has the same restrictions as a deposit<br>but it also restricts the user from taking more money than they have<br>in their balance. From the transaction pairs, the first row of data would<br>always have a negative balance_change value to indicate money coming out of an<br>account whether it be a deposit or withdrawal. The second row of data<br>indicates what account will be receiving the money. So a deposit will show<br>money coming out of the world account to the user&#39;s account and a<br>withdrawal will show money coming out of the user&#39;s account going to the<br>world account.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/51">https://github.com/ll452/IT202/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/deposit.php">https://ll452-prod.herokuapp.com/Project/deposit.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/withdraw.php">https://ll452-prod.herokuapp.com/Project/withdraw.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163888269-c58b6155-6b64-44cc-a0a1-9f6a66066cc6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Milestone 2 from Proposal.md from GitHub<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/163887015-50a64941-e63e-4752-9146-9b1b5eba55ea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Project Board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-bank-project/grade/ll452" target="_blank">Grading</a></td></tr></table>