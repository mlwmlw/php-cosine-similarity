php-cosine-similarity
=====================

measures a cosine similarity between two one-hot encoding vectors


Demo code
```php
$dot = Similarity::tags_to_point(["a", "b", "c", "d"]);
$score = Similarity::cosine(["a", "b"], ["b", "c"], $dot);
``` 
    
    Example articles:
    Array
    (
        [0] => Array
            (
                [article] => Data Mining: Finding Similar Items
                [tags] => Array
                    (
                        [0] => Algorithms
                        [1] => Programming
                        [2] => Mining
                        [3] => Python
                        [4] => Ruby
                    )

            )

        [1] => Array
            (
                [article] => Blogging Platform for Hackers
                [tags] => Array
                    (
                        [0] => Publishing
                        [1] => Server
                        [2] => Cloud
                        [3] => Heroku
                        [4] => Jekyll
                        [5] => GAE
                    )

            )

        [2] => Array
            (
                [article] => UX Tip: Don't Hurt Me On Sign-Up
                [tags] => Array
                    (
                        [0] => Web
                        [1] => Design
                        [2] => UX
                    )

            )

        [3] => Array
            (
                [article] => Crawling the Android Marketplace
                [tags] => Array
                    (
                        [0] => Python
                        [1] => Android
                        [2] => Mining
                        [3] => Web
                        [4] => API
                    )

            )

    )
    
    Target article:
    Array
    (
        [0] => Publishing
        [1] => Web
        [2] => API
    )
    
    Sorted result similarity:
    Array
    (
        [Data Mining: Finding Similar Items] => 0
        [Blogging Platform for Hackers] => 0.23570226039552
        [UX Tip: Don't Hurt Me On Sign-Up] => 0.33333333333333
        [Crawling the Android Marketplace] => 0.51639777949432
    )
