<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewSet resources
 *
 * Available select fields:
 * - definitions
 * - historyDefinitions
 */
class AccessReviewSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewSet
     */
    public const FIELD_DEFINITIONS = 'definitions';
    public const FIELD_HISTORY_DEFINITIONS = 'historyDefinitions';

    /**
     * Select specific AccessReviewSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
