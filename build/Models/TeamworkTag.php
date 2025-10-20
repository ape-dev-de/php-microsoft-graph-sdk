<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkTag
 */
class TeamworkTag
{
    /**
     * The description of the tag as it appears to the user in Microsoft Teams. A teamworkTag can't have more than 200 teamworkTagMembers.
     */
    private ?string $description;

    /**
     * The name of the tag as it appears to the user in Microsoft Teams.
     */
    private ?string $displayName;

    /**
     * The number of users assigned to the tag.
     */
    private ?float $memberCount;

    /**
     * The type of the tag. Default is standard.
     */
    private ?string $tagType;

    /**
     * ID of the team in which the tag is defined.
     */
    private ?string $teamId;

    /**
     * Users assigned to the tag.
     */
    private ?string $members;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getMemberCount(): ?float
    {
        return $this->memberCount;
    }

    public function setMemberCount(?float $memberCount): self
    {
        $this->memberCount = $memberCount;
        return $this;
    }

    public function getTagType(): ?string
    {
        return $this->tagType;
    }

    public function setTagType(?string $tagType): self
    {
        $this->tagType = $tagType;
        return $this;
    }

    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    public function setTeamId(?string $teamId): self
    {
        $this->teamId = $teamId;
        return $this;
    }

    public function getMembers(): ?string
    {
        return $this->members;
    }

    public function setMembers(?string $members): self
    {
        $this->members = $members;
        return $this;
    }

}
