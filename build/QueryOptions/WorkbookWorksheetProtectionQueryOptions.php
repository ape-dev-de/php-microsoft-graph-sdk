<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookWorksheetProtection resources
 *
 * Available select fields:
 * - options
 * - protected
 */
class WorkbookWorksheetProtectionQueryOptions extends QueryOptions
{
    public const FIELD_OPTIONS = 'options';
    public const FIELD_PROTECTED = 'protected';

    /**
     * Select specific WorkbookWorksheetProtection properties
     * 
     * @param array<string> $select Use WorkbookWorksheetProtectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
