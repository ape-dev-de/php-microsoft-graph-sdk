<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureAdTokenAuthentication
 */
class AzureAdTokenAuthentication
{
    /**
     * The appID of the Microsoft Entra application to use to authenticate an app with a custom extension.
     */
    private ?string $resourceId;

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

}
