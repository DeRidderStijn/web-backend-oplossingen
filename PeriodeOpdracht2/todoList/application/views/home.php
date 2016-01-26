<?php
	if ($this->session->userdata["user_messages"] != null)
	{ ?>
		<p id="greenField"> <?php 
		echo $this->session->userdata["user_messages"];
		$this->session->set_userdata('user_messages', "");
		?> </p>
<?php
	}
?>

<h1> Welkom op de tweede periode-opdracht </h1>
