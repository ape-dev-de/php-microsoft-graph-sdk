<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsMetric
 */
class UserExperienceAnalyticsMetric
{
    /**
     * The unit of the user experience analytics metric. Examples: none, percentage, count, seconds, score.
     */
    private ?string $unit;

    /**
     * The user experience analytics metric contains the score and units of a metric of a user experience anlaytics category.
     */
    private ?string $value;


    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
