<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationTemplate
 */
class ApplicationTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting. */
        public array $categories = [],
        /** A description of the application. */
        public ?string $description = null,
        /** The name of the application. */
        public ?string $displayName = null,
        /** The home page URL of the application. */
        public ?string $homePageUrl = null,
        /** The URL to get the logo for this application. */
        public ?string $logoUrl = null,
        /** The name of the publisher for this application. */
        public ?string $publisher = null,
        /** @var string[] The list of provisioning modes supported by this application. The only valid value is sync. */
        public array $supportedProvisioningTypes = [],
        /** @var string[] The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported. */
        public array $supportedSingleSignOnModes = []
    ) {}
}
