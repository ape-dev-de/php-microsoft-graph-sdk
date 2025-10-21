<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReferenceUpdate resources
 *
 * Available select fields:
 * - @odata.id
 */
class ReferenceUpdateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReferenceUpdate
     */
    public const FIELD_@ODATA.ID = '@odata.id';

    /**
     * Select specific ReferenceUpdate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
