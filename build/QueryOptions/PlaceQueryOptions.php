<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Place resources
 *
 * Available select fields:
 * - address
 * - displayName
 * - geoCoordinates
 * - phone
 */
class PlaceQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GEO_COORDINATES = 'geoCoordinates';
    public const FIELD_PHONE = 'phone';

    /**
     * Select specific Place properties
     * 
     * @param array<string> $select Use PlaceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
