<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Entity
 */
class Entity
{
    /**
     * The unique identifier for an entity. Read-only.
     */
    private ?string $id;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

}
