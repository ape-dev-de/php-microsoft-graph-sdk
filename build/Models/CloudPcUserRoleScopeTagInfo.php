<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcUserRoleScopeTagInfo
 */
class CloudPcUserRoleScopeTagInfo
{
    /**
     * Scope tag display name.
     */
    private ?string $displayName;

    /**
     * Scope tag identity.
     */
    private ?string $roleScopeTagId;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getRoleScopeTagId(): ?string
    {
        return $this->roleScopeTagId;
    }

    public function setRoleScopeTagId(?string $roleScopeTagId): self
    {
        $this->roleScopeTagId = $roleScopeTagId;
        return $this;
    }

}
