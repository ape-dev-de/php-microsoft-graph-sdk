<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AverageComparativeScore resources
 *
 * Available select fields:
 * - averageScore
 * - basis
 */
class AverageComparativeScoreQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AverageComparativeScore
     */
    public const FIELD_AVERAGE_SCORE = 'averageScore';
    public const FIELD_BASIS = 'basis';

    /**
     * Select specific AverageComparativeScore properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
