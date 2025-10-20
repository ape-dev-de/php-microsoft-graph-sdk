<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecycleBinSettings
 */
class RecycleBinSettings
{
    /**
     * Recycle bin retention period override in days for deleted content. The default value is 93; the value range is 7 to 180. The setting applies to newly deleted content only. Setting this property to null reverts to its default value. Read-write.
     */
    private ?string $retentionPeriodOverrideDays;

    public function getRetentionPeriodOverrideDays(): ?string
    {
        return $this->retentionPeriodOverrideDays;
    }

    public function setRetentionPeriodOverrideDays(?string $retentionPeriodOverrideDays): self
    {
        $this->retentionPeriodOverrideDays = $retentionPeriodOverrideDays;
        return $this;
    }

}
