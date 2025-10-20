<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsMobileMSICollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsMobileMSICollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsMobileMSICollectionResponse properties
     * 
     * @param array<string> $select Use WindowsMobileMSICollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
