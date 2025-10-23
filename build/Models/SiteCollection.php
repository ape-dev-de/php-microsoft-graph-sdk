<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteCollection
 */
class SiteCollection
{
    /** 
     * Represents whether the site collection is recently archived, fully archived, or reactivating. Possible values are: recentlyArchived, fullyArchived, reactivating, unknownFutureValue.
     * @var SiteArchivalDetails|\stdClass|null
     */
    public mixed $archivalDetails = null;

    /** The geographic region code for where this site collection resides. Only present for multi-geo tenants. Read-only. */
    public ?string $dataLocationCode = null;

    /** The hostname for the site collection. Read-only. */
    public ?string $hostname = null;

    /** 
     * If present, indicates that this is a root site collection in SharePoint. Read-only.
     * @var Root|\stdClass|null
     */
    public mixed $root = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['archivalDetails'])) {
            $this->archivalDetails = $data['archivalDetails'];
        }
        if (isset($data['dataLocationCode'])) {
            $this->dataLocationCode = $data['dataLocationCode'];
        }
        if (isset($data['hostname'])) {
            $this->hostname = $data['hostname'];
        }
        if (isset($data['root'])) {
            $this->root = $data['root'];
        }
    }
}
