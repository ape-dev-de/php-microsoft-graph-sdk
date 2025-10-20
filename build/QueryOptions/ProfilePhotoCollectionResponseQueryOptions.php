<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProfilePhotoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProfilePhotoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProfilePhotoCollectionResponse properties
     * 
     * @param array<string> $select Use ProfilePhotoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
