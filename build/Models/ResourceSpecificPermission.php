<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceSpecificPermission
 */
class ResourceSpecificPermission
{
    /**
     * Describes the level of access that the resource-specific permission represents.
     */
    private ?string $description;

    /**
     * The display name for the resource-specific permission.
     */
    private ?string $displayName;

    /**
     * The unique identifier for the resource-specific application permission.
     */
    private ?string $id;

    /**
     * Indicates whether the permission is enabled.
     */
    private ?bool $isEnabled;

    /**
     * The value of the permission.
     */
    private ?string $value;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
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
