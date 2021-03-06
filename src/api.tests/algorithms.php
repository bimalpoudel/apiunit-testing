<?php
header("Content-Type: application/json");

require_once("inc.config.php");

/**
 * @see http://php.net/manual/en/function.hash-algos.php
 */
$algorithms = hash_algos();
echo json_encode($algorithms, JSON_HEX_QUOT);

/**
 * C# Helper
 * string[] algorithms = JsonConvert.DeserializeObject<string[]>(json_string);
 *
 * ["md2","md4","md5","sha1","sha224","sha256","sha384","sha512\/224","sha512\/256","sha512","sha3-224","sha3-256","sha3-384","sha3-512","ripemd128","ripemd160","ripemd256","ripemd320","whirlpool","tiger128,3","tiger160,3","tiger192,3","tiger128,4","tiger160,4","tiger192,4","snefru","snefru256","gost","gost-crypto","adler32","crc32","crc32b","fnv132","fnv1a32","fnv164","fnv1a64","joaat","haval128,3","haval160,3","haval192,3","haval224,3","haval256,3","haval128,4","haval160,4","haval192,4","haval224,4","haval256,4","haval128,5","haval160,5","haval192,5","haval224,5","haval256,5"]
 */
