<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterOperatorSchema resources
 *
 * Available select fields:
 * - arity
 * - multivaluedComparisonType
 * - supportedAttributeTypes
 */
class FilterOperatorSchemaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FilterOperatorSchema
     */
    public const FIELD_ARITY = 'arity';
    public const FIELD_MULTIVALUED_COMPARISON_TYPE = 'multivaluedComparisonType';
    public const FIELD_SUPPORTED_ATTRIBUTE_TYPES = 'supportedAttributeTypes';

    /**
     * Select specific FilterOperatorSchema properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
