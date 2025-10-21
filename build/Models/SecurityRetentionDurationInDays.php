<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionDurationInDays
 */
class SecurityRetentionDurationInDays
{
    /**
     * Specifies the time period in days for which an item with the applied retention label will be retained for.
     */
    private ?string $days;


    public function getDays(): ?string
    {
        return $this->days;
    }

    public function setDays(?string $days): self
    {
        $this->days = $days;
        return $this;
    }

}
