<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SensitivityLabel
 */
class SensitivityLabel
{
    /**
     */
    private ?string $actionSource;

    /**
     */
    private ?string $autoTooltip;

    /**
     */
    private ?string $description;

    /**
     */
    private ?string $displayName;

    /**
     */
    private ?bool $isDefault;

    /**
     */
    private ?bool $isEndpointProtectionEnabled;

    /**
     */
    private ?bool $isScopedToUser;

    /**
     */
    private ?string $locale;

    /**
     */
    private ?string $name;

    /**
     */
    private ?float $priority;

    /**
     */
    private ?string $toolTip;

    /**
     */
    private ?string $rights;

    /**
     * @var string[]
     */
    private array $sublabels = [];


    public function getActionSource(): ?string
    {
        return $this->actionSource;
    }

    public function setActionSource(?string $actionSource): self
    {
        $this->actionSource = $actionSource;
        return $this;
    }

    public function getAutoTooltip(): ?string
    {
        return $this->autoTooltip;
    }

    public function setAutoTooltip(?string $autoTooltip): self
    {
        $this->autoTooltip = $autoTooltip;
        return $this;
    }

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

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getIsEndpointProtectionEnabled(): ?bool
    {
        return $this->isEndpointProtectionEnabled;
    }

    public function setIsEndpointProtectionEnabled(?bool $isEndpointProtectionEnabled): self
    {
        $this->isEndpointProtectionEnabled = $isEndpointProtectionEnabled;
        return $this;
    }

    public function getIsScopedToUser(): ?bool
    {
        return $this->isScopedToUser;
    }

    public function setIsScopedToUser(?bool $isScopedToUser): self
    {
        $this->isScopedToUser = $isScopedToUser;
        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
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

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function getToolTip(): ?string
    {
        return $this->toolTip;
    }

    public function setToolTip(?string $toolTip): self
    {
        $this->toolTip = $toolTip;
        return $this;
    }

    public function getRights(): ?string
    {
        return $this->rights;
    }

    public function setRights(?string $rights): self
    {
        $this->rights = $rights;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSublabels(): array
    {
        return $this->sublabels;
    }

    /**
     * @param string[] $sublabels
     */
    public function setSublabels(array $sublabels): self
    {
        $this->sublabels = $sublabels;
        return $this;
    }

}
