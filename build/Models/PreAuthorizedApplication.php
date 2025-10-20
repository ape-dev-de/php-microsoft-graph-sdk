<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PreAuthorizedApplication
 */
class PreAuthorizedApplication
{
    /**
     * The unique identifier for the application.
     */
    private ?string $appId;

    /**
     * The unique identifier for the oauth2PermissionScopes the application requires.
     */
    private ?string $delegatedPermissionIds;

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getDelegatedPermissionIds(): ?string
    {
        return $this->delegatedPermissionIds;
    }

    public function setDelegatedPermissionIds(?string $delegatedPermissionIds): self
    {
        $this->delegatedPermissionIds = $delegatedPermissionIds;
        return $this;
    }

}
