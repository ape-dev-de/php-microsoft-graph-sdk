<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreSessionBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RestoreSessionBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RestoreSessionBaseCollectionResponse properties
     * 
     * @param array<string> $select Use RestoreSessionBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
