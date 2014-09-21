<?php

class MacSay
{

    public function build($lines)
    {
        $output = '';
        $lineNum = 1;
        foreach ($lines->p as $i => $p) {
            // Loop through each 'paragraph'
            $output .= "\n# Lines {$lineNum} to " . ($lineNum + count($p->s)) . "\n";
            foreach ($p->s as $j => $s) {
                // Loop through each 'sentence'
                $line = '';
                foreach ($s as $m) {
                    var_dump($m);
                }
                die();
                $output .= "say --rate=120 -v Fiona \"/{$line}/\"\n";
            }
            $lineNum += count($p->s);
        }

        file_put_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'build' . DIRECTORY_SEPARATOR . 'mac-say-beowulf.sh', $output);
    }

}
