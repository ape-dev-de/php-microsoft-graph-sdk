<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DlpActionInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DlpActionInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DlpActionInfoCollectionResponse properties
     * 
     * @param array<string> $select Use DlpActionInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
