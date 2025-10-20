<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Bundle resources
 *
 * Available select fields:
 * - album
 * - childCount
 */
class BundleQueryOptions extends QueryOptions
{
    public const FIELD_ALBUM = 'album';
    public const FIELD_CHILD_COUNT = 'childCount';

    /**
     * Select specific Bundle properties
     * 
     * @param array<string> $select Use BundleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
