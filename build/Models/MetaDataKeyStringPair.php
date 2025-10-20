<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MetaDataKeyStringPair
 */
class MetaDataKeyStringPair
{
    /**
     * Key of the meta data.
     */
    private ?string $key;

    /**
     * Value of the meta data.
     */
    private ?string $value;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
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
