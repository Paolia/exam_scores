<main>
    <div id="conf">
        <h2>以下の内容で登録します。よろしいですか？</h2>
    </div>

    <div id="confirm">
    <p>名前：<?php echo $_POST["name"]; ?></p>
    <p>学年：<?php echo $_POST["grade"]; ?></p>
    <p>クラス：<?php echo $_POST["classrm"]; ?></p>
    <p>Eメール：<?php echo $_POST["mail"]; ?></p>
    <p>対象試験：<?php echo $_POST["exam"]; ?></p>
    <p>国語：<?php echo $_POST["国語"]; ?></p>
    <p>数学：<?php echo $_POST["数学"]; ?></p>
    <p>理科：<?php echo $_POST["理科"]; ?></p>
    <p>社会：<?php echo $_POST["社会"]; ?></p>
    <p>英語：<?php echo $_POST["英語"]; ?></p>

    <?php
    echo
    '<form id="form2" action="record.php" method="POST">
        <input type="hidden" name="name" value="' . $_POST["name"] . '">
        <input type="hidden" name="grade" value="' . $_POST["grade"] . '">
        <input type="hidden" name="classrm" value="' . $_POST["classrm"] . '">
        <input type="hidden" name="mail" value="' . $_POST["mail"] . '">
        <input type="hidden" name="exam" value="' . $_POST["exam"] . '">
        <input type="hidden" name="国語" value="' . $_POST["国語"] . '">
        <input type="hidden" name="数学" value="' . $_POST["数学"] . '">
        <input type="hidden" name="理科" value="' . $_POST["理科"] . '">
        <input type="hidden" name="社会" value="' . $_POST["社会"] . '">
        <input type="hidden" name="英語" value="' . $_POST["英語"] . '">
        <button type="submit" id="registar">登録</button>
    </form>'
        ?>
</div>
</main>