<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeMappingFunctionSchema resources
 *
 * Available select fields:
 * - parameters
 */
class AttributeMappingFunctionSchemaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeMappingFunctionSchema
     */
    public const FIELD_PARAMETERS = 'parameters';

    /**
     * Select specific AttributeMappingFunctionSchema properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
