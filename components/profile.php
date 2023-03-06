<?php 



echo '<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">';
echo '<div class="carousel-inner">';
$i = 0;
while ($row = $result->fetch_assoc()) {
  echo '<div class="carousel-item';
  if ($i == 0) {
    echo ' active';
  }
  echo '">';
  echo '<img class="d-block w-100" src="' . $row['image_url'] . '" alt="' . $row['caption'] . '">';
  echo '<div class="carousel-caption d-none d-md-block">';
  echo '<h5>' . $row['caption'] . '</h5>';
  echo '<p>' . $row['description'] . '</p>';
  echo '</div>';
  echo '</div>';
  $i++;
}
echo '</div>';
echo '</div>';

















?>