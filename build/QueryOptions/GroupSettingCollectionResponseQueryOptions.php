<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupSettingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class GroupSettingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific GroupSettingCollectionResponse properties
     * 
     * @param array<string> $select Use GroupSettingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
