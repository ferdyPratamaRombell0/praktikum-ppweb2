<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL NILAI MAHASISWA</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $_POST['Nama'] ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $_POST['NIM'] ?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= $_POST['Rombel'] ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?= $_POST['matkul'] ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= $_POST['tugas'] ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= $_POST['uts'] ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= $_POST['uas'] ?></td>
        </tr>
        <tr>
            <td>PREDIKAT</td>
            <td>:</td>
            <td><?php
            $tugas = $_POST['tugas'] * (35/100);
            $uts = $_POST['uts'] * (30/100);
            $uas = $_POST['uas'] * (35/100);
            $total = $tugas + $uts + $uas;

            if ($total <= 35) {
                $pred = "E";
                echo $pred;
            } elseif ($total <= 55) {
                $pred = "D";
                echo $pred;
            } elseif ($total <= 65) {
                $pred = "C";
                echo $pred;
            } elseif ($total <= 75) {
                $pred = "B";
                echo $pred;
            } elseif ($total <= 100) {
                $pred = "A";
                echo $pred;
            }else{
                $pred = "Tidak Diketahui";
                echo $pred;
            }    
            ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($pred) {
                    case 'A':
                        echo "Sangat Baik";
                        break;
                        case 'B':
                            echo "Baik";
                            break;
                            case 'C':
                                echo "Cukup";
                                break;
                                case 'D':
                                    echo "Kurang";
                                    break;
                                    case 'E':
                                        echo "Sangat Kurang";
                                        default:
                                        echo "Tidak Diketahui";
                                    
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>