<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintJobConfiguration resources
 *
 * Available select fields:
 * - collate
 * - colorMode
 * - copies
 * - dpi
 * - duplexMode
 * - feedOrientation
 * - finishings
 * - fitPdfToPage
 * - inputBin
 * - margin
 * - mediaSize
 * - mediaType
 * - multipageLayout
 * - orientation
 * - outputBin
 * - pageRanges
 * - pagesPerSheet
 * - quality
 * - scaling
 */
class PrintJobConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_COLLATE = 'collate';
    public const FIELD_COLOR_MODE = 'colorMode';
    public const FIELD_COPIES = 'copies';
    public const FIELD_DPI = 'dpi';
    public const FIELD_DUPLEX_MODE = 'duplexMode';
    public const FIELD_FEED_ORIENTATION = 'feedOrientation';
    public const FIELD_FINISHINGS = 'finishings';
    public const FIELD_FIT_PDF_TO_PAGE = 'fitPdfToPage';
    public const FIELD_INPUT_BIN = 'inputBin';
    public const FIELD_MARGIN = 'margin';
    public const FIELD_MEDIA_SIZE = 'mediaSize';
    public const FIELD_MEDIA_TYPE = 'mediaType';
    public const FIELD_MULTIPAGE_LAYOUT = 'multipageLayout';
    public const FIELD_ORIENTATION = 'orientation';
    public const FIELD_OUTPUT_BIN = 'outputBin';
    public const FIELD_PAGE_RANGES = 'pageRanges';
    public const FIELD_PAGES_PER_SHEET = 'pagesPerSheet';
    public const FIELD_QUALITY = 'quality';
    public const FIELD_SCALING = 'scaling';

    /**
     * Select specific PrintJobConfiguration properties
     * 
     * @param array<string> $select Use PrintJobConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
