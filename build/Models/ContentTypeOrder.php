<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentTypeOrder
 */
class ContentTypeOrder
{
    /**
     * Indicates whether this is the default content type
     */
    private ?bool $default;

    /**
     * Specifies the position in which the content type appears in the selection UI.
     */
    private ?string $position;

    public function getDefault(): ?bool
    {
        return $this->default;
    }

    public function setDefault(?bool $default): self
    {
        $this->default = $default;
        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;
        return $this;
    }

}
