<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookApplication resources
 *
 * Available select fields:
 * - calculationMode
 */
class WorkbookApplicationQueryOptions extends QueryOptions
{
    public const FIELD_CALCULATION_MODE = 'calculationMode';

    /**
     * Select specific WorkbookApplication properties
     * 
     * @param array<string> $select Use WorkbookApplicationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
