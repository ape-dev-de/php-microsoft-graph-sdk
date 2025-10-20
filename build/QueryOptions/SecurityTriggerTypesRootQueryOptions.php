<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTriggerTypesRoot resources
 *
 * Available select fields:
 * - retentionEventTypes
 */
class SecurityTriggerTypesRootQueryOptions extends QueryOptions
{
    public const FIELD_RETENTION_EVENT_TYPES = 'retentionEventTypes';

    /**
     * Select specific SecurityTriggerTypesRoot properties
     * 
     * @param array<string> $select Use SecurityTriggerTypesRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
