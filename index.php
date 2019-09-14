<?php # Script 3.4 - index.php
include ('includes/session.php');

$page_title = 'Custom Build PC';
include ('./includes/header.php');
?>
<div class="page-header">
    <h1>Custom Build PC</h1>
</div>
 
<div class="well">
	<a href="Final_Presentation_Group_6.pptx"> Final Presentation PowerPoint</a>
	</br><a href="./Presentation/readme.pdf"> read me file</a>
    <p> The Custom-Built PC System will allow the user to build a PC based on the games that they want to play.  The system will contain a list of the most popular games currently in the market and the specs needed to run that specific game. The user will be able to choose different games and based on the games the user chooses, the system will display a list of computer parts needed to build that PC. The user will have the option to remove, add, or upgrade the computer parts to better suit their needs. When upgrading, the user will be given different parts options that are compatible with the current system being displayed. The user will then be given the option to submit a request (or to buy) the computer from the system.</p>
</div>
<?php
include ('./includes/footer.html');
?>