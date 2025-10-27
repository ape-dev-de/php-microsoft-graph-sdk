<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobConfiguration
 */
class PrintJobConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Whether the printer should collate pages wehen printing multiple copies of a multi-page document. */
    public ?bool $collate = null;

    /** 
     * The color mode the printer should use to print the job. Valid values are described in the table below. Read-only.
     * @var PrintColorMode|\stdClass|null
     */
    public PrintColorMode|\stdClass|null $colorMode = null;

    /** The number of copies that should be printed. Read-only. */
    public ?float $copies = null;

    /** The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only. */
    public ?float $dpi = null;

    /** 
     * The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only.
     * @var PrintDuplexMode|\stdClass|null
     */
    public PrintDuplexMode|\stdClass|null $duplexMode = null;

    /** 
     * The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only.
     * @var PrinterFeedOrientation|\stdClass|null
     */
    public PrinterFeedOrientation|\stdClass|null $feedOrientation = null;

    /** 
     * Finishing processes to use when printing.
     * @var PrintFinishing[]
     */
    public array $finishings = [];

    /** True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions. */
    public ?bool $fitPdfToPage = null;

    /** The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins. */
    public ?string $inputBin = null;

    /** 
     * The margin settings to use when printing.
     * @var PrintMargin|\stdClass|null
     */
    public PrintMargin|\stdClass|null $margin = null;

    /** The media size to use when printing. Supports standard size names for ISO and ANSI media sizes. Valid values listed in the printerCapabilities topic. */
    public ?string $mediaSize = null;

    /** The default media (such as paper) type to print the document on. */
    public ?string $mediaType = null;

    /** 
     * The direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @var PrintMultipageLayout|\stdClass|null
     */
    public PrintMultipageLayout|\stdClass|null $multipageLayout = null;

    /** 
     * The orientation setting the printer should use when printing the job. Valid values are described in the following table.
     * @var PrintOrientation|\stdClass|null
     */
    public PrintOrientation|\stdClass|null $orientation = null;

    /** The output bin to place completed prints into. See the printer's capabilities for a list of supported output bins. */
    public ?string $outputBin = null;

    /** 
     * The page ranges to print. Read-only.
     * @var IntegerRange[]
     */
    public array $pageRanges = [];

    /** The number of document pages to print on each sheet. */
    public ?float $pagesPerSheet = null;

    /** 
     * The print quality to use when printing the job. Valid values are described in the table below. Read-only.
     * @var PrintQuality|\stdClass|null
     */
    public PrintQuality|\stdClass|null $quality = null;

    /** 
     * Specifies how the printer should scale the document data to fit the requested media. Valid values are described in the following table.
     * @var PrintScaling|\stdClass|null
     */
    public PrintScaling|\stdClass|null $scaling = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['collate'])) {
            $this->collate = is_bool($data['collate']) ? $data['collate'] : (bool)$data['collate'];
        }
        if (isset($data['colorMode'])) {
            $this->colorMode = is_array($data['colorMode']) ? new PrintColorMode($data['colorMode']) : $data['colorMode'];
        }
        if (isset($data['copies'])) {
            $this->copies = is_numeric($data['copies']) ? (float)$data['copies'] : $data['copies'];
        }
        if (isset($data['dpi'])) {
            $this->dpi = is_numeric($data['dpi']) ? (float)$data['dpi'] : $data['dpi'];
        }
        if (isset($data['duplexMode'])) {
            $this->duplexMode = is_array($data['duplexMode']) ? new PrintDuplexMode($data['duplexMode']) : $data['duplexMode'];
        }
        if (isset($data['feedOrientation'])) {
            $this->feedOrientation = is_array($data['feedOrientation']) ? new PrinterFeedOrientation($data['feedOrientation']) : $data['feedOrientation'];
        }
        if (isset($data['finishings'])) {
            $this->finishings = $data['finishings'];
        }
        if (isset($data['fitPdfToPage'])) {
            $this->fitPdfToPage = is_bool($data['fitPdfToPage']) ? $data['fitPdfToPage'] : (bool)$data['fitPdfToPage'];
        }
        if (isset($data['inputBin'])) {
            $this->inputBin = $data['inputBin'];
        }
        if (isset($data['margin'])) {
            $this->margin = is_array($data['margin']) ? new PrintMargin($data['margin']) : $data['margin'];
        }
        if (isset($data['mediaSize'])) {
            $this->mediaSize = $data['mediaSize'];
        }
        if (isset($data['mediaType'])) {
            $this->mediaType = $data['mediaType'];
        }
        if (isset($data['multipageLayout'])) {
            $this->multipageLayout = is_array($data['multipageLayout']) ? new PrintMultipageLayout($data['multipageLayout']) : $data['multipageLayout'];
        }
        if (isset($data['orientation'])) {
            $this->orientation = is_array($data['orientation']) ? new PrintOrientation($data['orientation']) : $data['orientation'];
        }
        if (isset($data['outputBin'])) {
            $this->outputBin = $data['outputBin'];
        }
        if (isset($data['pageRanges'])) {
            $this->pageRanges = $data['pageRanges'];
        }
        if (isset($data['pagesPerSheet'])) {
            $this->pagesPerSheet = is_numeric($data['pagesPerSheet']) ? (float)$data['pagesPerSheet'] : $data['pagesPerSheet'];
        }
        if (isset($data['quality'])) {
            $this->quality = is_array($data['quality']) ? new PrintQuality($data['quality']) : $data['quality'];
        }
        if (isset($data['scaling'])) {
            $this->scaling = is_array($data['scaling']) ? new PrintScaling($data['scaling']) : $data['scaling'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
