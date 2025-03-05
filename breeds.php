<?php include "_top.php"; ?>

<h2>Dog Breeds</h2>
<p>Explore various dog breeds below.</p>

<?php
    $text = file_get_contents("breeds.json");
    $data = json_decode($text);
    if(isset($_REQUEST["type"])) {
        $type = $_REQUEST["type"];
    }

    echo '<div class="row">';
    foreach($data as $breed) {
        if (!isset($type) || $type == $breed->type) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="assets/' . $breed->image . '" class="card-img-top" alt="' . $breed->name . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $breed->name . '</h5>';
            echo '<p class="card-text"><strong>Type:</strong> ' . $breed->type . '</p>';
            echo '<p class="card-text"><strong>Size:</strong> ' . $breed->size . '</p>';
            echo '<p class="card-text"><strong>Exercise Needs:</strong> ' . $breed->exercise . '</p>';
            echo '<p class="card-text"><strong>Size of Home:</strong> ' . $breed->size_of_home . '</p>';
            echo '<p class="card-text"><strong>Grooming Needs:</strong> ' . $breed->grooming . '</p>';
            echo '<p class="card-text"><strong>Coat Length:</strong> ' . $breed->coat_length . '</p>';
            echo '<p class="card-text"><strong>Sheds:</strong> ' . $breed->sheds . '</p>';
            echo '<p class="card-text"><strong>Lifespan:</strong> ' . $breed->lifespan . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>';
?>

<?php include "_bottom.php"; ?>

