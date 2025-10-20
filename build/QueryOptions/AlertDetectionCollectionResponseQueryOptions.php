<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertDetectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AlertDetectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AlertDetectionCollectionResponse properties
     * 
     * @param array<string> $select Use AlertDetectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
