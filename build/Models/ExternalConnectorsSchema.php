<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsSchema
 */
class ExternalConnectorsSchema
{
    /**
     * Must be set to microsoft.graph.externalConnector.externalItem. Required.
     */
    private array $baseType = [];

    /**
     * The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128.
     */
    private ?string $items;


    public function getBaseType(): array
    {
        return $this->baseType;
    }

    public function setBaseType(array $baseType): self
    {
        $this->baseType = $baseType;
        return $this;
    }

    public function getItems(): ?string
    {
        return $this->items;
    }

    public function setItems(?string $items): self
    {
        $this->items = $items;
        return $this;
    }

}
