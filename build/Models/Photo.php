<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Photo
 */
class Photo
{
    /**
     * Camera manufacturer. Read-only.
     */
    private ?string $cameraMake;

    /**
     * Camera model. Read-only.
     */
    private ?string $cameraModel;

    /**
     * The denominator for the exposure time fraction from the camera. Read-only.
     */
    private ?string $exposureDenominator;

    /**
     * The numerator for the exposure time fraction from the camera. Read-only.
     */
    private ?string $exposureNumerator;

    /**
     * The F-stop value from the camera. Read-only.
     */
    private ?string $fNumber;

    /**
     * The focal length from the camera. Read-only.
     */
    private ?string $focalLength;

    /**
     * The ISO value from the camera. Read-only.
     */
    private ?float $iso;

    /**
     * The orientation value from the camera. Writable on OneDrive Personal.
     */
    private ?float $orientation;

    /**
     * Represents the date and time the photo was taken. Read-only.
     */
    private ?\DateTimeInterface $takenDateTime;

    public function getCameraMake(): ?string
    {
        return $this->cameraMake;
    }

    public function setCameraMake(?string $cameraMake): self
    {
        $this->cameraMake = $cameraMake;
        return $this;
    }

    public function getCameraModel(): ?string
    {
        return $this->cameraModel;
    }

    public function setCameraModel(?string $cameraModel): self
    {
        $this->cameraModel = $cameraModel;
        return $this;
    }

    public function getExposureDenominator(): ?string
    {
        return $this->exposureDenominator;
    }

    public function setExposureDenominator(?string $exposureDenominator): self
    {
        $this->exposureDenominator = $exposureDenominator;
        return $this;
    }

    public function getExposureNumerator(): ?string
    {
        return $this->exposureNumerator;
    }

    public function setExposureNumerator(?string $exposureNumerator): self
    {
        $this->exposureNumerator = $exposureNumerator;
        return $this;
    }

    public function getFNumber(): ?string
    {
        return $this->fNumber;
    }

    public function setFNumber(?string $fNumber): self
    {
        $this->fNumber = $fNumber;
        return $this;
    }

    public function getFocalLength(): ?string
    {
        return $this->focalLength;
    }

    public function setFocalLength(?string $focalLength): self
    {
        $this->focalLength = $focalLength;
        return $this;
    }

    public function getIso(): ?float
    {
        return $this->iso;
    }

    public function setIso(?float $iso): self
    {
        $this->iso = $iso;
        return $this;
    }

    public function getOrientation(): ?float
    {
        return $this->orientation;
    }

    public function setOrientation(?float $orientation): self
    {
        $this->orientation = $orientation;
        return $this;
    }

    public function getTakenDateTime(): ?\DateTimeInterface
    {
        return $this->takenDateTime;
    }

    public function setTakenDateTime(?\DateTimeInterface $takenDateTime): self
    {
        $this->takenDateTime = $takenDateTime;
        return $this;
    }

}
