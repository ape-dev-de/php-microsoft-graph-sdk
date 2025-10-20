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
    public const FIELD_SERVICE = 'service';
    public const FIELD_STATUS = 'status';
    public const FIELD_ISSUES = 'issues';

    /**
     * Select specific ServiceHealth properties
     * 
     * @param array<string> $select Use ServiceHealthQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
