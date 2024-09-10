<?php
switch ($_POST['function']) {
  case 'create_team':
    $response = "Create Team";
    break;
  default:
    $response = "No Function Found";
  break;
}

?>
<script>
  function create_team(){
    modal.showModal();
  }
</script>
<div class="profile_page">
  <div class="prof_main_cont">
    <div class="grid-x">
      <div class="prof_box cell small-12 medium-6 large-4">
        <img class="prof_img" src="images/pngs/images.jpeg" alt="Profile Picture">
        <div class="prof_sub_det">
          <div class="prof_name"><?php echo $_SESSION['user']; ?></div>
          <div class="rank_text">Rank #1</div>
        </div>
      </div>
    </div>
    <div class="grid-x">
      <div class="prof_team cell small-12 medium-6">
        <div class="cell small-12 gen_head1 flex justify-center">Team</div>
        <div class="cell small-12 team_member_box">
          No Team
        </div>
        <div class="cell small-12 flex items_bottom">
          <button class=gen_btn onclick="create_team()">Create Team</div>
        </div>
      </div>
    </div>
  </div>
</div>
<dialog class="modal">
  <div>Enter Team Name</div>
  <button>Create Team</button>
</dialog>