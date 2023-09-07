<?php
$command = 'ip';
exec($command . ' 2>&1', $output, $result);

echo '実行したコマンド：' . $command . '<br>';
echo '結果：' . $result . '<br>';
print_r($output);
?>
