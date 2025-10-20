<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookGeoCoordinates
 */
class OutlookGeoCoordinates
{
    /**
     * The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters.
     */
    private ?string $accuracy;

    /**
     * The altitude of the location.
     */
    private ?string $altitude;

    /**
     * The accuracy of the altitude.
     */
    private ?string $altitudeAccuracy;

    /**
     * The latitude of the location.
     */
    private ?string $latitude;

    /**
     * The longitude of the location.
     */
    private ?string $longitude;

    public function getAccuracy(): ?string
    {
        return $this->accuracy;
    }

    public function setAccuracy(?string $accuracy): self
    {
        $this->accuracy = $accuracy;
        return $this;
    }

    public function getAltitude(): ?string
    {
        return $this->altitude;
    }

    public function setAltitude(?string $altitude): self
    {
        $this->altitude = $altitude;
        return $this;
    }

    public function getAltitudeAccuracy(): ?string
    {
        return $this->altitudeAccuracy;
    }

    public function setAltitudeAccuracy(?string $altitudeAccuracy): self
    {
        $this->altitudeAccuracy = $altitudeAccuracy;
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
