<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomTimeZone
 */
class CustomTimeZone
{
    /**
     * The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset.
     */
    private ?float $bias;

    /**
     * Specifies when the time zone switches from standard time to daylight saving time.
     */
    private ?string $daylightOffset;

    /**
     * Specifies when the time zone switches from daylight saving time to standard time.
     */
    private ?string $standardOffset;

    public function getBias(): ?float
    {
        return $this->bias;
    }

    public function setBias(?float $bias): self
    {
        $this->bias = $bias;
        return $this;
    }

    public function getDaylightOffset(): ?string
    {
        return $this->daylightOffset;
    }

    public function setDaylightOffset(?string $daylightOffset): self
    {
        $this->daylightOffset = $daylightOffset;
        return $this;
    }

    public function getStandardOffset(): ?string
    {
        return $this->standardOffset;
    }

    public function setStandardOffset(?string $standardOffset): self
    {
        $this->standardOffset = $standardOffset;
        return $this;
    }

}
