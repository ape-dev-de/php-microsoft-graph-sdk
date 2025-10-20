<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosUpdateConfiguration
 */
class IosUpdateConfiguration
{
    /**
     * Active Hours End (active hours mean the time window when updates install should not happen)
     */
    private ?string $activeHoursEnd;

    /**
     * Active Hours Start (active hours mean the time window when updates install should not happen)
     */
    private ?string $activeHoursStart;

    /**
     * Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     */
    private array $scheduledInstallDays = [];

    /**
     * IOS Update Configuration, allows you to configure time window within week to install iOS updates
     */
    private ?string $utcTimeOffsetInMinutes;

    public function getActiveHoursEnd(): ?string
    {
        return $this->activeHoursEnd;
    }

    public function setActiveHoursEnd(?string $activeHoursEnd): self
    {
        $this->activeHoursEnd = $activeHoursEnd;
        return $this;
    }

    public function getActiveHoursStart(): ?string
    {
        return $this->activeHoursStart;
    }

    public function setActiveHoursStart(?string $activeHoursStart): self
    {
        $this->activeHoursStart = $activeHoursStart;
        return $this;
    }

    public function getScheduledInstallDays(): array
    {
        return $this->scheduledInstallDays;
    }

    public function setScheduledInstallDays(array $scheduledInstallDays): self
    {
        $this->scheduledInstallDays = $scheduledInstallDays;
        return $this;
    }

    public function getUtcTimeOffsetInMinutes(): ?string
    {
        return $this->utcTimeOffsetInMinutes;
    }

    public function setUtcTimeOffsetInMinutes(?string $utcTimeOffsetInMinutes): self
    {
        $this->utcTimeOffsetInMinutes = $utcTimeOffsetInMinutes;
        return $this;
    }

}
