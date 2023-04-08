<?php

namespace App;

class ToasterPro extends Toaster
{
    public int $size = 4;

    public function toastWithBagel()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagel option' . PHP_EOL;
        }
    }
}