<?=$this->extend("layout/template");?>

<?=$this->section("content");?>
<h1>Přehled komponentů dle typu</h1>
<div class = "row"> 
    <?php
        foreach ($komponentDanehoTypu as $row){  
            $cesta_pic = 'komponenty_assets/komponenty/';
        $imgKomponent = [
            'src' => $cesta_pic.$row->pic,
            'width' => '100%'
            ];
    ?>
            <div class = "col-xxl-3 col-sm-12 col-lg-6">
                <div class="card m-5">
                <h1 class="text-center"><?= anchor('parametryKomponentu/'.$row->id, $row->nazev)  ?></h1>
                <div class="card-body">
                    <p class="card-text text-center"> <?= img($imgKomponent); ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
    <p class="text-center"> <?= $pager->links(); //naučit se tohle vycentrovat?> </p> 
</div>

<?=$this->endSection();?>