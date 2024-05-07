<?php 
    include(JPATH_LIBRARIES . '../asset/plugin/phpqrcode/qrlib.php');

    $tempDir        = JPATH_SITE . '../asset/img/uploads/';
    $codeContents   = 'This Goes From file';
    $fileName       = 'qr_'.md5($codeContents).'.png';

    $pngAbsoluteFilePath    = $tempDir.$fileName;
    $urlRelativeFilePath    = JUri::root() . '../asset/img/uploads/' . $fileName;

    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath);
    }else {
        echo "Not Working"
    }
        echo '<img src="'.$urlRelativeFilePath.'" />';
?>