<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserFlowLanguagePageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserFlowLanguagePageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserFlowLanguagePageCollectionResponse properties
     * 
     * @param array<string> $select Use UserFlowLanguagePageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
