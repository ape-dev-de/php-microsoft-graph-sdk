<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AverageComparativeScore
 */
class AverageComparativeScore
{
    /**
     * Average score within specified basis.
     */
    private ?string $averageScore;

    /**
     * Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes.
     */
    private ?string $basis;

    public function getAverageScore(): ?string
    {
        return $this->averageScore;
    }

    public function setAverageScore(?string $averageScore): self
    {
        $this->averageScore = $averageScore;
        return $this;
    }

    public function getBasis(): ?string
    {
        return $this->basis;
    }

    public function setBasis(?string $basis): self
    {
        $this->basis = $basis;
        return $this;
    }

}
