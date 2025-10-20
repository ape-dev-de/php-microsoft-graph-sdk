<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DisplayNameLocalizationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DisplayNameLocalizationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DisplayNameLocalizationCollectionResponse properties
     * 
     * @param array<string> $select Use DisplayNameLocalizationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
