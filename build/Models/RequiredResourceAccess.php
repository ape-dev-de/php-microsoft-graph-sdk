<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequiredResourceAccess
 */
class RequiredResourceAccess
{
    /**
     * The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
     */
    private array $resourceAccess = [];

    /**
     * The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application.
     */
    private ?string $resourceAppId;


    public function getResourceAccess(): array
    {
        return $this->resourceAccess;
    }

    public function setResourceAccess(array $resourceAccess): self
    {
        $this->resourceAccess = $resourceAccess;
        return $this;
    }

    public function getResourceAppId(): ?string
    {
        return $this->resourceAppId;
    }

    public function setResourceAppId(?string $resourceAppId): self
    {
        $this->resourceAppId = $resourceAppId;
        return $this;
    }

}
