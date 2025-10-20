<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryDefinition resources
 *
 * Available select fields:
 * - discoverabilities
 * - discoveryDateTime
 * - name
 * - objects
 * - readOnly
 * - version
 */
class DirectoryDefinitionQueryOptions extends QueryOptions
{
    public const FIELD_DISCOVERABILITIES = 'discoverabilities';
    public const FIELD_DISCOVERY_DATE_TIME = 'discoveryDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_OBJECTS = 'objects';
    public const FIELD_READ_ONLY = 'readOnly';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific DirectoryDefinition properties
     * 
     * @param array<string> $select Use DirectoryDefinitionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
