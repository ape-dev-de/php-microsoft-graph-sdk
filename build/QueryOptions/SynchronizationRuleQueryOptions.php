<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationRule resources
 *
 * Available select fields:
 * - containerFilter
 * - editable
 * - groupFilter
 * - id
 * - metadata
 * - name
 * - objectMappings
 * - priority
 * - sourceDirectoryName
 * - targetDirectoryName
 */
class SynchronizationRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationRule
     */
    public const FIELD_CONTAINER_FILTER = 'containerFilter';
    public const FIELD_EDITABLE = 'editable';
    public const FIELD_GROUP_FILTER = 'groupFilter';
    public const FIELD_ID = 'id';
    public const FIELD_METADATA = 'metadata';
    public const FIELD_NAME = 'name';
    public const FIELD_OBJECT_MAPPINGS = 'objectMappings';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_SOURCE_DIRECTORY_NAME = 'sourceDirectoryName';
    public const FIELD_TARGET_DIRECTORY_NAME = 'targetDirectoryName';

    /**
     * Select specific SynchronizationRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
