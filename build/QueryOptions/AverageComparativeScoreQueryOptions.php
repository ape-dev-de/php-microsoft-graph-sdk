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
    public const FIELD_AVERAGE_SCORE = 'averageScore';
    public const FIELD_BASIS = 'basis';

    /**
     * Select specific AverageComparativeScore properties
     * 
     * @param array<string> $select Use AverageComparativeScoreQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
