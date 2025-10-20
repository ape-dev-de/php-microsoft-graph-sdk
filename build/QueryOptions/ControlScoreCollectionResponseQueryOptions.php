<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ControlScoreCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ControlScoreCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ControlScoreCollectionResponse properties
     * 
     * @param array<string> $select Use ControlScoreCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
