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
    /**
     * Available select fields for WorkbookWorksheetProtection
     */
    public const FIELD_OPTIONS = 'options';
    public const FIELD_PROTECTED = 'protected';

    /**
     * Select specific WorkbookWorksheetProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
