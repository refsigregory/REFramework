<?php
$db = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);

/**
 * Fungsi untuk insert data
 * @param table string
 * @param data array
 */
function db_insert($table, $data)
{
    global $db;
    $prep = array();
                foreach($data as $k => $v ) {
                    $prep[$k] = "'".$v."'";
                }
    $sql = "INSERT INTO $table ( " . implode(', ',array_keys($data)) . ") VALUES (" . implode(', ',$prep) . ")";
    return $query = mysqli_query($db, $sql);
}

/**
 * Fungsi untuk update data
 * @param table string
 * @param data array
 * @param key array[name, value]
 */
function db_update($table, $data, $key)
{
    global $db;
    $prep = array();
                foreach($data as $k => $v ) {
                    $prep[$k] = "`" . $k ."` = '".$v."'";
                }
    $sql = "UPDATE `".$table."` SET " . implode(', ',$prep) . " WHERE `".$key[0]."` = '".$key[1]."'";
    return $query = mysqli_query($db, $sql);
}

/**
 * Fungsi untuk hapus data
 * @param table string
 * @param key array[name,value]
 */
function db_delete($table, $key)
{
    global $db;
    $sql = "DELETE FROM $table WHERE `".$key[0]."` = '".$key[1]."'";
    return $query = mysqli_query($db, $sql);
}
?>