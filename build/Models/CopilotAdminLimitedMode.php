<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminLimitedMode
 */
class CopilotAdminLimitedMode
{
    /**
     */
    private ?string $groupId;

    /**
     */
    private ?string $isEnabledForGroup;


    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    public function getIsEnabledForGroup(): ?string
    {
        return $this->isEnabledForGroup;
    }

    public function setIsEnabledForGroup(?string $isEnabledForGroup): self
    {
        $this->isEnabledForGroup = $isEnabledForGroup;
        return $this;
    }

}
