<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExtensionSchemaProperty resources
 *
 * Available select fields:
 * - name
 * - type
 */
class ExtensionSchemaPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExtensionSchemaProperty
     */
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific ExtensionSchemaProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
