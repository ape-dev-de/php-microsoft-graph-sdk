<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterDefaults
 */
class PrinterDefaults
{
    public function __construct(
        /** The default color mode to use when printing the document. Valid values are described in the following table. */
        public ?string $colorMode = null,
        /** The default content (MIME) type to use when processing documents. */
        public ?string $contentType = null,
        /** The default number of copies printed per job. */
        public ?float $copiesPerJob = null,
        /** The default resolution in DPI to use when printing the job. */
        public ?float $dpi = null,
        /** The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table. */
        public ?string $duplexMode = null,
        /** The default set of finishings to apply to print jobs. Valid values are described in the following table. */
        public array $finishings = [],
        /** The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions. */
        public ?bool $fitPdfToPage = null,
        /** The default input bin that serves as the paper source. */
        public ?string $inputBin = null,
        /** The default media (such as paper) color to print the document on. */
        public ?string $mediaColor = null,
        /** The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic. */
        public ?string $mediaSize = null,
        /** The default media (such as paper) type to print the document on. */
        public ?string $mediaType = null,
        /** The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table. */
        public ?string $multipageLayout = null,
        /** The default orientation to use when printing the document. Valid values are described in the following table. */
        public ?string $orientation = null,
        /** The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins. */
        public ?string $outputBin = null,
        /** The default number of document pages to print on each sheet. */
        public ?float $pagesPerSheet = null,
        /** The default quality to use when printing the document. Valid values are described in the following table. */
        public ?string $quality = null,
        /** Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table. */
        public ?string $scaling = null
    ) {}
}
