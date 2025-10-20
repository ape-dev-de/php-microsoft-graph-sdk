<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeleteAction resources
 *
 * Available select fields:
 * - name
 * - objectType
 */
class DeleteActionQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_OBJECT_TYPE = 'objectType';

    /**
     * Select specific DeleteAction properties
     * 
     * @param array<string> $select Use DeleteActionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
