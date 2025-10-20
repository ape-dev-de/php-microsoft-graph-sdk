<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterLocation resources
 *
 * Available select fields:
 * - altitudeInMeters
 * - building
 * - city
 * - countryOrRegion
 * - floor
 * - floorDescription
 * - latitude
 * - longitude
 * - organization
 * - postalCode
 * - roomDescription
 * - roomName
 * - site
 * - stateOrProvince
 * - streetAddress
 * - subdivision
 * - subunit
 */
class PrinterLocationQueryOptions extends QueryOptions
{
    public const FIELD_ALTITUDE_IN_METERS = 'altitudeInMeters';
    public const FIELD_BUILDING = 'building';
    public const FIELD_CITY = 'city';
    public const FIELD_COUNTRY_OR_REGION = 'countryOrRegion';
    public const FIELD_FLOOR = 'floor';
    public const FIELD_FLOOR_DESCRIPTION = 'floorDescription';
    public const FIELD_LATITUDE = 'latitude';
    public const FIELD_LONGITUDE = 'longitude';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_POSTAL_CODE = 'postalCode';
    public const FIELD_ROOM_DESCRIPTION = 'roomDescription';
    public const FIELD_ROOM_NAME = 'roomName';
    public const FIELD_SITE = 'site';
    public const FIELD_STATE_OR_PROVINCE = 'stateOrProvince';
    public const FIELD_STREET_ADDRESS = 'streetAddress';
    public const FIELD_SUBDIVISION = 'subdivision';
    public const FIELD_SUBUNIT = 'subunit';

    /**
     * Select specific PrinterLocation properties
     * 
     * @param array<string> $select Use PrinterLocationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
