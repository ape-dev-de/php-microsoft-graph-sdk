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
    /**
     * Available select fields for DeleteAction
     */
    public const FIELD_NAME = 'name';
    public const FIELD_OBJECT_TYPE = 'objectType';

    /**
     * Select specific DeleteAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
