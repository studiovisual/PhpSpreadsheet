<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet;

class HeaderFooterDrawing extends Drawing
{
    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        return password_hash(
            $this->getPath() .
            $this->name .
            $this->offsetX .
            $this->offsetY .
            $this->width .
            $this->height .
            __CLASS__,
            PASSWORD_DEFAULT
        );
    }
}
