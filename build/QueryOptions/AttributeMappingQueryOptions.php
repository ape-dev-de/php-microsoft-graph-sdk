<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeMapping resources
 *
 * Available select fields:
 * - defaultValue
 * - exportMissingReferences
 * - flowBehavior
 * - flowType
 * - matchingPriority
 * - source
 * - targetAttributeName
 */
class AttributeMappingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeMapping
     */
    public const FIELD_DEFAULT_VALUE = 'defaultValue';
    public const FIELD_EXPORT_MISSING_REFERENCES = 'exportMissingReferences';
    public const FIELD_FLOW_BEHAVIOR = 'flowBehavior';
    public const FIELD_FLOW_TYPE = 'flowType';
    public const FIELD_MATCHING_PRIORITY = 'matchingPriority';
    public const FIELD_SOURCE = 'source';
    public const FIELD_TARGET_ATTRIBUTE_NAME = 'targetAttributeName';

    /**
     * Select specific AttributeMapping properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
