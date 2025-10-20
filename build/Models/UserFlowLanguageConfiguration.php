<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserFlowLanguageConfiguration
 */
class UserFlowLanguageConfiguration
{
    /**
     * The language name to display. This property is read-only.
     */
    private ?string $displayName;

    /**
     * Indicates whether the language is enabled within the user flow.
     */
    private ?bool $isEnabled;

    /**
     * Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification.
     */
    private array $defaultPages = [];

    /**
     * Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows you to modify the content of the page, any other modification isn''t allowed (creation or deletion of pages).
     */
    private ?string $overridesPages;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

    public function getDefaultPages(): array
    {
        return $this->defaultPages;
    }

    public function setDefaultPages(array $defaultPages): self
    {
        $this->defaultPages = $defaultPages;
        return $this;
    }

    public function getOverridesPages(): ?string
    {
        return $this->overridesPages;
    }

    public function setOverridesPages(?string $overridesPages): self
    {
        $this->overridesPages = $overridesPages;
        return $this;
    }

}
