<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterDefaults resources
 *
 * Available select fields:
 * - colorMode
 * - contentType
 * - copiesPerJob
 * - dpi
 * - duplexMode
 * - finishings
 * - fitPdfToPage
 * - inputBin
 * - mediaColor
 * - mediaSize
 * - mediaType
 * - multipageLayout
 * - orientation
 * - outputBin
 * - pagesPerSheet
 * - quality
 * - scaling
 */
class PrinterDefaultsQueryOptions extends QueryOptions
{
    public const FIELD_COLOR_MODE = 'colorMode';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_COPIES_PER_JOB = 'copiesPerJob';
    public const FIELD_DPI = 'dpi';
    public const FIELD_DUPLEX_MODE = 'duplexMode';
    public const FIELD_FINISHINGS = 'finishings';
    public const FIELD_FIT_PDF_TO_PAGE = 'fitPdfToPage';
    public const FIELD_INPUT_BIN = 'inputBin';
    public const FIELD_MEDIA_COLOR = 'mediaColor';
    public const FIELD_MEDIA_SIZE = 'mediaSize';
    public const FIELD_MEDIA_TYPE = 'mediaType';
    public const FIELD_MULTIPAGE_LAYOUT = 'multipageLayout';
    public const FIELD_ORIENTATION = 'orientation';
    public const FIELD_OUTPUT_BIN = 'outputBin';
    public const FIELD_PAGES_PER_SHEET = 'pagesPerSheet';
    public const FIELD_QUALITY = 'quality';
    public const FIELD_SCALING = 'scaling';

    /**
     * Select specific PrinterDefaults properties
     * 
     * @param array<string> $select Use PrinterDefaultsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
