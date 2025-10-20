<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsMicrosoftEdgeAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsMicrosoftEdgeAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsMicrosoftEdgeAppCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsMicrosoftEdgeAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
