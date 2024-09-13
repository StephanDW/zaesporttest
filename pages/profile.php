<?php
  switch ("function"){
    case "create_team":
      $team_name = $_POST['team_name'];
      $user = $_SESSION['user'];
      $sql ="
            insert into
              teams
            values
              team_name ='$team_name'";
      dbExec($sql);
      if ($result) {
        echo json_encode(array("status" => "success"));
      } else {
        echo json_encode(array("status" => "error"));
      }
    break;
  }
?>
<script>
  function create_team() {
    var dialog = document.querySelector('dialog');
    dialog.showModal();
  }

  function submit_team() {
    console.log("hi");
    var dialog = document.querySelector('dialog');
    $.ajax({
      url: "index.php?page=c",
      type: "POST",
      dataType: "json",
      data: {
        function : "create_team"
      },
      success: function(result){
        if (result.status === "success") {
          alert("Team created successfully!");
          // dialog.close();
        } else {
          alert("Error creating team.");
        }
      }
    });
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
    <form method="dialog">
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
    </form>
  </div>
</div>
<dialog class="modal">
  <form method="post">
    <div>Enter Team Name</div>
    <input type="text" name="team_name" id="team_name" required>
    <div class="flex space-between">
      <button id="sumbit_team" class="gen_btn" onclick="submit_team()">Create Team</button>
      <button id="close_btn" class="gen_btn" onclick="window.location='index.php?page=c'">Cancel</button>
    </div>
  </form>
</dialog>