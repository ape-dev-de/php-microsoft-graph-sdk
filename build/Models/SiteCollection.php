<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteCollection
 */
class SiteCollection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Represents whether the site collection is recently archived, fully archived, or reactivating. Possible values are: recentlyArchived, fullyArchived, reactivating, unknownFutureValue.
     * @var SiteArchivalDetails|\stdClass|null
     */
    public SiteArchivalDetails|\stdClass|null $archivalDetails = null;

    /** The geographic region code for where this site collection resides. Only present for multi-geo tenants. Read-only. */
    public ?string $dataLocationCode = null;

    /** The hostname for the site collection. Read-only. */
    public ?string $hostname = null;

    /** 
     * If present, indicates that this is a root site collection in SharePoint. Read-only.
     * @var Root|\stdClass|null
     */
    public Root|\stdClass|null $root = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['archivalDetails'])) {
            $this->archivalDetails = is_array($data['archivalDetails']) ? new SiteArchivalDetails($data['archivalDetails']) : $data['archivalDetails'];
        }
        if (isset($data['dataLocationCode'])) {
            $this->dataLocationCode = $data['dataLocationCode'];
        }
        if (isset($data['hostname'])) {
            $this->hostname = $data['hostname'];
        }
        if (isset($data['root'])) {
            $this->root = is_array($data['root']) ? new Root($data['root']) : $data['root'];
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
