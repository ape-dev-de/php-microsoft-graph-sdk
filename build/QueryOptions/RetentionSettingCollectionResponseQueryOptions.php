<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RetentionSettingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RetentionSettingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RetentionSettingCollectionResponse properties
     * 
     * @param array<string> $select Use RetentionSettingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
