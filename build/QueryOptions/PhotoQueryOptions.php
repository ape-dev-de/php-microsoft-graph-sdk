<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Photo resources
 *
 * Available select fields:
 * - cameraMake
 * - cameraModel
 * - exposureDenominator
 * - exposureNumerator
 * - fNumber
 * - focalLength
 * - iso
 * - orientation
 * - takenDateTime
 */
class PhotoQueryOptions extends QueryOptions
{
    public const FIELD_CAMERA_MAKE = 'cameraMake';
    public const FIELD_CAMERA_MODEL = 'cameraModel';
    public const FIELD_EXPOSURE_DENOMINATOR = 'exposureDenominator';
    public const FIELD_EXPOSURE_NUMERATOR = 'exposureNumerator';
    public const FIELD_F_NUMBER = 'fNumber';
    public const FIELD_FOCAL_LENGTH = 'focalLength';
    public const FIELD_ISO = 'iso';
    public const FIELD_ORIENTATION = 'orientation';
    public const FIELD_TAKEN_DATE_TIME = 'takenDateTime';

    /**
     * Select specific Photo properties
     * 
     * @param array<string> $select Use PhotoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
