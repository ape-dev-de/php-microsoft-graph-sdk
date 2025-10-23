<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteArchivalDetails
 */
class SiteArchivalDetails
{
    /** 
     * Represents the current archive status of the site collection. Returned only on $select. The possible values are: recentlyArchived, fullyArchived, reactivating, unknownFutureValue.
     * @var SiteArchiveStatus|\stdClass|null
     */
    public mixed $archiveStatus = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['archiveStatus'])) {
            $this->archiveStatus = is_array($data['archiveStatus']) ? new SiteArchiveStatus($data['archiveStatus']) : $data['archiveStatus'];
        }
    }
}
