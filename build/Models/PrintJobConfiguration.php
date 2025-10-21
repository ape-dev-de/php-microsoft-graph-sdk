<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobConfiguration
 */
class PrintJobConfiguration
{
    public function __construct(
        /** Whether the printer should collate pages wehen printing multiple copies of a multi-page document. */
        public ?bool $collate = null,
        /** The color mode the printer should use to print the job. Valid values are described in the table below. Read-only. */
        public ?string $colorMode = null,
        /** The number of copies that should be printed. Read-only. */
        public ?float $copies = null,
        /** The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only. */
        public ?float $dpi = null,
        /** The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only. */
        public ?string $duplexMode = null,
        /** The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only. */
        public ?string $feedOrientation = null,
        /** Finishing processes to use when printing. */
        public array $finishings = [],
        /** True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions. */
        public ?bool $fitPdfToPage = null,
        /** The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins. */
        public ?string $inputBin = null,
        /** The margin settings to use when printing. */
        public ?string $margin = null,
        /** The media size to use when printing. Supports standard size names for ISO and ANSI media sizes. Valid values listed in the printerCapabilities topic. */
        public ?string $mediaSize = null,
        /** The default media (such as paper) type to print the document on. */
        public ?string $mediaType = null,
        /** The direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table. */
        public ?string $multipageLayout = null,
        /** The orientation setting the printer should use when printing the job. Valid values are described in the following table. */
        public ?string $orientation = null,
        /** The output bin to place completed prints into. See the printer's capabilities for a list of supported output bins. */
        public ?string $outputBin = null,
        /** The page ranges to print. Read-only. */
        public array $pageRanges = [],
        /** The number of document pages to print on each sheet. */
        public ?float $pagesPerSheet = null,
        /** The print quality to use when printing the job. Valid values are described in the table below. Read-only. */
        public ?string $quality = null,
        /** Specifies how the printer should scale the document data to fit the requested media. Valid values are described in the following table. */
        public ?string $scaling = null
    ) {}
}
