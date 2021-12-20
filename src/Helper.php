
<?php
function web_start($title = null)
{
    return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . ($title ?? 'Phú Cường') . '</title>
    <link rel="stylesheet" href="../../vendors/helper/style.css">
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/fontawesome.pro.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/view.css">
    </head>
    <body>
    ';
}

function web_end()
{
    addPage(($_GET['showpage'] ?? 0));
    return '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../vendors/helper/script.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="js/view.js"></script>
    </body>
    </html>
    ';
}

function getAllFile()
{
    $foles =  glob(dirname(__FILE__)   . '/../' . '/*.php');
    $dataal = [];
    if ($foles) foreach ($foles as $fole) {
        $arr = explode('/', $fole);
        $md = array_reverse($arr)[0];
        $md = str_replace('.php', '', $md);
        if (!in_array($md, ['layout', 'showpage'])) {
            $dataal[] = $md;
        }
    }
    return $dataal;
}

function addPage($status = 0)
{
    $url = $_SERVER['SCRIPT_NAME'];

    $url = array_reverse(explode('/', $url));
    $page = explode('.', $url[0])[0];
    $p = '';
    if ($status == 1) {
        $list = getAllFile();
        if ($list) {
            $p = '<button class="menu_panel">Menu</button><div class="box-show-list-page">
            <div class="box-show-list-page-in cont"><ul id="show-ul-page" class="book-list">';
            foreach ($list as $item) {
                $p .= '<li class="book ' . ($item == $page ? 'active' : null) . '"><a href="' . $item . '.php?showpage=1">' . $item . '</a></li>';
            }
            $p .= '</ul></div></div>';
        }
    }
    echo $p;
}
