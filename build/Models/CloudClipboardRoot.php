<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardRoot
 */
class CloudClipboardRoot
{
    /**
     * Represents a collection of Cloud Clipboard items.
     */
    private ?string $items;

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
