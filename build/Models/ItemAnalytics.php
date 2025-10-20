<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemAnalytics
 */
class ItemAnalytics
{
    /**
     */
    private ?string $allTime;

    /**
     */
    private array $itemActivityStats = [];

    /**
     */
    private ?string $lastSevenDays;

    public function getAllTime(): ?string
    {
        return $this->allTime;
    }

    public function setAllTime(?string $allTime): self
    {
        $this->allTime = $allTime;
        return $this;
    }

    public function getItemActivityStats(): array
    {
        return $this->itemActivityStats;
    }

    public function setItemActivityStats(array $itemActivityStats): self
    {
        $this->itemActivityStats = $itemActivityStats;
        return $this;
    }

    public function getLastSevenDays(): ?string
    {
        return $this->lastSevenDays;
    }

    public function setLastSevenDays(?string $lastSevenDays): self
    {
        $this->lastSevenDays = $lastSevenDays;
        return $this;
    }

}
