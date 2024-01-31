<?php
require_once 'includes/header.php';

require_once '../classes/Main.php';

$id = $_GET['id'];
$data = new Main();
$contacts  = $data->getContactsById($id);

if ($contacts) {
    foreach ($contacts as $contact) {
?>

        <form method='post' enctype="multipart/form-data">
            <div class="input_container">
                <input type="text" name="title" id="" value='<?php echo $contact['name']; ?>'>
                <input type="text" name="subtitle" id="" value='<?php echo $contact['surname']; ?>'>
                <input type="text" name="subtitle" id="" value='<?php echo $contact['email']; ?>'>
                <textarea name="" id="" cols="30" rows="10"><?php echo $contact['description']; ?></textarea>
            </div>

        </form>
<?php
    }
} else {
    echo "Error fetching data.";
}
require_once 'includes/footer.php';
?>