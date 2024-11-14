<?php
  $titles = array("The Great Adventure", "Mystery of the Old House", "Journey to the Unknown", "Secrets of the Jungle");
  $authors = array("John Doe", "Jane Smith", "Robert Brown", "Emily Davis");
  $emails = array("john.doe@example.com", "jane.smith@example.com", "robert.brown@example.com", "emily.davis@example.com");
  $dates = array("2023-11-10", "2023-11-11", "2023-11-12", "2023-11-13");

  for ($i = 0; $i < count($titles); $i++) {
      // simulate that we selected this row.
      if ($titles[$i] == "The Great Adventure") {
      print '<tr class="w3-grey w3-hover-grey">';
      }
      else {
      print '<tr>';
      }

      print '
      <td><input type="checkbox" class="w3-check" ' . ($titles[$i] == "The Great Adventure" ? 'checked' : '') . '/></td>
      <td>' . $titles[$i] . '</td>
      <td>' . $authors[$i] . '</td>
      <td>' . $emails[$i] . '</td>
      <td>' . $dates[$i] . '</td>
      <td>
          <a href="#" class="w3-button w3-small w3-blue w3-round w3-margin-left">
          <i class="fa fa-download"></i>
          </a>
      </td>
      </tr>';
  }
?>