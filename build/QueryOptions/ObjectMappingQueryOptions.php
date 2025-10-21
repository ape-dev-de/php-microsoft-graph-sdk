<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectMapping resources
 *
 * Available select fields:
 * - attributeMappings
 * - enabled
 * - flowTypes
 * - metadata
 * - name
 * - scope
 * - sourceObjectName
 * - targetObjectName
 */
class ObjectMappingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ObjectMapping
     */
    public const FIELD_ATTRIBUTE_MAPPINGS = 'attributeMappings';
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_FLOW_TYPES = 'flowTypes';
    public const FIELD_METADATA = 'metadata';
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_SOURCE_OBJECT_NAME = 'sourceObjectName';
    public const FIELD_TARGET_OBJECT_NAME = 'targetObjectName';

    /**
     * Select specific ObjectMapping properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
