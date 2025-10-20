<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectDefinition resources
 *
 * Available select fields:
 * - attributes
 * - metadata
 * - name
 * - supportedApis
 */
class ObjectDefinitionQueryOptions extends QueryOptions
{
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_METADATA = 'metadata';
    public const FIELD_NAME = 'name';
    public const FIELD_SUPPORTED_APIS = 'supportedApis';

    /**
     * Select specific ObjectDefinition properties
     * 
     * @param array<string> $select Use ObjectDefinitionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
