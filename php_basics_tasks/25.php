<?php
//<p>25. Приведите пример, чем отличается &lt;?php от &lt;?=.</p>
?>


<?php
//No output
    $a = 100; // На экране ничего.
?><br>


<?=
//Some output specified
   $b = 200; // Тэг заменяет <?php echo ... На экран выводится результат операции присваивания.
?>