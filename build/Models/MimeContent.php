<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MimeContent
 */
class MimeContent
{
    /**
     * Indicates the content mime type.
     */
    private ?string $type;

    /**
     * Contains properties for a generic mime content.
     */
    private ?string $value;


    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
