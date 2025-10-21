<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionOptionConfiguration
 */
class AuthenticationAttributeCollectionOptionConfiguration
{
    /**
     * The label of the option that will be displayed to user, unless overridden.
     */
    private ?string $label;

    /**
     * The value of the option that will be stored.
     */
    private ?string $value;


    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;
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
