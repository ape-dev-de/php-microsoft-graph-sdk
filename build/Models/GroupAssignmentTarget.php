<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupAssignmentTarget
 */
class GroupAssignmentTarget
{
    /**
     * Represents an assignment to a group.
     */
    private ?string $groupId;


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
