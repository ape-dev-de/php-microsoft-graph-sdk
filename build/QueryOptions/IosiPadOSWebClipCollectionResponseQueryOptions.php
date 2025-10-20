<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosiPadOSWebClipCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosiPadOSWebClipCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosiPadOSWebClipCollectionResponse properties
     * 
     * @param array<string> $select Use IosiPadOSWebClipCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
