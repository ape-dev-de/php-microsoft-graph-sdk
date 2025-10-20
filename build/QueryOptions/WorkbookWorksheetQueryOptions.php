<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookWorksheet resources
 *
 * Available select fields:
 * - name
 * - position
 * - visibility
 * - charts
 * - names
 * - pivotTables
 * - protection
 * - tables
 */
class WorkbookWorksheetQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_POSITION = 'position';
    public const FIELD_VISIBILITY = 'visibility';
    public const FIELD_CHARTS = 'charts';
    public const FIELD_NAMES = 'names';
    public const FIELD_PIVOT_TABLES = 'pivotTables';
    public const FIELD_PROTECTION = 'protection';
    public const FIELD_TABLES = 'tables';

    /**
     * Select specific WorkbookWorksheet properties
     * 
     * @param array<string> $select Use WorkbookWorksheetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
