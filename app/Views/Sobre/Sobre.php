<?php
include "./app/config.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Ilha das rabanadas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>/sobre/sobre.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
<style>
  
</style>

</head>

<body>

    <?php

    include './app/Views/Headers/headerManager.php';
    ?>


    <div id="card" class="container " role="alert">
        <h1 class="text-center">Sobre a Ilha</h1>
        <div class="row">
            <div class="col">
                <img src="<?php echo IMG ?>/img/rabanada-doce.webp" alt="">
            </div>
            <div class="col">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aliquam minima suscipit, sed ipsa accusamus quam facilis iusto
                dolore, enim molestias dolor numquam facere ipsam consectetur
                perferendis eligendi quae. Unde, illum?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                accusantium iste doloribus cumque possimus sit nemo commodi eaque
                dolore nobis numquam aliquam impedit nisi, mollitia, itaque aspernatur
                qui culpa eius.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                quibusdam dignissimos debitis a? Molestiae soluta neque mollitia
                eos atque quam nisi, labore voluptas accusamus voluptates? Sint,
                aliquid? Asperiores, eligendi fugit?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae,
                reiciendis! Ad, omnis numquam totam explicabo molestiae quas fuga
                optio assumenda doloribus! Magnam, a labore eius eum sequi nobis
                atque architecto.
            </div>
        </div>
    </div>
    <div id="card" class="container body" role="alert">
        <h1 class="text-center">Nossa Missão</h1>
        <div class="row">
            <div class="col">
                <img src="<?php echo IMG ?>/img/rabanada-salgada.webp" alt="">
            </div>
            <div class="col">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rem hic fuga iure veniam, soluta quia non deleniti fugit.
                At inventore voluptatem nesciunt repellat aut sed autem
                voluptates ab dicta corrupti!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quod quia nulla, quis perspiciatis perferendis iure obcaecati
                delectus porro qui veniam dolores repudiandae deserunt corrupti
                ex aut repellendus quaerat officia iusto!
            </div>
            <div class="col">
                <img src="<?php echo IMG ?>/img/rabanada-vegana.webp" alt="">
            </div>
        </div>
    </div>
    <div id="card" class="container body" role="alert">
        <h1 class="text-center">Nossos Valores</h1>
        <div class="row">
            <div class="col">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aliquam minima suscipit, sed ipsa accusamus quam facilis iusto
                dolore, enim molestias dolor numquam facere ipsam consectetur
                perferendis eligendi quae. Unde, illum?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                accusantium iste doloribus cumque possimus sit nemo commodi eaque
                dolore nobis numquam aliquam impedit nisi, mollitia, itaque aspernatur
                qui culpa eius.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                quibusdam dignissimos debitis a? Molestiae soluta neque mollitia
                eos atque quam nisi, labore voluptas accusamus voluptates? Sint,
                aliquid? Asperiores, eligendi fugit?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae,
                reiciendis! Ad, omnis numquam totam explicabo molestiae quas fuga
                optio assumenda doloribus! Magnam, a labore eius eum sequi nobis
                atque architecto.
            </div>
            <div class="col">
                <img src="<?php echo IMG ?>/img/servico-prestado.webp" alt="">
            </div>
        </div>
    </div>
    <div id="card" class="container body" role="alert">
        <h1 class="text-center body">Nossa Visão</h1>
        <div class="row">
            <div class="col">
                <img src="<?php echo IMG ?>/img/servico-prestado.webp" alt="">
            </div>
            <div class="col">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aliquam minima suscipit, sed ipsa accusamus quam facilis iusto
                dolore, enim molestias dolor numquam facere ipsam consectetur
                perferendis eligendi quae. Unde, illum?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                accusantium iste doloribus cumque possimus sit nemo commodi eaque
                dolore nobis numquam aliquam impedit nisi, mollitia, itaque aspernatur
                qui culpa eius.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                quibusdam dignissimos debitis a? Molestiae soluta neque mollitia
                eos atque quam nisi, labore voluptas accusamus voluptates? Sint,
                aliquid? Asperiores, eligendi fugit?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae,
                reiciendis! Ad, omnis numquam totam explicabo molestiae quas fuga
                optio assumenda doloribus! Magnam, a labore eius eum sequi nobis
                atque architecto.
            </div>
        </div>
    </div>
    <div id="card" class="container body" role="alert">
        <h1 class="text-center">Trabalhe Conosco</h1>
        <h2 class="text-center">Quer fazer parte da minha família?! Enviar-nós seu currículo!</h2>
        <div class="row">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Nome</label>
                        <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Currículo</label>
                        <input type="arquiv" class="form-control" id="exampleInputimg1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar-nós</button>
                </form>
            </div>
            <div class="col">
                <img src="<?php echo IMG ?>/img/servico-prestado.webp" alt="">
            </div>
        </div>
    </div>



    <?php
    include FOOTER; ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>