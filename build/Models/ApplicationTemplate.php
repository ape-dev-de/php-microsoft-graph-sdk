<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationTemplate
 */
class ApplicationTemplate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting.
     * @var string[]
     */
    public array $categories = [];

    /** A description of the application. */
    public ?string $description = null;

    /** The name of the application. */
    public ?string $displayName = null;

    /** The home page URL of the application. */
    public ?string $homePageUrl = null;

    /** The URL to get the logo for this application. */
    public ?string $logoUrl = null;

    /** The name of the publisher for this application. */
    public ?string $publisher = null;

    /** 
     * The list of provisioning modes supported by this application. The only valid value is sync.
     * @var string[]
     */
    public array $supportedProvisioningTypes = [];

    /** 
     * The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
     * @var string[]
     */
    public array $supportedSingleSignOnModes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['homePageUrl'])) {
            $this->homePageUrl = $data['homePageUrl'];
        }
        if (isset($data['logoUrl'])) {
            $this->logoUrl = $data['logoUrl'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['supportedProvisioningTypes'])) {
            $this->supportedProvisioningTypes = $data['supportedProvisioningTypes'];
        }
        if (isset($data['supportedSingleSignOnModes'])) {
            $this->supportedSingleSignOnModes = $data['supportedSingleSignOnModes'];
        }
    }
}
