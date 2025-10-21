<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ModifiedProperty
 */
class ModifiedProperty
{
    /**
     * Indicates the property name of the target attribute that was changed.
     */
    private ?string $displayName;

    /**
     * Indicates the updated value for the propery.
     */
    private ?string $newValue;

    /**
     * Indicates the previous value (before the update) for the property.
     */
    private ?string $oldValue;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getNewValue(): ?string
    {
        return $this->newValue;
    }

    public function setNewValue(?string $newValue): self
    {
        $this->newValue = $newValue;
        return $this;
    }

    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }

    public function setOldValue(?string $oldValue): self
    {
        $this->oldValue = $oldValue;
        return $this;
    }

}
