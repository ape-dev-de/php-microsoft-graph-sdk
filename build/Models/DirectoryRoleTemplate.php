<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryRoleTemplate
 */
class DirectoryRoleTemplate
{
    /**
     * The description to set for the directory role. Read-only.
     */
    private ?string $description;

    /**
     * The display name to set for the directory role. Read-only.
     */
    private ?string $displayName;

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

}
