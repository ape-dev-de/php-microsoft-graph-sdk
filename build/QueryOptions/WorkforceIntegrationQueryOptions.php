<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkforceIntegration resources
 *
 * Available select fields:
 * - apiVersion
 * - displayName
 * - eligibilityFilteringEnabledEntities
 * - encryption
 * - isActive
 * - supportedEntities
 * - url
 */
class WorkforceIntegrationQueryOptions extends QueryOptions
{
    public const FIELD_API_VERSION = 'apiVersion';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ELIGIBILITY_FILTERING_ENABLED_ENTITIES = 'eligibilityFilteringEnabledEntities';
    public const FIELD_ENCRYPTION = 'encryption';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_SUPPORTED_ENTITIES = 'supportedEntities';
    public const FIELD_URL = 'url';

    /**
     * Select specific WorkforceIntegration properties
     * 
     * @param array<string> $select Use WorkforceIntegrationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
