<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteArchivalDetails
 */
class SiteArchivalDetails
{
    public function __construct(
        /** Represents the current archive status of the site collection. Returned only on $select. The possible values are: recentlyArchived, fullyArchived, reactivating, unknownFutureValue. */
        public ?SiteArchiveStatus $archiveStatus = null
    ) {}
}
