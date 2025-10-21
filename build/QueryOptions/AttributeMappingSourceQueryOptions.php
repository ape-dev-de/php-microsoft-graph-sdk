<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeMappingSource resources
 *
 * Available select fields:
 * - expression
 * - name
 * - parameters
 * - type
 */
class AttributeMappingSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeMappingSource
     */
    public const FIELD_EXPRESSION = 'expression';
    public const FIELD_NAME = 'name';
    public const FIELD_PARAMETERS = 'parameters';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AttributeMappingSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
