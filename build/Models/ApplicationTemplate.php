<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationTemplate
 */
class ApplicationTemplate
{
    /**
     * The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting.
     * @var string[]
     */
    private array $categories = [];

    /**
     * A description of the application.
     */
    private ?string $description;

    /**
     * The name of the application.
     */
    private ?string $displayName;

    /**
     * The home page URL of the application.
     */
    private ?string $homePageUrl;

    /**
     * The URL to get the logo for this application.
     */
    private ?string $logoUrl;

    /**
     * The name of the publisher for this application.
     */
    private ?string $publisher;

    /**
     * The list of provisioning modes supported by this application. The only valid value is sync.
     * @var string[]
     */
    private array $supportedProvisioningTypes = [];

    /**
     * The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
     * @var string[]
     */
    private array $supportedSingleSignOnModes = [];


    /**
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param string[] $categories
     */
    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
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

    public function getHomePageUrl(): ?string
    {
        return $this->homePageUrl;
    }

    public function setHomePageUrl(?string $homePageUrl): self
    {
        $this->homePageUrl = $homePageUrl;
        return $this;
    }

    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function setLogoUrl(?string $logoUrl): self
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSupportedProvisioningTypes(): array
    {
        return $this->supportedProvisioningTypes;
    }

    /**
     * @param string[] $supportedProvisioningTypes
     */
    public function setSupportedProvisioningTypes(array $supportedProvisioningTypes): self
    {
        $this->supportedProvisioningTypes = $supportedProvisioningTypes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSupportedSingleSignOnModes(): array
    {
        return $this->supportedSingleSignOnModes;
    }

    /**
     * @param string[] $supportedSingleSignOnModes
     */
    public function setSupportedSingleSignOnModes(array $supportedSingleSignOnModes): self
    {
        $this->supportedSingleSignOnModes = $supportedSingleSignOnModes;
        return $this;
    }

}
