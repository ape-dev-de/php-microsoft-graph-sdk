<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySinglePropertySchema resources
 *
 * Available select fields:
 * - name
 * - type
 */
class SecuritySinglePropertySchemaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySinglePropertySchema
     */
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific SecuritySinglePropertySchema properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
