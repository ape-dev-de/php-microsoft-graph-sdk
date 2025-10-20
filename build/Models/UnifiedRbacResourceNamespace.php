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
     */
    private ?string $resourceActions;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getResourceActions(): ?string
    {
        return $this->resourceActions;
    }

    public function setResourceActions(?string $resourceActions): self
    {
        $this->resourceActions = $resourceActions;
        return $this;
    }

}
