<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DaylightTimeZoneOffset
 */
class DaylightTimeZoneOffset
{
    /**
     * The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
     */
    private ?string $daylightBias;


    public function getDaylightBias(): ?string
    {
        return $this->daylightBias;
    }

    public function setDaylightBias(?string $daylightBias): self
    {
        $this->daylightBias = $daylightBias;
        return $this;
    }

}
