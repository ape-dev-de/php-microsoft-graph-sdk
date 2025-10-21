<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemAttachment
 */
class ItemAttachment
{
    /**
     * The attached message or event. Navigation property.
     */
    private ?string $item;


    public function getItem(): ?string
    {
        return $this->item;
    }

    public function setItem(?string $item): self
    {
        $this->item = $item;
        return $this;
    }

}
