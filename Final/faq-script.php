
<!-- This code is integrated directly into faq page -->

<?php
include("helpers/config.php");

// Fetch data from faq table
$sql = "SELECT * FROM faq";
$result = $conn->query($sql);

// Display faq data dynamically
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row['id']; ?>" aria-expanded="false">
                    <?php echo $row['question']; ?>
                    <span class="accordion-tab-icon">
                        <i class="open-icon bi bi-plus"></i>
                        <i class="close-icon bi bi-dash"></i>
                    </span>
                </button>
            </h2>
            <div class="accordion-collapse collapse" data-bs-parent="#accordionFaq" id="collapse<?php echo $row['id']; ?>">
                <div class="accordion-body"><?php echo $row['answer']; ?></div>
            </div>
        </div>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?> 