<?php
  include 'db_connect.php';

  $name = $_POST["p_name"];
  $selltype = $_POST["p_sell_type"];
  # 매매: sell, 전세: rent 월세: rentm
  $ptype = $_POST["p_type"];
  # 원룸: r1, 투룸/쓰리룸: r23, 오피스텔/아파트형: offi, 상가/사무실: arca
  $price = $_POST["price"];
  $size = $_POST["size"];
  $num_liv = $_POST["num_liv"];
  $num_bed = $_POST["num_bed"];
  $num_kit = $_POST["num_kit"];
  $addr = $_POST["addr"];
  $comment = $_POST["comment"];
  $target_dir = "images/pp/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["image"]["size"] > 5000000000 || $_FILES["image"]["size"] <= 0) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
    // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO pdata (
          name,
          selltype,
          proptype,
          price,
          size,
          numbed,
          numliv,
          numkit,
          address,
          imgaddr,
          comment
        ) VALUES (
          '$name',
          '$selltype',
          '$ptype',
          $price,
          $size,
          $num_liv,
          $num_bed,
          $num_kit,
          '$addr',
          '$target_file',
          '$comment'
        )";

        if ($con->query($sql) === TRUE) {
          $msg = "등록되었습니다";
          echo "<script type='text/javascript'>alert('$msg');</script>";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  // $sql = "SELECT id, name, size, imgaddr FROM pdata";
  // $result = $con->query($sql);
  //
  // if ($result->num_rows > 0) {
  //   // output data of each row
  //   while($row = $result->fetch_assoc()) {
  //       echo "<br>id: " . $row["id"] . "name: " . $row["name"]. " -size: " . $row["size"]. " -img address: " . $row["imgaddr"]. "<br>";
  //   }
  // } else {
  //     echo "0 results";
  // }

  $con->close();
  echo "<meta http-equiv='refresh' content='0.3; url=upload.php'>";
?>
