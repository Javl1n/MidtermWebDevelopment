<?php

$us = [
     [
          "name"=> "Frank Leimbergh D. Armodia",
          "description"=> "Hi! My name is Frank Leimbergh Armodia, 19 years old, and a second-year student at South East Asian Institute of Technology, and I took up Bachelor of Science in Information Technology. I love reading manga, watching anime, playing online games, and playing guitar. As said, I am a musician in our church, and I can play bass, acoustic, and electric guitar. I am in a relationship with the person below me for more than a year now.",
          "image"=> "frank",
     ],
     [
          "name"=> "Princess Jevonne S. Egonio", 
          "description"=> "Greetings! I am Princess Jevonne S. Egonio but you can call me \"Vonne\". I am a second-year student at South East Asian Institute of Technology, and I took up Bachelor of Science in Information Technology. I love reading e-books and I spend most of my time sleeping. I'm in a relationship with Frank Leimbergh Armodia, we've been together for 1 year already. And, I believe that no matter what happens, GIVE UP LANG! 🥳",
          "image"=> "vonne",
     ],
     [
          "name"=> "John B. Arroyo",
          "description"=> "My name is John Arroyo, I am 19 years old. I am currently attending second year college in South East Asian Institute of Technology (SEAIT). My family is one of the most important thing in my life and they have always been there for me.",
          "image"=> "tids",
     ]
];


view('aboutus.view.php', [
     'title'=> 'About Us',
     'us'=> $us ,
]);
?>