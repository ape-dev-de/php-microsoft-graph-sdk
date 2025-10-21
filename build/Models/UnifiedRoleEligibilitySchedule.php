<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleEligibilitySchedule
 */
class UnifiedRoleEligibilitySchedule
{
    /**
     * How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne).
     */
    private ?string $memberType;

    /**
     * The period of the role eligibility.
     */
    private ?string $scheduleInfo;


    public function getMemberType(): ?string
    {
        return $this->memberType;
    }

    public function setMemberType(?string $memberType): self
    {
        $this->memberType = $memberType;
        return $this;
    }

    public function getScheduleInfo(): ?string
    {
        return $this->scheduleInfo;
    }

    public function setScheduleInfo(?string $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
        return $this;
    }

}
