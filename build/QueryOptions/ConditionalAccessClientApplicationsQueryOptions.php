<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessClientApplications resources
 *
 * Available select fields:
 * - excludeServicePrincipals
 * - includeServicePrincipals
 * - servicePrincipalFilter
 */
class ConditionalAccessClientApplicationsQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUDE_SERVICE_PRINCIPALS = 'excludeServicePrincipals';
    public const FIELD_INCLUDE_SERVICE_PRINCIPALS = 'includeServicePrincipals';
    public const FIELD_SERVICE_PRINCIPAL_FILTER = 'servicePrincipalFilter';

    /**
     * Select specific ConditionalAccessClientApplications properties
     * 
     * @param array<string> $select Use ConditionalAccessClientApplicationsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
