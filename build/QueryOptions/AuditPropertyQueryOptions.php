<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditProperty resources
 *
 * Available select fields:
 * - displayName
 * - newValue
 * - oldValue
 */
class AuditPropertyQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_NEW_VALUE = 'newValue';
    public const FIELD_OLD_VALUE = 'oldValue';

    /**
     * Select specific AuditProperty properties
     * 
     * @param array<string> $select Use AuditPropertyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
