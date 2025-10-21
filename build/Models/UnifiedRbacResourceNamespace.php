<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRbacResourceNamespace
 */
class UnifiedRbacResourceNamespace
{
    /**
     */
    private ?string $name;

    /**
     * @var string[]
     */
    private array $resourceActions = [];


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResourceActions(): array
    {
        return $this->resourceActions;
    }

    /**
     * @param string[] $resourceActions
     */
    public function setResourceActions(array $resourceActions): self
    {
        $this->resourceActions = $resourceActions;
        return $this;
    }

}
