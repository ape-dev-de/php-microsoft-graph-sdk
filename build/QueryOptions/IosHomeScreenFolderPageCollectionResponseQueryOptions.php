<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenFolderPageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosHomeScreenFolderPageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosHomeScreenFolderPageCollectionResponse properties
     * 
     * @param array<string> $select Use IosHomeScreenFolderPageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
