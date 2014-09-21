<?php

class Html
{

    public function build($lines)
    {
        $output = '<!DOCTYPE html><head><title>Beowulf in IPA</title></head><body><h1>Beowulf in IPA</h1><p>The following is the original text of the Old English epic poem Beowulf in IPA format.</p>';
        $lineNum = 1;
        foreach ($lines->p as $i => $p) {
            // Loop through each 'paragraph'
            $output .= '<h2>Lines ' . $lineNum . ' to ' . ($lineNum + count($p->s)) . '</h2><p>';
            foreach ($p->s as $j => $s) {
                // Loop through each 'sentence'
                if ($j > 0) $output .= '<br />';
                $output .= '';
                foreach ($s as $m) {
                    var_dump($m);
                }
                die();
            }
            $output .= '</p>';
            $lineNum += count($p->s);
        }
        $output .= '</body></html>';

        file_put_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'build' . DIRECTORY_SEPARATOR . 'Beowulf_in_IPA.html', $output);
    }

}
