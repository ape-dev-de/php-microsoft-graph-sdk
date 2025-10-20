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
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific ExtensionSchemaProperty properties
     * 
     * @param array<string> $select Use ExtensionSchemaPropertyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
