<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewStageSettingsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewStageSettingsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewStageSettingsCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewStageSettingsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
