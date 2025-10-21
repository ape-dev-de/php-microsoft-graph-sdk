<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupMembers
 */
class GroupMembers
{
    /**
     * The name of the group in Microsoft Entra ID. Read-only.
     */
    private ?string $description;

    /**
     * The ID of the group in Microsoft Entra ID.
     */
    private ?string $groupId;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

}
