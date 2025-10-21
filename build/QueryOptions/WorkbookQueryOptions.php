<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Workbook resources
 *
 * Available select fields:
 * - application
 * - comments
 * - functions
 * - names
 * - operations
 * - tables
 * - worksheets
 */
class WorkbookQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Workbook
     */
    public const FIELD_APPLICATION = 'application';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_FUNCTIONS = 'functions';
    public const FIELD_NAMES = 'names';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_TABLES = 'tables';
    public const FIELD_WORKSHEETS = 'worksheets';

    /**
     * Select specific Workbook properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
