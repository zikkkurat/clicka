<?php

if(isset($_GET['json'])) {
    $file_content = file($_GET['json']);
    
    $data = json_encode(['x' => [$file_content]]);
    $res = get_content('http://46.48.14.86:5005/model', $data);
    // var_dump($res); die;

    $res = $result[0];
    $tags = [];
    foreach ($res as $k=>$item) {
        $tag = $result[1][$k];
        // if (in_array($tag,['O',''])) {
            // unset ($res[$k]);
            // continue;
        // }
        $tags[] = $tag;
    }
    $res = array_values($res);
    foreach ($tags as $k=>$item) {
        $file_content = str_replace($res[$k].'','<span title="'.$item.'" class="tag '.$item.'">'.$res[$k].'</span>', $file_content);
    }

    $result = [$res, $tags];
    echo json_encode($result);
    die;
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="override.css">
    <link rel="stylesheet" href="style.css">

    <title>click~a</title>
</head>
<body>
<?php

// if (!isset($_GET['id']) && !isset($_POST['text'])) return;

        

        $embed_id = isset($_GET['id']) ? $_GET['id'] : null;
        $res = [];
        $file = isset($_POST['text']) ? $_POST['text'] : '5_Python_tricks_that_will_improve_your_life.srt';
        if ($embed_id == '5tcs2qXP3Pg') {
            $file = '5_Python_tricks_that_will_improve_your_life.srt';
        } elseif ($embed_id == 'LjyDh61KV5Q') {
            $file = 'Genomic_Education_Module_GEM_What_is_Genomic_Medicine.srt';
        } elseif ($embed_id == 'DyGLE0usN_I') {
            $file = 'Primitive Technology_ Iron prills - English.srt';
        } elseif ($embed_id == 'zIwLWfaAg-8') {
            $file = "The future were building -- and boring _ Elon Musk - English.srt";
        }
        $file_content = isset($_POST['text']) ? $_POST['text'] : null;
        $data = json_encode(['x' => [$file_content]]);
        // $data = $file_content;

        // echo $data;
        // die;
        $port = isset($_GET['v2']) ? 6005 : 5005;

        if(isset($_GET['v2'])) {
            $data = json_encode([
                'text_a' => [$file_content],
                'text_b' => [$_POST['text2']]
            ]);
        }

        echo $port;

        $res = get_content('http://46.48.14.86:'.$port.'/model', $data);
        
        $result = json_decode($res,1)[0];
      
        if (!isset($_GET['v2'])) {
            $res = $result[0];
            $tags = [];
            foreach ($res as $k=>$item) {
                $tag = $result[1][$k];
                if (in_array($tag,['O',''])) {
                    unset ($res[$k]);
                    continue;
                }
                $tags[] = $tag;//$item['keyword'];
            }
            $res = array_values($res);
    
            foreach ($tags as $k=>$item) {
                $file_content = str_replace($res[$k].'','<span title="'.$item.'" class="tag '.$item.'">'.$res[$k].'</span>', $file_content);
            }

            $result = [$res, $tags];
        }

        function get_content($url, $post = 0,$auth = false) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url ); // отправляем на
            // curl_setopt($ch, CURLOPT_HEADER, 0); // пустые заголовки
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // возвратить то что вернул сервер
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // следовать за редиректами
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);// таймаут4
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
        //    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        //    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: portfolio.usue.ru'));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// просто отключаем проверку сертификата
            if ($auth)
                curl_setopt($ch, CURLOPT_COOKIEJAR,  ROOT.'/public/exporter/my_cookies.txt');
        //        curl_setopt($ch, CURLOPT_COOKIEFILE,  ROOT.'/public/exporter/my_cookies.txt');
            curl_setopt($ch, CURLOPT_POST, $post !== 0);
            if ($post) {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_POSTREDIR, 3);

                curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            }
            $data = curl_exec($ch);
        //        curl_getinfo($ch);
            curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            curl_close($ch);
            return $data;
        }
?>
    <div class="container">

    <?php if (!isset($_POST['text'])):?>
        <h4>Введите свой текст:</h4>
        <form method="POST" class="" <?=isset($_GET['v2'])?'action="?v2"':'' ?>>
            <div class="form-group bmd-form-group mt-3">
                <textarea class="form-control" name="text" rows="6" require></textarea>
            </div>
            <?php if (isset($_GET['v2'])): ?>
                <div class="form-group bmd-form-group mt-3">
                    <textarea class="form-control" name="text2" rows="6" require></textarea>
                </div>
            <?php endif;?>
            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    <?php endif; ?>

    <?php if (isset($_POST['text'])):?>
        <a href="/<?=isset($_GET['v2'])?'?v2':'' ?>" class="btn btn-info my-3">Назад</a>

        <div class="row no-gutters">
            <div class="col-6 bg-light p-3 text-dark">
                <h3 class="border-bottom">Text</h3>
                <p class="small"><?= nl2br($file_content) ?></p>

                <?php if (isset($_GET['v2'])): ?>
                    <h3 class="border-bottom">Text2</h3>
                <div class="small"><?= nl2br($_POST['text2']) ?></div>
                <?php endif;?>
            </div>
            <div class="col-6 bg-dark p-3">
                <h3 class="border-bottom">JSON</h3>
                <pre class="small text-white"><?= json_encode($result, JSON_PRETTY_PRINT) ?></pre>
            </div>
        </div>
    <?php endif; ?>

</div>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

    
<script>
    $('form.bd-search').submit(function(e){
        // e.preventDefault();
        // get_info($('input[name="id"]').val())
    })
</script>

<style>
    .tag { color:white; padding: 2px; border-radius: 2px; background: grey; }
    .I-LAW { background: red }
    .B-LAW { background: blue }
    .B-LANGUAGE { background: green }
    .B-CARDINAL { background: orange }
    .emoj {
        /* overflow: hidden; */
        /* height: 110px; */
        padding-top: 40px;
    }

    .emoj a {
        transition: transform .2s ease-out;
        display: inline-block;
        position: relative;
        text-align: center;
        width: 100%;
    }

    .emoj img {
        width: 70%;
    }

    .emoj a:hover {
        transform: translate(0, -20px);
    }

    .emoj a>span {
        position: absolute;
        display: block;
        bottom: -80px;
        text-align: center;
        visibility: hidden;
        font-size: 1.6em;
        line-height: 1;
    }

    .emoj a:hover>span {
        visibility: visible;
    }
</style>



</body>
</html>