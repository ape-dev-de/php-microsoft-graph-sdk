<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditProperty
 */
class AuditProperty
{
    /**
     * Display name.
     */
    private ?string $displayName;

    /**
     * New value.
     */
    private ?string $newValue;

    /**
     * A class containing the properties for Audit Property.
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
