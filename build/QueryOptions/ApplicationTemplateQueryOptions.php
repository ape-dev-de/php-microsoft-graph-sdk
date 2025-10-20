<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationTemplate resources
 *
 * Available select fields:
 * - categories
 * - description
 * - displayName
 * - homePageUrl
 * - logoUrl
 * - publisher
 * - supportedProvisioningTypes
 * - supportedSingleSignOnModes
 */
class ApplicationTemplateQueryOptions extends QueryOptions
{
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HOME_PAGE_URL = 'homePageUrl';
    public const FIELD_LOGO_URL = 'logoUrl';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_SUPPORTED_PROVISIONING_TYPES = 'supportedProvisioningTypes';
    public const FIELD_SUPPORTED_SINGLE_SIGN_ON_MODES = 'supportedSingleSignOnModes';

    /**
     * Select specific ApplicationTemplate properties
     * 
     * @param array<string> $select Use ApplicationTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
