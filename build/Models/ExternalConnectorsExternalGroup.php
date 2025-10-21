<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalGroup
 */
class ExternalConnectorsExternalGroup
{
    /**
     * The description of the external group. Optional.
     */
    private ?string $description;

    /**
     * The friendly name of the external group. Optional.
     */
    private ?string $displayName;

    /**
     * A member added to an externalGroup. You can add Microsoft Entra users, Microsoft Entra groups, or an externalGroup as members.
     * @var string[]
     */
    private array $members = [];


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

    /**
     * @return string[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * @param string[] $members
     */
    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

}
