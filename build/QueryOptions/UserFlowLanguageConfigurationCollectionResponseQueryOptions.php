<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserFlowLanguageConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserFlowLanguageConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserFlowLanguageConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use UserFlowLanguageConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
