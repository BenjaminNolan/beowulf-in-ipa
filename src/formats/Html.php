<?php

class Html
{

    public function build($lines)
    {
        $output = '<!DOCTYPE html><head><title>Beowulf in IPA</title></head><body><h1>Beowulf in IPA</h1><p>The following is the original text of the Old English epic poem Beowulf in IPA format.';
        foreach ($lines as $i => $line) {
            // Skip the title lines
            if ($i <= 2) continue;

            if (preg_match('/^\s*(\d+)\s*[–—-]\s*(\d+)\s*$/', $line)) {
                $output .= preg_replace('/^\s*(\d+)\s*[–—-]\s*(\d+)\s*$/', "</p><h2>Lines $1 to $2</h2><p>", $line);
            } else {
                $output .= $line . ' <br />';
            }
        }
        $output .= '</p></body></html>';

        file_put_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'build' . DIRECTORY_SEPARATOR . 'Beowulf_in_IPA.html', $output);
    }

}
