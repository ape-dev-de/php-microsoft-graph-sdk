<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecycleBin
 */
class RecycleBin
{
    /**
     */
    private ?string $settings;

    /**
     * List of the recycleBinItems deleted by a user.
     * @var string[]
     */
    private array $items = [];


    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param string[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

}
