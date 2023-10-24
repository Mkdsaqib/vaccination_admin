<?php
        $sql = "SELECT * FROM `hosp-reg`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["hospital_name"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["url"] ?></td>
            <td><?php echo $row["telephone"] ?></td>
            <td><?php echo $row["description"] ?></td>
            <td><?php echo $row["img"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
        