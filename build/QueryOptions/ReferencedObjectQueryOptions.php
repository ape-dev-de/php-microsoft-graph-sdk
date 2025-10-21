<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReferencedObject resources
 *
 * Available select fields:
 * - referencedObjectName
 * - referencedProperty
 */
class ReferencedObjectQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReferencedObject
     */
    public const FIELD_REFERENCED_OBJECT_NAME = 'referencedObjectName';
    public const FIELD_REFERENCED_PROPERTY = 'referencedProperty';

    /**
     * Select specific ReferencedObject properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
