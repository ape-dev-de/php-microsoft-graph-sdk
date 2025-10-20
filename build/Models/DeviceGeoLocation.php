<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceGeoLocation
 */
class DeviceGeoLocation
{
    /**
     * Altitude, given in meters above sea level
     */
    private ?string $altitude;

    /**
     * Heading in degrees from true north
     */
    private ?string $heading;

    /**
     * Accuracy of longitude and latitude in meters
     */
    private ?string $horizontalAccuracy;

    /**
     * Time at which location was recorded, relative to UTC
     */
    private ?\DateTimeInterface $lastCollectedDateTime;

    /**
     * Latitude coordinate of the device's location
     */
    private ?string $latitude;

    /**
     * Longitude coordinate of the device's location
     */
    private ?string $longitude;

    /**
     * Speed the device is traveling in meters per second
     */
    private ?string $speed;

    /**
     * Device location
     */
    private ?string $verticalAccuracy;

    public function getAltitude(): ?string
    {
        return $this->altitude;
    }

    public function setAltitude(?string $altitude): self
    {
        $this->altitude = $altitude;
        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function setHeading(?string $heading): self
    {
        $this->heading = $heading;
        return $this;
    }

    public function getHorizontalAccuracy(): ?string
    {
        return $this->horizontalAccuracy;
    }

    public function setHorizontalAccuracy(?string $horizontalAccuracy): self
    {
        $this->horizontalAccuracy = $horizontalAccuracy;
        return $this;
    }

    public function getLastCollectedDateTime(): ?\DateTimeInterface
    {
        return $this->lastCollectedDateTime;
    }

    public function setLastCollectedDateTime(?\DateTimeInterface $lastCollectedDateTime): self
    {
        $this->lastCollectedDateTime = $lastCollectedDateTime;
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

    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    public function setSpeed(?string $speed): self
    {
        $this->speed = $speed;
        return $this;
    }

    public function getVerticalAccuracy(): ?string
    {
        return $this->verticalAccuracy;
    }

    public function setVerticalAccuracy(?string $verticalAccuracy): self
    {
        $this->verticalAccuracy = $verticalAccuracy;
        return $this;
    }

}
