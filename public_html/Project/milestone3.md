<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Lap Le(ll452)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 11:49:30 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/ll452" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168001104-5c9d6926-0db8-47bc-b063-a9729b0e835e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Transfer Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168000844-0905ae06-676d-462a-8761-b2c5caea5e70.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Dropdown Accounts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168001170-cae5c1e0-1015-4455-8161-cbe86e75198f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing user cannot transfer more funds than they have<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168001268-22598a58-a04e-44b3-95dd-de4c3b4351ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot transfer to same account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168001390-d6d7fd53-6596-4bdf-83b6-6ef3691fe911.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot transfer a negative balance or a 0 balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168001588-b8404f9d-b802-42cb-8198-16ea157c4c62.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of test transaction from database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168001891-142a5b53-e5c9-4ac9-a00d-c58892fb4d6b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of affected accounts during the test transfer transaction<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>The accounts fetched by the dropdowns are supplied by pulling the account numbers<br>owned by the user&#39;s user_id and outputted by a foreach inside of a<br>select tag. The program checks before the transfer is processed to make sure<br>that both accounts selected in each dropdown are not the same to prevent<br>the user from transferring funds between the same account. The program also checks<br>for the balance of the source account before transferring to prevent the user<br>from transferring more money than their balance in the source account. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/54">https://github.com/ll452/IT202/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/transfer_menu.php">https://ll452-prod.herokuapp.com/Project/transfer_menu.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/transfer.php">https://ll452-prod.herokuapp.com/Project/transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168206246-ff2669a5-ddc8-478f-85df-0858c3f57578.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>New Transaction History Page With New Transfer Transaction for Milestone Submission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168206354-83728524-3618-40a2-b6d0-81f9a10d9c3a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Demonstrating Filters And Showing Pagination for new transaction history table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168206542-dbc95120-0143-4426-ba67-99abd78303d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Pagination In Page by seeing bottom page toggler.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168206659-cb0c85b6-376e-470d-9c25-ba881284a89f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Available Filters Users can use to filter type of transaction.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>Pagination requires two DB queries where one is to find the total amount<br>of records and one to pull the actual data. Pagination works with offset<br>and limit where it only allows the user to only pull a certain<br>amount of data and specific data for each page they have. When a<br>user toggles between pages the data refreshes mainly from the offset and limit<br>values controlling what data to be pulled from the DB and displayed onto<br>the webpage.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/79">https://github.com/ll452/IT202/pull/79</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/new_trans_history.php?id=4&acc_num=000000000002">https://ll452-prod.herokuapp.com/Project/new_trans_history.php?id=4&acc_num=000000000002</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/transfer_menu.php">https://ll452-prod.herokuapp.com/Project/transfer_menu.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168002174-d48bf33f-1593-48ed-ae57-c48d7d05e391.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of new profile page with first name and last name fields<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/55">https://github.com/ll452/IT202/pull/55</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/profile.php">https://ll452-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168002382-e10785cc-dd94-480e-a6ef-c4e5ccfcb06b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of external transfer page will data filled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168002530-dcec2874-66d0-487c-a69d-fc2157ca4956.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot transfer more than their current balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168002689-2cbef0b1-a75c-41c6-b7d2-c20407d7ec44.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot send a negative amount or an amount equivalent to 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168002833-bfc31d34-e227-48f2-bd6d-6fb02a51d86a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message showing user not found when user inputs an invalid last name for<br>destination account search to transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168003357-5cd993c0-bdfd-425f-8761-1a01f92a5341.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of transaction table recording the ext-transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168003431-1e7f2d18-b744-4b0a-9f08-60d16f3d3ab3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account Showing Updated Balance After being involved in ext-transfer<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168003597-fe510b30-6c57-4cf7-b5cd-4c63d4bedaab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account Showing Updated Balance After being involved in ext-transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>To make a transfer between accounts in general, the user has to click<br>on the transfer button in the dashboard which takes them to a transfer<br>menu which lets them select the option to transfer funds to themselves meaning<br>a different account they own or another user&#39;s account. To transfer to a<br>different user, the user has to select the second option which will then<br>take them to another page where they have to find the user. This<br>page allows the user to find another user only by last name, but<br>it isn&#39;t case sensitive. Once the user finds the target user they want<br>to transfer funds to, they can select the account they want to send<br>money to by clicking the account number. That takes you to another page<br>where the user has to fill out a form to send money to<br>the other user. The other user&#39;s last name and account number is already<br>prefilled which leaves the user to pick which account they want to send<br>money from, the amount they want to send, and a memo if they<br>want to add one. The program checks to make sure the amount is<br>satisfactory for transfer before it is actually sent.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/ll452/IT202/pull/61">https://github.com/ll452/IT202/pull/61</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/pickuser.php">https://ll452-prod.herokuapp.com/Project/pickuser.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ll452-prod.herokuapp.com/Project/user_transfer.php?id=4&acc_num=000000000002&acc_name=test">https://ll452-prod.herokuapp.com/Project/user_transfer.php?id=4&acc_num=000000000002&acc_name=test</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168207423-20229677-9dee-450b-b463-be8603800a67.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Updated Proposal MD for Milestone3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98070780/168207561-d2991891-7629-4216-9e87-24d87618c83e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Project Board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/ll452" target="_blank">Grading</a></td></tr></table>