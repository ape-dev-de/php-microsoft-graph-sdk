<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedEBookAssignment resources
 *
 * Available select fields:
 * - installIntent
 * - target
 */
class ManagedEBookAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_INSTALL_INTENT = 'installIntent';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific ManagedEBookAssignment properties
     * 
     * @param array<string> $select Use ManagedEBookAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
