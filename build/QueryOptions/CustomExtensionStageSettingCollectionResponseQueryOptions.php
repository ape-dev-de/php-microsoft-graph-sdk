<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionStageSettingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CustomExtensionStageSettingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CustomExtensionStageSettingCollectionResponse properties
     * 
     * @param array<string> $select Use CustomExtensionStageSettingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
