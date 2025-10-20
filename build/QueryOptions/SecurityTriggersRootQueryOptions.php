<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTriggersRoot resources
 *
 * Available select fields:
 * - retentionEvents
 */
class SecurityTriggersRootQueryOptions extends QueryOptions
{
    public const FIELD_RETENTION_EVENTS = 'retentionEvents';

    /**
     * Select specific SecurityTriggersRoot properties
     * 
     * @param array<string> $select Use SecurityTriggersRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
