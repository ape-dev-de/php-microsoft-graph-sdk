<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessingErrorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProcessingErrorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProcessingErrorCollectionResponse properties
     * 
     * @param array<string> $select Use ProcessingErrorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
