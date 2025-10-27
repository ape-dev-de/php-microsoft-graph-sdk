<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Photo
 */
class Photo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Camera manufacturer. Read-only. */
    public ?string $cameraMake = null;

    /** Camera model. Read-only. */
    public ?string $cameraModel = null;

    /** The denominator for the exposure time fraction from the camera. Read-only. */
    public ?string $exposureDenominator = null;

    /** The numerator for the exposure time fraction from the camera. Read-only. */
    public ?string $exposureNumerator = null;

    /** The F-stop value from the camera. Read-only. */
    public ?string $fNumber = null;

    /** The focal length from the camera. Read-only. */
    public ?string $focalLength = null;

    /** The ISO value from the camera. Read-only. */
    public ?float $iso = null;

    /** The orientation value from the camera. Writable on OneDrive Personal. */
    public ?float $orientation = null;

    /** Represents the date and time the photo was taken. Read-only. */
    public ?\DateTimeInterface $takenDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['cameraMake'])) {
            $this->cameraMake = $data['cameraMake'];
        }
        if (isset($data['cameraModel'])) {
            $this->cameraModel = $data['cameraModel'];
        }
        if (isset($data['exposureDenominator'])) {
            $this->exposureDenominator = $data['exposureDenominator'];
        }
        if (isset($data['exposureNumerator'])) {
            $this->exposureNumerator = $data['exposureNumerator'];
        }
        if (isset($data['fNumber'])) {
            $this->fNumber = $data['fNumber'];
        }
        if (isset($data['focalLength'])) {
            $this->focalLength = $data['focalLength'];
        }
        if (isset($data['iso'])) {
            $this->iso = $data['iso'];
        }
        if (isset($data['orientation'])) {
            $this->orientation = $data['orientation'];
        }
        if (isset($data['takenDateTime'])) {
            $this->takenDateTime = is_string($data['takenDateTime']) ? new \DateTimeImmutable($data['takenDateTime']) : $data['takenDateTime'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
