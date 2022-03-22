<?php
$data = $data['chapters'];


foreach($data as $chapter){
$id = $chapter['name_arabic'];

?>

<div class="col-md-3 mt-2">
<a href="play/play.php?sourat=<?= $chapter['name_simple'] ?>&id=<?= $chapter['id'] ?>" style="text-decoration: none;">
    <div class="border rounded-1 border-700 h-100 features-items">
        <div class="p-3"><i class="fas fa-play" ></i>
            <h3 class="pt-3 lh-base"><?= $chapter['name_arabic'] ?></h3>
            <p class="mb-0"><strong>Vesrset</strong>: <?= $chapter['verses_count'] ?></p>
        </div>
    </div>
    </a>
</div>

<?php
}
?>