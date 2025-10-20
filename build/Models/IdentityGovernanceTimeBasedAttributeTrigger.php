<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTimeBasedAttributeTrigger
 */
class IdentityGovernanceTimeBasedAttributeTrigger
{
    /**
     * How many days before or after the time-based attribute specified the workflow should trigger. For example, if the attribute is employeeHireDate and offsetInDays is -1, then the workflow should trigger one day before the employee hire date. The value can range between -180 and 180 days.
     */
    private ?float $offsetInDays;

    /**
     */
    private ?string $timeBasedAttribute;

    public function getOffsetInDays(): ?float
    {
        return $this->offsetInDays;
    }

    public function setOffsetInDays(?float $offsetInDays): self
    {
        $this->offsetInDays = $offsetInDays;
        return $this;
    }

    public function getTimeBasedAttribute(): ?string
    {
        return $this->timeBasedAttribute;
    }

    public function setTimeBasedAttribute(?string $timeBasedAttribute): self
    {
        $this->timeBasedAttribute = $timeBasedAttribute;
        return $this;
    }

}
