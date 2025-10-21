<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditProperty
 */
class CloudPcAuditProperty
{
    /**
     * The display name for this property.
     */
    private ?string $displayName;

    /**
     * The new value for this property.
     */
    private ?string $newValue;

    /**
     * The old value for this property.
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
