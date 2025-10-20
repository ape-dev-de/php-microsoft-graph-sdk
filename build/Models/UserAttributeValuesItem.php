<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserAttributeValuesItem
 */
class UserAttributeValuesItem
{
    /**
     * Determines whether the value is set as the default.
     */
    private ?bool $isDefault;

    /**
     * The display name of the property displayed to the user in the user flow.
     */
    private ?string $name;

    /**
     * The value that is set when this item is selected.
     */
    private ?string $value;

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

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
