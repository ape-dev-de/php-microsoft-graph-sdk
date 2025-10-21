<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MetaDataKeyValuePair
 */
class MetaDataKeyValuePair
{
    /**
     * Key of the metadata.
     */
    private ?string $key;

    /**
     * Value of the metadata. Should be an object.
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
