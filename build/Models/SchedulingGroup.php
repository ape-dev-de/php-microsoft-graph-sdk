<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SchedulingGroup
 */
class SchedulingGroup
{
    /**
     * The code for the schedulingGroup to represent an external identifier. This field must be unique within the team in Microsoft Teams and uses an alphanumeric format, with a maximum of 100 characters.
     */
    private ?string $code;

    /**
     * The display name for the schedulingGroup. Required.
     */
    private ?string $displayName;

    /**
     * Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required.
     */
    private ?bool $isActive;

    /**
     * The list of user IDs that are a member of the schedulingGroup. Required.
     * @var string[]
     */
    private array $userIds = [];


    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUserIds(): array
    {
        return $this->userIds;
    }

    /**
     * @param string[] $userIds
     */
    public function setUserIds(array $userIds): self
    {
        $this->userIds = $userIds;
        return $this;
    }

}
