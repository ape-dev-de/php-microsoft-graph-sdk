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
     * @var string[]
     */
    private array $delegatedPermissionIds = [];


    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDelegatedPermissionIds(): array
    {
        return $this->delegatedPermissionIds;
    }

    /**
     * @param string[] $delegatedPermissionIds
     */
    public function setDelegatedPermissionIds(array $delegatedPermissionIds): self
    {
        $this->delegatedPermissionIds = $delegatedPermissionIds;
        return $this;
    }

}
