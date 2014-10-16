php-cosine-similarity
=====================

measures a cosine similarity between two vectors

https://www.bionicspirit.com/blog/2012/01/16/cosine-similarity-euclidean-distance.html

    compare
    array (size=4)
      0 => 
        array (size=2)
          'article' => string 'Data Mining: Finding Similar Items' (length=34)
          'tags' => 
            array (size=5)
              0 => string 'Algorithms' (length=10)
              1 => string 'Programming' (length=11)
              2 => string 'Mining' (length=6)
              3 => string 'Python' (length=6)
              4 => string 'Ruby' (length=4)
      1 => 
        array (size=2)
          'article' => string 'Blogging Platform for Hackers' (length=29)
          'tags' => 
            array (size=6)
              0 => string 'Publishing' (length=10)
              1 => string 'Server' (length=6)
              2 => string 'Cloud' (length=5)
              3 => string 'Heroku' (length=6)
              4 => string 'Jekyll' (length=6)
              5 => string 'GAE' (length=3)
      2 => 
        array (size=2)
          'article' => string 'UX Tip: Don't Hurt Me On Sign-Up' (length=32)
          'tags' => 
            array (size=3)
              0 => string 'Web' (length=3)
              1 => string 'Design' (length=6)
              2 => string 'UX' (length=2)
      3 => 
        array (size=2)
          'article' => string 'Crawling the Android Marketplace' (length=32)
          'tags' => 
            array (size=5)
              0 => string 'Python' (length=6)
              1 => string 'Android' (length=7)
              2 => string 'Mining' (length=6)
              3 => string 'Web' (length=3)
              4 => string 'API' (length=3)
    array (size=3)
      0 => string 'Publishing' (length=10)
      1 => string 'Web' (length=3)
      2 => string 'API' (length=3)
    Data Mining: Finding Similar Items
    score: 0
    
    Blogging Platform for Hackers
    score: 0.23570226039552
    
    UX Tip: Don't Hurt Me On Sign-Up
    score: 0.33333333333333
    
    Crawling the Android Marketplace
    score: 0.51639777949432
