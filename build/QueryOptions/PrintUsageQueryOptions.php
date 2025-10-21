<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsage resources
 *
 * Available select fields:
 * - blackAndWhitePageCount
 * - colorPageCount
 * - completedBlackAndWhiteJobCount
 * - completedColorJobCount
 * - completedJobCount
 * - doubleSidedSheetCount
 * - incompleteJobCount
 * - mediaSheetCount
 * - pageCount
 * - singleSidedSheetCount
 * - usageDate
 */
class PrintUsageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintUsage
     */
    public const FIELD_BLACK_AND_WHITE_PAGE_COUNT = 'blackAndWhitePageCount';
    public const FIELD_COLOR_PAGE_COUNT = 'colorPageCount';
    public const FIELD_COMPLETED_BLACK_AND_WHITE_JOB_COUNT = 'completedBlackAndWhiteJobCount';
    public const FIELD_COMPLETED_COLOR_JOB_COUNT = 'completedColorJobCount';
    public const FIELD_COMPLETED_JOB_COUNT = 'completedJobCount';
    public const FIELD_DOUBLE_SIDED_SHEET_COUNT = 'doubleSidedSheetCount';
    public const FIELD_INCOMPLETE_JOB_COUNT = 'incompleteJobCount';
    public const FIELD_MEDIA_SHEET_COUNT = 'mediaSheetCount';
    public const FIELD_PAGE_COUNT = 'pageCount';
    public const FIELD_SINGLE_SIDED_SHEET_COUNT = 'singleSidedSheetCount';
    public const FIELD_USAGE_DATE = 'usageDate';

    /**
     * Select specific PrintUsage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
