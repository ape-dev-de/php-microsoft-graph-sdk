<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessApplications resources
 *
 * Available select fields:
 * - applicationFilter
 * - excludeApplications
 * - includeApplications
 * - includeAuthenticationContextClassReferences
 * - includeUserActions
 */
class ConditionalAccessApplicationsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessApplications
     */
    public const FIELD_APPLICATION_FILTER = 'applicationFilter';
    public const FIELD_EXCLUDE_APPLICATIONS = 'excludeApplications';
    public const FIELD_INCLUDE_APPLICATIONS = 'includeApplications';
    public const FIELD_INCLUDE_AUTHENTICATION_CONTEXT_CLASS_REFERENCES = 'includeAuthenticationContextClassReferences';
    public const FIELD_INCLUDE_USER_ACTIONS = 'includeUserActions';

    /**
     * Select specific ConditionalAccessApplications properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
