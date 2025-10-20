<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationConditionsApplications resources
 *
 * Available select fields:
 * - includeApplications
 */
class AuthenticationConditionsApplicationsQueryOptions extends QueryOptions
{
    public const FIELD_INCLUDE_APPLICATIONS = 'includeApplications';

    /**
     * Select specific AuthenticationConditionsApplications properties
     * 
     * @param array<string> $select Use AuthenticationConditionsApplicationsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
