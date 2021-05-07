<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play with Number</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Operasi Matematika -->
    <div class="container">
        <h2 class="title">Kalkulator</h2>
        <form action="number.php" method="post">
            <input type="text" name="first" id="first" class="input input-num" placeholder="Angka">
            <select name="operator" id="operator" class="input input-select">
                <option value="ditambah">+</option>
                <option value="dikurangi">-</option>
                <option value="dikali">x</option>
                <option value="dibagi">:</option>
            </select>
            <input type="text" name="second" id="second" class="input input-num" placeholder="Angka">
            <input type="submit" name="submit1" value="=" class="input input-btn">
        </form>
        <!-- Jawaban -->
        <p class="ans">
            <!-- PHP -->
            <?php
            if (isset($_POST['submit1'])) {
                $first = $_POST['first'];
                $second = $_POST['second'];
                $operator = $_POST['operator'];
                if (is_numeric($first) && is_numeric($second)) {
                    if ($operator == 'ditambah') {
                        $total = $first + $second;
                    }
                    if ($operator == 'dikurangi') {
                        $total = $first - $second;
                    }
                    if ($operator == 'dikali') {
                        $total = $first * $second;
                    }
                    if ($operator == 'dibagi') {
                        $total = $first / $second;
                    }

                    // Print jawaban
                    echo "{$first} {$operator} {$second} sama dengan {$total}";
                } else {
                    // Jika input bukan numeric
                    echo 'Input harus integer';
                }
            }

            ?>
        </p>
    </div>

    <!-- Generate NIM -->
    <div class="container">
        <h2 class="title">Generate NIM</h2>
        <form action="number.php" method="post">
            <input type="number" name="angkatan" class="input input-num" placeholder="Tahun angkatan">
            <input type="number" name="sum" class="input input-num" placeholder="Jumlah">
            <input type="submit" name="submit2" value="Generate" class="input input-btn">
        </form>

        <!-- Generated -->
        <p class="ans">
            <!-- PHP -->
            <?php
            $i = 1;

            if (isset($_POST['submit2'])) {
                $ang = substr($_POST['angkatan'], 2);
                $sum = $_POST['sum'];
                for ($i; $i <= $sum; $i++) {
                    $nim = "M05" . $ang . sprintf("%03d", $i);
                    echo "{$nim} | ";
                }
            }

            ?>
        </p>
    </div>
    <footer>
        <p class="credit">~ toni ~</p>
    </footer>
</body>

</html>