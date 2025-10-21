<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Photo
 */
class Photo
{
    public function __construct(
        /** Camera manufacturer. Read-only. */
        public ?string $cameraMake = null,
        /** Camera model. Read-only. */
        public ?string $cameraModel = null,
        /** The denominator for the exposure time fraction from the camera. Read-only. */
        public ?string $exposureDenominator = null,
        /** The numerator for the exposure time fraction from the camera. Read-only. */
        public ?string $exposureNumerator = null,
        /** The F-stop value from the camera. Read-only. */
        public ?string $fNumber = null,
        /** The focal length from the camera. Read-only. */
        public ?string $focalLength = null,
        /** The ISO value from the camera. Read-only. */
        public ?float $iso = null,
        /** The orientation value from the camera. Writable on OneDrive Personal. */
        public ?float $orientation = null,
        /** Represents the date and time the photo was taken. Read-only. */
        public ?\DateTimeInterface $takenDateTime = null
    ) {}
}
