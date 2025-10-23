<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CountryNamedLocation
 */
class CountryNamedLocation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents creation date and time of the location using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Human-readable name of the location. */
    public ?string $displayName = null;

    /** The Timestamp type represents last modified date and time of the location using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * List of countries and/or regions in two-letter format specified by ISO 3166-2. Required.
     * @var string[]
     */
    public array $countriesAndRegions = [];

    /** 
     * Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress(default) and authenticatorAppGps. Note: authenticatorAppGps is not yet supported in the Microsoft Cloud for US Government.
     * @var CountryLookupMethodType|\stdClass|null
     */
    public mixed $countryLookupMethod = null;

    /** true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false. */
    public ?bool $includeUnknownCountriesAndRegions = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['countriesAndRegions'])) {
            $this->countriesAndRegions = $data['countriesAndRegions'];
        }
        if (isset($data['countryLookupMethod'])) {
            $this->countryLookupMethod = is_array($data['countryLookupMethod']) ? new CountryLookupMethodType($data['countryLookupMethod']) : $data['countryLookupMethod'];
        }
        if (isset($data['includeUnknownCountriesAndRegions'])) {
            $this->includeUnknownCountriesAndRegions = $data['includeUnknownCountriesAndRegions'];
        }
    }
}
