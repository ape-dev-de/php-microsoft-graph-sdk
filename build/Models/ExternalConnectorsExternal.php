<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternal
 */
class ExternalConnectorsExternal
{
    /**
     * @var string[]
     */
    private array $connections = [];


    /**
     * @return string[]
     */
    public function getConnections(): array
    {
        return $this->connections;
    }

    /**
     * @param string[] $connections
     */
    public function setConnections(array $connections): self
    {
        $this->connections = $connections;
        return $this;
    }

}
