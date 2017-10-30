<?php
$access_token = 'Uq655bwPGxbXaDTGI/f5zU5op/m+AV05nm5SNQjWYBQpccAp3jUn6gwKKjICSsdjx5YCTg3Y0yTvksvLFvBCVqxQ1G7RK0fSz6U5cGFIm3hOMCqD/vwH/gdIFKaBIb29/AC78xB+McDE913suO29vAdB04t89/1O/w1cDnyilFU= ';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
