<?php
if (isset($_POST['word'])) {
    $word = $_POST['word'];
    echo '
        <table width="100%" border="1" cellpadding="0" cellspacing="0">
            <theard>
                <tr>
                  <th scope="col">Hash Type</th>
                  <th scope="col">Function</th>
                  <th scope="col">Length</th>
                  <th scope="col">Hash Text</th>
                  </tr>
                  </theard>
                  ';
    foreach (hash_algos() as $v) {
        $r = hash($v, $word, false);
        $array = array($v, "hash");
        $id    = join($array);
        
        printf('<tr id="%s">', $id);
        printf('<td>%-12s', $v);
        printf('<td>hash()</td>');
        printf('<td>%3d</td>', strlen($r));
        printf('<td>%s</td>' , $r);
        printf('</tr>');
        
    }
    echo '</table>';
}
?>