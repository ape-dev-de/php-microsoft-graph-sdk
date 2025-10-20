<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RetentionSetting
 */
class RetentionSetting
{
    /**
     * The frequency of the backup.
     */
    private ?string $interval;

    /**
     * The period of time to retain the protected data for a single Microsoft 365 service.
     */
    private ?string $period;

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): self
    {
        $this->interval = $interval;
        return $this;
    }

    public function getPeriod(): ?string
    {
        return $this->period;
    }

    public function setPeriod(?string $period): self
    {
        $this->period = $period;
        return $this;
    }

}
