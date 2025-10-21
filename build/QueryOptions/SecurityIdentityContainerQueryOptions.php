<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIdentityContainer resources
 *
 * Available select fields:
 * - healthIssues
 * - sensors
 */
class SecurityIdentityContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIdentityContainer
     */
    public const FIELD_HEALTH_ISSUES = 'healthIssues';
    public const FIELD_SENSORS = 'sensors';

    /**
     * Select specific SecurityIdentityContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
