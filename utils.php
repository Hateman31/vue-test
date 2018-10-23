<?php

$json = json_decode('[
    {
        "text": "Choose your city:",
        "type": "radio",
        "answers":[
            {"id": 1, "text":"Moscow"},
            {"id": 2, "text":"Berlin"},
            {"id": 3, "text":"Paris"}
        ]
    },
    {
        "text": "Choose music genres you like:",
        "type": "checkbox",
        "answers":[
            {"id": 1, "text":"Heavy Metal"},
            {"id": 2, "text":"Rock"},
            {"id": 3, "text":"Jazz"},
            {"id": 4, "text":"Hip-Hop"}
        ]
    }
]',true);


echo json_encode($json);
// phpinfo();