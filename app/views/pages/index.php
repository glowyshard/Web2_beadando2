<?php require APPROOT . '/views/inc/header.php'; ?>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 pages-main">
            <h1><?php echo $data['title']; ?></h1>
            <p class="text-justify">A GLOWYSHARD egy komplex szolgáltatásokat nyújtó softwer-developer startup.<br>
            Működésünk motorja, hogy minden esetben az ügyfél egyedi igényeire szabott rendszer felvázolásával, kiépítésével, illetve működtetésével érjük el célunkat.<br>Legyen szó vállalati rendszerekről, kis- és középvállalkozásoknak szóló IT környezet kialakításáról.
            </p>
            <img class="d-block mx-auto mt-5 mb-5" width="50%" src="<?php echo URLROOT; ?>img/software_developer_working_.jpg" alt="">
            <p class="text-justify">
            A működésünk egyik letéteményese, hogy megfelelő vírusvédelemmel is szolgáljunk, a hasznos céges adatokra és az azokat kezelő rendszerekre.
            </p>
            <img class="d-block mx-auto mt-5 mb-3" width="50%" src="<?php echo URLROOT; ?>img/eset_.png" alt="">
        </div>
        <?php require APPROOT . '/views/inc/aside.php'; ?>
    </div>

</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>
