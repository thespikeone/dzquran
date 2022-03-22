<?php

$url="https://api.quran.com/api/v4/resources/chapter_reciters?language=ar";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$data = $data['reciters'];


?>

<?php
foreach($data as $reciter){
?>
<div class="col-md-3 mt-2">
    <a href="play.php?sourat=<?= $_GET['sourat'] ?>&reciter<?= $reciter['name'] ?>&idr=<?= $reciter['id'] ?>&id=<?= $_GET['id'] ?>"
        style="text-decoration: none;">
        <div class="border rounded-1 border-700 h-100 features-items">
            <div class="p-3"><i class="fas fa-play"></i>
                <h3 class="pt-3 lh-base"><?= $reciter['name'] ?></h3>
                <p class="mb-0"><strong>Qirat</strong>: <?= $reciter['qirat']['name'] ?></p>

            </div>
            <?php if($reciter['id'] == $_GET['idr']){
            $idr = $_GET['idr'];
            $ids = $_GET['id'];
            $url="https://api.quran.com/api/v4/chapter_recitations/$idr/$ids";
            $json = file_get_contents($url);
            $data_audio = json_decode($json, TRUE);
            $data_audio = $data_audio['audio_file'];
   
                ?>
            <audio style="width: 274px;" controls src="<?= $data_audio['audio_url'] ?>" autoplay>
                Your browser does not support the
                <code>audio</code> element.
            </audio>

            <?php
                                
                } ?>
        </div>
    </a>
</div>

<?php
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>