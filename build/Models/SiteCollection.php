<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteCollection
 */
class SiteCollection
{
    public function __construct(
        /** Represents whether the site collection is recently archived, fully archived, or reactivating. Possible values are: recentlyArchived, fullyArchived, reactivating, unknownFutureValue. */
        public ?string $archivalDetails = null,
        /** The geographic region code for where this site collection resides. Only present for multi-geo tenants. Read-only. */
        public ?string $dataLocationCode = null,
        /** The hostname for the site collection. Read-only. */
        public ?string $hostname = null,
        /** If present, indicates that this is a root site collection in SharePoint. Read-only. */
        public ?string $root = null
    ) {}
}
