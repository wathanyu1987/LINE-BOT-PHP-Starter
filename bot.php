<?php
 
$strAccessToken = "Uq655bwPGxbXaDTGI/f5zU5op/m+AV05nm5SNQjWYBQpccAp3jUn6gwKKjICSsdjx5YCTg3Y0yTvksvLFvBCVqxQ1G7RK0fSz6U5cGFIm3hOMCqD/vwH/gdIFKaBIb29/AC78xB+McDE913suO29vAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
}else if($arrJson['events'][0]['message']['text'] == "DNI-102"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-102 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-107"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-107 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-109"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-109 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-110"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-110 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-111"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-111 = 16";
}else if($arrJson['events'][0]['message']['text'] == "DNI-113"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-113 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1131"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1131 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1132"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1132 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1171"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1171 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1198"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1198 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1224"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1224 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1245"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1245 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1256"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1256 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-127"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-127 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-129"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-129 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1295"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1295 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1296"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1296 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1297"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1297 = 20";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1298"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1298 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1299"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1299 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-130"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-130 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1311"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1311 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1313"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1313 = 12";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1314"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1314 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1315"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1315 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1316"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1316 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1317"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1317 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1318"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1318 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1319"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1319 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1334"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1334 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1336"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1336 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1337"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1337 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-135"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-135 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1381"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1381 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1382"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1382 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1397"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1397 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1414"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1414 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1415"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1415 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1418"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1418 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1445"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1445 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1456"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1456 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-149"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-149 = 8";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1498"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1498 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1499"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1499 = 13";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1500"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1500 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1522"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1522 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1623"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1623 = 11";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1624"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1624 = 13";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1657"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1657 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1667"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1667 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1694"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1694 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-171"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-171 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1725"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1725 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1728"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1728 = 11";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1729"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1729 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-173"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-173 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1748"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1748 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1749"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1749 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1750"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1750 = 45";
}else if($arrJson['events'][0]['message']['text'] == "DNI-179"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-179 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1818"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1818 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-182"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-182 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-183"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-183 = 14";
}else if($arrJson['events'][0]['message']['text'] == "DNI-184"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-184 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1850"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1850 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1856"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1856 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1858"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1858 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1862"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1862 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1921"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1921 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-194"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-194 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1989"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1989 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-1990"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-1990 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-2"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-2 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-209"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-209 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-211"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-211 = 12";
}else if($arrJson['events'][0]['message']['text'] == "DNI-212"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-212 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-216"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-216 = 14";
}else if($arrJson['events'][0]['message']['text'] == "DNI-221"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-221 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-222"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-222 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-224"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-224 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-233"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-233 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-236"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-236 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-247"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-247 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-248"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-248 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-252"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-252 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-260"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-260 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-261"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-261 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-262"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-262 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-265"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-265 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-271"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-271 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-277"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-277 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-286"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-286 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-298"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-298 = 10";
}else if($arrJson['events'][0]['message']['text'] == "DNI-303"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-303 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-305"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-305 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-308"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-308 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-312"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-312 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-313"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-313 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-317"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-317 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-322"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-322 = 11";
}else if($arrJson['events'][0]['message']['text'] == "DNI-323"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-323 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-325"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-325 = 10";
}else if($arrJson['events'][0]['message']['text'] == "DNI-327"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-327 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-333"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-333 = 11";
}else if($arrJson['events'][0]['message']['text'] == "DNI-336"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-336 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-337"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-337 = 14";
}else if($arrJson['events'][0]['message']['text'] == "DNI-338"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-338 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-346"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-346 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-358"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-358 = 10";
}else if($arrJson['events'][0]['message']['text'] == "DNI-359"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-359 = 12";
}else if($arrJson['events'][0]['message']['text'] == "DNI-361"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-361 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-366"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-366 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-374"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-374 = 36";
}else if($arrJson['events'][0]['message']['text'] == "DNI-375"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-375 = 8";
}else if($arrJson['events'][0]['message']['text'] == "DNI-376"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-376 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-377"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-377 = 10";
}else if($arrJson['events'][0]['message']['text'] == "DNI-378"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-378 = 42";
}else if($arrJson['events'][0]['message']['text'] == "DNI-380"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-380 = 10";
}else if($arrJson['events'][0]['message']['text'] == "DNI-382"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-382 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-383"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-383 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-384"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-384 = 12";
}else if($arrJson['events'][0]['message']['text'] == "DNI-386"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-386 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-387"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-387 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-394"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-394 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-396"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-396 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-398"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-398 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-411"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-411 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-413"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-413 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-42"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-42 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-429"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-429 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-43"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-43 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-431"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-431 = 8";
}else if($arrJson['events'][0]['message']['text'] == "DNI-432"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-432 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-433"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-433 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-450"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-450 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-451"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-451 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-455"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-455 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-459"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-459 = 12";
}else if($arrJson['events'][0]['message']['text'] == "DNI-465"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-465 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-466"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-466 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-467"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-467 = 14";
}else if($arrJson['events'][0]['message']['text'] == "DNI-468"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-468 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-473"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-473 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-476"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-476 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-477"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-477 = 8";
}else if($arrJson['events'][0]['message']['text'] == "DNI-489"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-489 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-492"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-492 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-493"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-493 = 15";
}else if($arrJson['events'][0]['message']['text'] == "DNI-498"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-498 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-499"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-499 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-50"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-50 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-540"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-540 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-557"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-557 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-558"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-558 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-560"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-560 = 19";
}else if($arrJson['events'][0]['message']['text'] == "DNI-561"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-561 = 24";
}else if($arrJson['events'][0]['message']['text'] == "DNI-602"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-602 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-603"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-603 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-604"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-604 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-608"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-608 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-610"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-610 = 31";
}else if($arrJson['events'][0]['message']['text'] == "DNI-613"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-613 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-614"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-614 = 13";
}else if($arrJson['events'][0]['message']['text'] == "DNI-615"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-615 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-616"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-616 = 15";
}else if($arrJson['events'][0]['message']['text'] == "DNI-632"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-632 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-634"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-634 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-635"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-635 = 14";
}else if($arrJson['events'][0]['message']['text'] == "DNI-636"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-636 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-637"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-637 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-641"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-641 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-650"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-650 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-651"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-651 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-654"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-654 = 10";
}else if($arrJson['events'][0]['message']['text'] == "DNI-655"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-655 = 24";
}else if($arrJson['events'][0]['message']['text'] == "DNI-659"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-659 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-663"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-663 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-665"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-665 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-668"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-668 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-669"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-669 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-671"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-671 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-673"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-673 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-674"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-674 = 16";
}else if($arrJson['events'][0]['message']['text'] == "DNI-675"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-675 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-676"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-676 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-680"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-680 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-682"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-682 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-683"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-683 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-684"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-684 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-685"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-685 = 11";
}else if($arrJson['events'][0]['message']['text'] == "DNI-686"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-686 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-689"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-689 = 41";
}else if($arrJson['events'][0]['message']['text'] == "DNI-690"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-690 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-691"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-691 = 7";
}else if($arrJson['events'][0]['message']['text'] == "DNI-693"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-693 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-694"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-694 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-695"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-695 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-701"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-701 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-702"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-702 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-705"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-705 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-712"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-712 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-713"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-713 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-717"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-717 = 10";
}else if($arrJson['events'][0]['message']['text'] == "DNI-718"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-718 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-720"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-720 = 37";
}else if($arrJson['events'][0]['message']['text'] == "DNI-721"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-721 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-722"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-722 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-723"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-723 = 12";
}else if($arrJson['events'][0]['message']['text'] == "DNI-725"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-725 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-726"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-726 = 9";
}else if($arrJson['events'][0]['message']['text'] == "DNI-728"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-728 = 8";
}else if($arrJson['events'][0]['message']['text'] == "DNI-729"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-729 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-730"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-730 = 3";
}else if($arrJson['events'][0]['message']['text'] == "DNI-731"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-731 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-734"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-734 = 13";
}else if($arrJson['events'][0]['message']['text'] == "DNI-735"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-735 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-736"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-736 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-737"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-737 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-738"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-738 = 11";
}else if($arrJson['events'][0]['message']['text'] == "DNI-739"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-739 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-740"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-740 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-741"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-741 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-743"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-743 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-744"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-744 = 4";
}else if($arrJson['events'][0]['message']['text'] == "DNI-745"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-745 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-750"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-750 = 18";
}else if($arrJson['events'][0]['message']['text'] == "DNI-752"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-752 = 13";
}else if($arrJson['events'][0]['message']['text'] == "DNI-77"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-77 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-80"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-80 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-830"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-830 = 6";
}else if($arrJson['events'][0]['message']['text'] == "DNI-8382"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-8382 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-86"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-86 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-9296"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-9296 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-9298"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-9298 = ไม่มีของ";
}else if($arrJson['events'][0]['message']['text'] == "DNI-93"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-93 = 8";
}else if($arrJson['events'][0]['message']['text'] == "DNI-9317"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-9317 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-9328"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-9328 = 5";
}else if($arrJson['events'][0]['message']['text'] == "DNI-9389"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-9389 = 2";
}else if($arrJson['events'][0]['message']['text'] == "DNI-9425"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-9425 = 1";
}else if($arrJson['events'][0]['message']['text'] == "DNI-96"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "DNI-96 = 3";
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีครับ ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันชื่อ BOT C เวอร์ชั่นเบต้านะ";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
