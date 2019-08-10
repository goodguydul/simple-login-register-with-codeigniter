<body>
<div class="wrapper fadeInDown">
  <h1 class="bighead">Home</h1>
  
  <div>
 	<h2>Hai, <?php echo $this->session->userdata('email'); ?></h2>
    <p> <a href="<?php echo base_url();?>login/logout">Logout</a></p>
  </div>
</div>
