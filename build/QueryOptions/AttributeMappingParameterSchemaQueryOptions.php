<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeMappingParameterSchema resources
 *
 * Available select fields:
 * - allowMultipleOccurrences
 * - name
 * - required
 * - type
 */
class AttributeMappingParameterSchemaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeMappingParameterSchema
     */
    public const FIELD_ALLOW_MULTIPLE_OCCURRENCES = 'allowMultipleOccurrences';
    public const FIELD_NAME = 'name';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AttributeMappingParameterSchema properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
