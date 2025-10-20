<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationSchema resources
 *
 * Available select fields:
 * - synchronizationRules
 * - version
 * - directories
 */
class SynchronizationSchemaQueryOptions extends QueryOptions
{
    public const FIELD_SYNCHRONIZATION_RULES = 'synchronizationRules';
    public const FIELD_VERSION = 'version';
    public const FIELD_DIRECTORIES = 'directories';

    /**
     * Select specific SynchronizationSchema properties
     * 
     * @param array<string> $select Use SynchronizationSchemaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
