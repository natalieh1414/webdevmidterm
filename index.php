<?php 
    include "_top.php"; 
?>

<div class="jumbotron text-center">
    <h1>Welcome to Dog Breeds</h1>
    <p>Discover the world of dogs and learn about different breeds.</p>
    <img src="assets/images/dogs.webp" class="img-fluid" alt="Dogs">
</div>

<div class="container mt-5">
    <!-- Intro -->
    <div class="row">
        <div class="col-md-12">
            <h2>About Us</h2>
            <p>Welcome to Dog Breeds, your ultimate resource for everything related to dogs. Whether you're looking to adopt a new furry friend or just want to learn more about different breeds, we've got you covered.</p>
            <img src="assets/images/dog-waving.gif" class="img-fluid" alt="Dog Waving">
        </div>
    </div>
    
    <!-- Popular breeds -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Popular Breeds</h2>
        </div>
        <?php
            $text = file_get_contents("breeds.json");
            $data = json_decode($text);
            $popularBreeds = array_slice($data, 0, 3); 

            foreach($popularBreeds as $breed) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="assets/' . $breed->image . '" class="card-img-top" alt="' . $breed->name . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $breed->name . '</h5>';
                echo '<p class="card-text"><strong>Type:</strong> ' . $breed->type . '</p>';
                echo '<p class="card-text"><strong>Size:</strong> ' . $breed->size . '</p>';
                echo '<a href="breeds.php" class="btn btn-primary">Learn More</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>

    <!-- Quick links -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Quick Links</h2>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Breeds</h5>
                    <p class="card-text">Explore different dog breeds and find the perfect match for your family.</p>
                    <a href="breeds.php" class="btn btn-primary">View Breeds</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Care Tips</h5>
                    <p class="card-text">Learn how to take care of your dog with our comprehensive care tips.</p>
                    <a href="care.php" class="btn btn-primary">View Care Tips</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Contact Us</h5>
                    <p class="card-text">Have any questions? Get in touch with us for more information.</p>
                    <a href="contact.php" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include "_bottom.php"; 
?>

