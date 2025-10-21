<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealth resources
 *
 * Available select fields:
 * - service
 * - status
 * - issues
 */
class ServiceHealthQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHealth
     */
    public const FIELD_SERVICE = 'service';
    public const FIELD_STATUS = 'status';
    public const FIELD_ISSUES = 'issues';

    /**
     * Select specific ServiceHealth properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
