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
     */
    private ?string $items;

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
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
