<?php

// So, this is the /ENORMOUS/ source array that everything else is generated
// from. The reason it's an array rather than SSML (Semantic Speech Mark-up
// Language) is that XML parsing is /really/ slow and resource-intensive, and
// also it's a pain-in-the-arse to deal with.

// Each array is a line in the poem according to the Klaeber edition
// Each sub array is a word alongside its transcription
$beowulf = [
    [
        [
            'word' => 'HWÆT',
            'ipa' => 'hwæt',
            'after' => ',',
        ],
        [
            'word' => 'WE',
            'ipa' => 'we',
        ],
        [
            'word' => 'GAR-DEna',
            'ipa' => 'ˈɡɑːrˌdenɑ',
        ],
        [
            'word' => 'in',
            'ipa' => 'in',
        ],
        [
            'word' => 'geardagum',
            'ipa' => 'ˈjæːɑrdɑɣum',
            'after' => ',',
        ],
    ],
    [
        þeodcyninga þrym gefrunon,
        ˈðeːodˌkyniŋɡɑ θrymː jeˈfruːnon
    ],
    [
        hu ða æþelingas ellen fremedon!
        huː ðɑ æðelɪŋɡɑs ˈelːen ˈfremːedon!
    ],
    [
        oft Scyld Scefing sceaþena þreatum,
        oft ʃyld ʃefiŋ ˈʃæɑðenɑ θræːɑtum,
    ],
    [
        monegum mægþum meodosetla ofteah,
        ˈmɑniɣum mæjθum ˈmeːodusetlə ovˈtæːax,
    ],
    [
        egsode eorlas, syððanærest wearð
        'ejzudə eːorɑs, syðːɑnærest wæːɑrð
    ],
    [
        feasceaft funden; he þæs frofre gebad,
        fæːɑʃæːɑft ˈfundɑn; heː θæs frofrə gəbɑd,
    ],
    [
        weox under wolcnum weorðmyndum þah,
        weox untər ˈwolknum wəorðmyndum θɑː
    ],
    [
        oð þæt him æghwylc ymbsittendra
        oð θæːt him æːxylk ymbsittəndrə
    ],
];
