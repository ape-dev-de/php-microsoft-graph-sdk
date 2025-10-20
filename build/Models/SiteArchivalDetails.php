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
     */
    private ?string $archiveStatus;

    public function getArchiveStatus(): ?string
    {
        return $this->archiveStatus;
    }

    public function setArchiveStatus(?string $archiveStatus): self
    {
        $this->archiveStatus = $archiveStatus;
        return $this;
    }

}
