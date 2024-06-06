<?=$this->extend("layout/template");?>

<?=$this->section("content");?>
<h1>Přehled typů komponentů</h1>
<div class = "row"> 
    <?php
        foreach ($Kategorie as $row){  
    ?>
            <div class = "col-xxl-3 col-sm-12 col-lg-6">
                <div class="card m-5">
                <h1 class="text-center"><?= anchor('Components/'.$row->url, $row->typKomponent) ?></h1>
            </div>
        </div>
    <?php } ?>
</div>

<?=$this->endSection();?>