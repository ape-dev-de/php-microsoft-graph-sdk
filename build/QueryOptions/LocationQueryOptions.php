<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Location resources
 *
 * Available select fields:
 * - address
 * - coordinates
 * - displayName
 * - locationEmailAddress
 * - locationType
 * - locationUri
 * - uniqueId
 * - uniqueIdType
 */
class LocationQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_COORDINATES = 'coordinates';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LOCATION_EMAIL_ADDRESS = 'locationEmailAddress';
    public const FIELD_LOCATION_TYPE = 'locationType';
    public const FIELD_LOCATION_URI = 'locationUri';
    public const FIELD_UNIQUE_ID = 'uniqueId';
    public const FIELD_UNIQUE_ID_TYPE = 'uniqueIdType';

    /**
     * Select specific Location properties
     * 
     * @param array<string> $select Use LocationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
