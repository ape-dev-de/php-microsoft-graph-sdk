<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SchemaExtension resources
 *
 * Available select fields:
 * - description
 * - owner
 * - items
 */
class SchemaExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SchemaExtension
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_OWNER = 'owner';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific SchemaExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
