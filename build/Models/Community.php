<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Community
 */
class Community
{
    /**
     * The description of the community. The maximum length is 1,024 characters.
     */
    private ?string $description;

    /**
     * The name of the community. The maximum length is 255 characters.
     */
    private ?string $displayName;

    /**
     * The ID of the Microsoft 365 group that manages the membership of this community.
     */
    private ?string $groupId;

    /**
     */
    private ?string $privacy;

    /**
     * The Microsoft 365 group that manages the membership of this community.
     */
    private ?string $group;

    /**
     * Represents a community in Viva Engage that is a central place for conversations,\nfiles, events, and updates for people sharing a common interest or goal.
     * @var string[]
     */
    private array $owners = [];


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

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    public function getPrivacy(): ?string
    {
        return $this->privacy;
    }

    public function setPrivacy(?string $privacy): self
    {
        $this->privacy = $privacy;
        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOwners(): array
    {
        return $this->owners;
    }

    /**
     * @param string[] $owners
     */
    public function setOwners(array $owners): self
    {
        $this->owners = $owners;
        return $this;
    }

}
