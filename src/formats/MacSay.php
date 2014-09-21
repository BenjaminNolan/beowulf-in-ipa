<?php

class MacSay
{

    public function build($lines)
    {
        $output = '';
        foreach ($lines as $i => $line) {
            // Skip the title lines
            if ($i <= 2) continue;

            if (preg_match('/^\s*(\d+)\s*[–—-]\s*(\d+)\s*$/', $line)) {
                $output .= preg_replace('/^\s*(\d+)\s*[–—-]\s*(\d+)\s*$/', "\n# Lines $1 to $2\n", $line);
            } else {
                $output .= 'say --rate=120 -v Fiona "/' . $line . '/"' . "\n";
            }
        }

        file_put_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'build' . DIRECTORY_SEPARATOR . 'mac-say-beowulf.sh', $output);
    }

}
