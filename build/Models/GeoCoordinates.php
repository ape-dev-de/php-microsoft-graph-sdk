<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GeoCoordinates
 */
class GeoCoordinates
{
    /**
     * Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
     */
    private ?string $altitude;

    /**
     * Optional. The latitude, in decimal, for the item. Read-only.
     */
    private ?string $latitude;

    /**
     * Optional. The longitude, in decimal, for the item. Read-only.
     */
    private ?string $longitude;


    public function getAltitude(): ?string
    {
        return $this->altitude;
    }

    public function setAltitude(?string $altitude): self
    {
        $this->altitude = $altitude;
        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

}
