<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentTypeInfo resources
 *
 * Available select fields:
 * - id
 * - name
 */
class ContentTypeInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentTypeInfo
     */
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';

    /**
     * Select specific ContentTypeInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
