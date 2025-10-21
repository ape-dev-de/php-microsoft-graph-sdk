<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReferenceCreate resources
 *
 * Available select fields:
 * - @odata.id
 */
class ReferenceCreateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReferenceCreate
     */
    public const FIELD_@ODATA.ID = '@odata.id';

    /**
     * Select specific ReferenceCreate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
