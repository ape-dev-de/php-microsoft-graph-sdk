<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExpressionInputObject
 */
class ExpressionInputObject
{
    /**
     * Definition of the test object.
     */
    private array $definition = [];

    /**
     * Property values of the test object.
     */
    private ?string $items;


    public function getDefinition(): array
    {
        return $this->definition;
    }

    public function setDefinition(array $definition): self
    {
        $this->definition = $definition;
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
