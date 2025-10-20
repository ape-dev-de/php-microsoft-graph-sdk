<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternal
 */
class ExternalConnectorsExternal
{
    /**
     */
    private ?string $connections;

    public function getConnections(): ?string
    {
        return $this->connections;
    }

    public function setConnections(?string $connections): self
    {
        $this->connections = $connections;
        return $this;
    }

}
