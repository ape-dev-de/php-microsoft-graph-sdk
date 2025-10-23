<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterDefaults
 */
class PrinterDefaults
{
    /** 
     * The default color mode to use when printing the document. Valid values are described in the following table.
     * @var PrintColorMode|\stdClass|null
     */
    public mixed $colorMode = null;

    /** The default content (MIME) type to use when processing documents. */
    public ?string $contentType = null;

    /** The default number of copies printed per job. */
    public ?float $copiesPerJob = null;

    /** The default resolution in DPI to use when printing the job. */
    public ?float $dpi = null;

    /** 
     * The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     * @var PrintDuplexMode|\stdClass|null
     */
    public mixed $duplexMode = null;

    /** 
     * The default set of finishings to apply to print jobs. Valid values are described in the following table.
     * @var PrintFinishing[]
     */
    public array $finishings = [];

    /** The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions. */
    public ?bool $fitPdfToPage = null;

    /** The default input bin that serves as the paper source. */
    public ?string $inputBin = null;

    /** The default media (such as paper) color to print the document on. */
    public ?string $mediaColor = null;

    /** The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic. */
    public ?string $mediaSize = null;

    /** The default media (such as paper) type to print the document on. */
    public ?string $mediaType = null;

    /** 
     * The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @var PrintMultipageLayout|\stdClass|null
     */
    public mixed $multipageLayout = null;

    /** 
     * The default orientation to use when printing the document. Valid values are described in the following table.
     * @var PrintOrientation|\stdClass|null
     */
    public mixed $orientation = null;

    /** The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins. */
    public ?string $outputBin = null;

    /** The default number of document pages to print on each sheet. */
    public ?float $pagesPerSheet = null;

    /** 
     * The default quality to use when printing the document. Valid values are described in the following table.
     * @var PrintQuality|\stdClass|null
     */
    public mixed $quality = null;

    /** 
     * Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
     * @var PrintScaling|\stdClass|null
     */
    public mixed $scaling = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['colorMode'])) {
            $this->colorMode = $data['colorMode'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['copiesPerJob'])) {
            $this->copiesPerJob = $data['copiesPerJob'];
        }
        if (isset($data['dpi'])) {
            $this->dpi = $data['dpi'];
        }
        if (isset($data['duplexMode'])) {
            $this->duplexMode = $data['duplexMode'];
        }
        if (isset($data['finishings'])) {
            $this->finishings = $data['finishings'];
        }
        if (isset($data['fitPdfToPage'])) {
            $this->fitPdfToPage = $data['fitPdfToPage'];
        }
        if (isset($data['inputBin'])) {
            $this->inputBin = $data['inputBin'];
        }
        if (isset($data['mediaColor'])) {
            $this->mediaColor = $data['mediaColor'];
        }
        if (isset($data['mediaSize'])) {
            $this->mediaSize = $data['mediaSize'];
        }
        if (isset($data['mediaType'])) {
            $this->mediaType = $data['mediaType'];
        }
        if (isset($data['multipageLayout'])) {
            $this->multipageLayout = $data['multipageLayout'];
        }
        if (isset($data['orientation'])) {
            $this->orientation = $data['orientation'];
        }
        if (isset($data['outputBin'])) {
            $this->outputBin = $data['outputBin'];
        }
        if (isset($data['pagesPerSheet'])) {
            $this->pagesPerSheet = $data['pagesPerSheet'];
        }
        if (isset($data['quality'])) {
            $this->quality = $data['quality'];
        }
        if (isset($data['scaling'])) {
            $this->scaling = $data['scaling'];
        }
    }
}
