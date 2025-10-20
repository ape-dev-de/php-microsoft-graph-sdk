<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhysicalAddress resources
 *
 * Available select fields:
 * - city
 * - countryOrRegion
 * - postalCode
 * - state
 * - street
 */
class PhysicalAddressQueryOptions extends QueryOptions
{
    public const FIELD_CITY = 'city';
    public const FIELD_COUNTRY_OR_REGION = 'countryOrRegion';
    public const FIELD_POSTAL_CODE = 'postalCode';
    public const FIELD_STATE = 'state';
    public const FIELD_STREET = 'street';

    /**
     * Select specific PhysicalAddress properties
     * 
     * @param array<string> $select Use PhysicalAddressQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
