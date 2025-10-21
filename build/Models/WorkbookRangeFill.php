<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeFill
 */
class WorkbookRangeFill
{
    /**
     * HTML color code representing the color of the border line. Can either be of the form #RRGGBB, for example ''FFA500'', or be a named HTML color, for example ''orange''.
     */
    private ?string $color;


    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

}
