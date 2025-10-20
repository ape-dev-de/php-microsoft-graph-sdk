<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFormatProtection resources
 *
 * Available select fields:
 * - formulaHidden
 * - locked
 */
class WorkbookFormatProtectionQueryOptions extends QueryOptions
{
    public const FIELD_FORMULA_HIDDEN = 'formulaHidden';
    public const FIELD_LOCKED = 'locked';

    /**
     * Select specific WorkbookFormatProtection properties
     * 
     * @param array<string> $select Use WorkbookFormatProtectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
