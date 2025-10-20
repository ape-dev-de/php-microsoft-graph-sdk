<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInLocation resources
 *
 * Available select fields:
 * - city
 * - countryOrRegion
 * - geoCoordinates
 * - state
 */
class SignInLocationQueryOptions extends QueryOptions
{
    public const FIELD_CITY = 'city';
    public const FIELD_COUNTRY_OR_REGION = 'countryOrRegion';
    public const FIELD_GEO_COORDINATES = 'geoCoordinates';
    public const FIELD_STATE = 'state';

    /**
     * Select specific SignInLocation properties
     * 
     * @param array<string> $select Use SignInLocationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
