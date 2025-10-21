<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConfiguration
 */
class ExternalConnectorsConfiguration
{
    /**
     * A collection of application IDs for registered Microsoft Entra apps that are allowed to manage the externalConnection and to index content in the externalConnection.
     * @var string[]
     */
    private array $authorizedAppIds = [];


    /**
     * @return string[]
     */
    public function getAuthorizedAppIds(): array
    {
        return $this->authorizedAppIds;
    }

    /**
     * @param string[] $authorizedAppIds
     */
    public function setAuthorizedAppIds(array $authorizedAppIds): self
    {
        $this->authorizedAppIds = $authorizedAppIds;
        return $this;
    }

}
