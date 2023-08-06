<?php
    $selectIssue = $_POST["slct"];
    if($selectIssue == 1)
    {
        echo "Sorununuz: Web sayfasıyla ilgili bir şikayette bulunmak istiyorum."."<br>";
    }
    else if($selectIssue == 2)
    {
        echo "Sorununuz: Web sayfasının sahibiyle iletişime geçmek istiyorum."."<br>";
    }
    else if($selectIssue == 3)
    {
        echo "Sorununuz: Web sayfası için bir öneride bulunmak istiyorum."."<br>";
    }
    else if($selectIssue == 4)
    {
        echo "Sorununuz: Giriş yapamıyorum."."<br>";
    }
    else if($selectIssue == 0)
    {
        echo "Sorununuz hızlı çözümler kısmında bulunmamaktadır."."<br>";
    }

    if(isset($_POST["checkbox1"]))
    {
        echo "Sorunun hızlı çözümler kısmında olduğunu doğrulamışsınız."."<br>";
    }
    else
    {
        echo "Sorunun hızlı çözümler kısmında olmadığını işaretlemişsiniz."."<br>";
    }

    if($_POST["date1"] != '')
    {
        echo "Tarih: ".$_POST["date1"]."<br>";
    }

    echo "Web sitemize vermiş olduğunuz puan: ".$_POST["rad"];
?>