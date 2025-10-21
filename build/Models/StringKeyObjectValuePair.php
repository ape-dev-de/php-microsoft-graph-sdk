<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyObjectValuePair
 */
class StringKeyObjectValuePair
{
    /**
     * Key.
     */
    private ?string $key;


    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

}
