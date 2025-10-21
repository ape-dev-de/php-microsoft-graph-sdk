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
     * @var string[]
     */
    private array $items = [];


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
