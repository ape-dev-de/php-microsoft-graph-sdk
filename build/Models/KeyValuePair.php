<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyValuePair
 */
class KeyValuePair
{
    /**
     * Name for this key-value pair
     */
    private ?string $name;

    /**
     * Value for this key-value pair
     */
    private ?string $value;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
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
