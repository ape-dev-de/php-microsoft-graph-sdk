<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterCapabilities resources
 *
 * Available select fields:
 * - bottomMargins
 * - collation
 * - colorModes
 * - contentTypes
 * - copiesPerJob
 * - dpis
 * - duplexModes
 * - feedOrientations
 * - finishings
 * - inputBins
 * - isColorPrintingSupported
 * - isPageRangeSupported
 * - leftMargins
 * - mediaColors
 * - mediaSizes
 * - mediaTypes
 * - multipageLayouts
 * - orientations
 * - outputBins
 * - pagesPerSheet
 * - qualities
 * - rightMargins
 * - scalings
 * - supportsFitPdfToPage
 * - topMargins
 */
class PrinterCapabilitiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterCapabilities
     */
    public const FIELD_BOTTOM_MARGINS = 'bottomMargins';
    public const FIELD_COLLATION = 'collation';
    public const FIELD_COLOR_MODES = 'colorModes';
    public const FIELD_CONTENT_TYPES = 'contentTypes';
    public const FIELD_COPIES_PER_JOB = 'copiesPerJob';
    public const FIELD_DPIS = 'dpis';
    public const FIELD_DUPLEX_MODES = 'duplexModes';
    public const FIELD_FEED_ORIENTATIONS = 'feedOrientations';
    public const FIELD_FINISHINGS = 'finishings';
    public const FIELD_INPUT_BINS = 'inputBins';
    public const FIELD_IS_COLOR_PRINTING_SUPPORTED = 'isColorPrintingSupported';
    public const FIELD_IS_PAGE_RANGE_SUPPORTED = 'isPageRangeSupported';
    public const FIELD_LEFT_MARGINS = 'leftMargins';
    public const FIELD_MEDIA_COLORS = 'mediaColors';
    public const FIELD_MEDIA_SIZES = 'mediaSizes';
    public const FIELD_MEDIA_TYPES = 'mediaTypes';
    public const FIELD_MULTIPAGE_LAYOUTS = 'multipageLayouts';
    public const FIELD_ORIENTATIONS = 'orientations';
    public const FIELD_OUTPUT_BINS = 'outputBins';
    public const FIELD_PAGES_PER_SHEET = 'pagesPerSheet';
    public const FIELD_QUALITIES = 'qualities';
    public const FIELD_RIGHT_MARGINS = 'rightMargins';
    public const FIELD_SCALINGS = 'scalings';
    public const FIELD_SUPPORTS_FIT_PDF_TO_PAGE = 'supportsFitPdfToPage';
    public const FIELD_TOP_MARGINS = 'topMargins';

    /**
     * Select specific PrinterCapabilities properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
