<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterCapabilities
 */
class PrinterCapabilities
{
    public function __construct(
        /** @var float[] A list of supported bottom margins(in microns) for the printer. */
        public array $bottomMargins = [],
        /** True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise. */
        public ?bool $collation = null,
        /** The color modes supported by the printer. Valid values are described in the following table. */
        public array $colorModes = [],
        /** @var string[] A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types. */
        public array $contentTypes = [],
        /** The range of copies per job supported by the printer. */
        public ?string $copiesPerJob = null,
        /** @var float[] The list of print resolutions in DPI that are supported by the printer. */
        public array $dpis = [],
        /** The list of duplex modes that are supported by the printer. Valid values are described in the following table. */
        public array $duplexModes = [],
        /** The list of feed orientations that are supported by the printer. */
        public array $feedOrientations = [],
        /** Finishing processes the printer supports for a printed document. */
        public array $finishings = [],
        /** @var string[] Supported input bins for the printer. */
        public array $inputBins = [],
        /** True if color printing is supported by the printer; false otherwise. Read-only. */
        public ?bool $isColorPrintingSupported = null,
        /** True if the printer supports printing by page ranges; false otherwise. */
        public ?bool $isPageRangeSupported = null,
        /** @var float[] A list of supported left margins(in microns) for the printer. */
        public array $leftMargins = [],
        /** @var string[] The media (i.e., paper) colors supported by the printer. */
        public array $mediaColors = [],
        /** @var string[] The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table. */
        public array $mediaSizes = [],
        /** @var string[] The media types supported by the printer. */
        public array $mediaTypes = [],
        /** The presentation directions supported by the printer. Supported values are described in the following table. */
        public array $multipageLayouts = [],
        /** The print orientations supported by the printer. Valid values are described in the following table. */
        public array $orientations = [],
        /** @var string[] The printer's supported output bins (trays). */
        public array $outputBins = [],
        /** @var float[] Supported number of Input Pages to impose upon a single Impression. */
        public array $pagesPerSheet = [],
        /** The print qualities supported by the printer. */
        public array $qualities = [],
        /** @var float[] A list of supported right margins(in microns) for the printer. */
        public array $rightMargins = [],
        /** Supported print scalings. */
        public array $scalings = [],
        /** True if the printer supports scaling PDF pages to match the print media size; false otherwise. */
        public ?bool $supportsFitPdfToPage = null,
        /** @var string[] A list of supported top margins(in microns) for the printer. */
        public array $topMargins = []
    ) {}
}
