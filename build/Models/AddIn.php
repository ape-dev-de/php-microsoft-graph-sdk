<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AddIn
 */
class AddIn
{
    /**
     * The unique identifier for the addIn object.
     */
    private array $id = [];

    /**
     * The unique name for the functionality exposed by the app.
     */
    private ?string $items;


    public function getId(): array
    {
        return $this->id;
    }

    public function setId(array $id): self
    {
        $this->id = $id;
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
