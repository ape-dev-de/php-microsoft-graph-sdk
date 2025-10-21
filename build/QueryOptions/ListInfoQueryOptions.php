<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ListInfo resources
 *
 * Available select fields:
 * - contentTypesEnabled
 * - hidden
 * - template
 */
class ListInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ListInfo
     */
    public const FIELD_CONTENT_TYPES_ENABLED = 'contentTypesEnabled';
    public const FIELD_HIDDEN = 'hidden';
    public const FIELD_TEMPLATE = 'template';

    /**
     * Select specific ListInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
