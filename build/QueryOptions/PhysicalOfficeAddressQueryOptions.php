<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhysicalOfficeAddress resources
 *
 * Available select fields:
 * - city
 * - countryOrRegion
 * - officeLocation
 * - postalCode
 * - state
 * - street
 */
class PhysicalOfficeAddressQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PhysicalOfficeAddress
     */
    public const FIELD_CITY = 'city';
    public const FIELD_COUNTRY_OR_REGION = 'countryOrRegion';
    public const FIELD_OFFICE_LOCATION = 'officeLocation';
    public const FIELD_POSTAL_CODE = 'postalCode';
    public const FIELD_STATE = 'state';
    public const FIELD_STREET = 'street';

    /**
     * Select specific PhysicalOfficeAddress properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
