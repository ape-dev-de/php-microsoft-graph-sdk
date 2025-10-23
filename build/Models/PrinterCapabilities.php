<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterCapabilities
 */
class PrinterCapabilities
{
    /** 
     * A list of supported bottom margins(in microns) for the printer.
     * @var float[]
     */
    public array $bottomMargins = [];

    /** True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise. */
    public ?bool $collation = null;

    /** 
     * The color modes supported by the printer. Valid values are described in the following table.
     * @var PrintColorMode[]
     */
    public array $colorModes = [];

    /** 
     * A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
     * @var string[]
     */
    public array $contentTypes = [];

    /** 
     * The range of copies per job supported by the printer.
     * @var IntegerRange|\stdClass|null
     */
    public mixed $copiesPerJob = null;

    /** 
     * The list of print resolutions in DPI that are supported by the printer.
     * @var float[]
     */
    public array $dpis = [];

    /** 
     * The list of duplex modes that are supported by the printer. Valid values are described in the following table.
     * @var PrintDuplexMode[]
     */
    public array $duplexModes = [];

    /** 
     * The list of feed orientations that are supported by the printer.
     * @var PrinterFeedOrientation[]
     */
    public array $feedOrientations = [];

    /** 
     * Finishing processes the printer supports for a printed document.
     * @var PrintFinishing[]
     */
    public array $finishings = [];

    /** 
     * Supported input bins for the printer.
     * @var string[]
     */
    public array $inputBins = [];

    /** True if color printing is supported by the printer; false otherwise. Read-only. */
    public ?bool $isColorPrintingSupported = null;

    /** True if the printer supports printing by page ranges; false otherwise. */
    public ?bool $isPageRangeSupported = null;

    /** 
     * A list of supported left margins(in microns) for the printer.
     * @var float[]
     */
    public array $leftMargins = [];

    /** 
     * The media (i.e., paper) colors supported by the printer.
     * @var string[]
     */
    public array $mediaColors = [];

    /** 
     * The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
     * @var string[]
     */
    public array $mediaSizes = [];

    /** 
     * The media types supported by the printer.
     * @var string[]
     */
    public array $mediaTypes = [];

    /** 
     * The presentation directions supported by the printer. Supported values are described in the following table.
     * @var PrintMultipageLayout[]
     */
    public array $multipageLayouts = [];

    /** 
     * The print orientations supported by the printer. Valid values are described in the following table.
     * @var PrintOrientation[]
     */
    public array $orientations = [];

    /** 
     * The printer's supported output bins (trays).
     * @var string[]
     */
    public array $outputBins = [];

    /** 
     * Supported number of Input Pages to impose upon a single Impression.
     * @var float[]
     */
    public array $pagesPerSheet = [];

    /** 
     * The print qualities supported by the printer.
     * @var PrintQuality[]
     */
    public array $qualities = [];

    /** 
     * A list of supported right margins(in microns) for the printer.
     * @var float[]
     */
    public array $rightMargins = [];

    /** 
     * Supported print scalings.
     * @var PrintScaling[]
     */
    public array $scalings = [];

    /** True if the printer supports scaling PDF pages to match the print media size; false otherwise. */
    public ?bool $supportsFitPdfToPage = null;

    /** 
     * A list of supported top margins(in microns) for the printer.
     * @var float[]
     */
    public array $topMargins = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['bottomMargins'])) {
            $this->bottomMargins = $data['bottomMargins'];
        }
        if (isset($data['collation'])) {
            $this->collation = $data['collation'];
        }
        if (isset($data['colorModes'])) {
            $this->colorModes = $data['colorModes'];
        }
        if (isset($data['contentTypes'])) {
            $this->contentTypes = $data['contentTypes'];
        }
        if (isset($data['copiesPerJob'])) {
            $this->copiesPerJob = $data['copiesPerJob'];
        }
        if (isset($data['dpis'])) {
            $this->dpis = $data['dpis'];
        }
        if (isset($data['duplexModes'])) {
            $this->duplexModes = $data['duplexModes'];
        }
        if (isset($data['feedOrientations'])) {
            $this->feedOrientations = $data['feedOrientations'];
        }
        if (isset($data['finishings'])) {
            $this->finishings = $data['finishings'];
        }
        if (isset($data['inputBins'])) {
            $this->inputBins = $data['inputBins'];
        }
        if (isset($data['isColorPrintingSupported'])) {
            $this->isColorPrintingSupported = $data['isColorPrintingSupported'];
        }
        if (isset($data['isPageRangeSupported'])) {
            $this->isPageRangeSupported = $data['isPageRangeSupported'];
        }
        if (isset($data['leftMargins'])) {
            $this->leftMargins = $data['leftMargins'];
        }
        if (isset($data['mediaColors'])) {
            $this->mediaColors = $data['mediaColors'];
        }
        if (isset($data['mediaSizes'])) {
            $this->mediaSizes = $data['mediaSizes'];
        }
        if (isset($data['mediaTypes'])) {
            $this->mediaTypes = $data['mediaTypes'];
        }
        if (isset($data['multipageLayouts'])) {
            $this->multipageLayouts = $data['multipageLayouts'];
        }
        if (isset($data['orientations'])) {
            $this->orientations = $data['orientations'];
        }
        if (isset($data['outputBins'])) {
            $this->outputBins = $data['outputBins'];
        }
        if (isset($data['pagesPerSheet'])) {
            $this->pagesPerSheet = $data['pagesPerSheet'];
        }
        if (isset($data['qualities'])) {
            $this->qualities = $data['qualities'];
        }
        if (isset($data['rightMargins'])) {
            $this->rightMargins = $data['rightMargins'];
        }
        if (isset($data['scalings'])) {
            $this->scalings = $data['scalings'];
        }
        if (isset($data['supportsFitPdfToPage'])) {
            $this->supportsFitPdfToPage = $data['supportsFitPdfToPage'];
        }
        if (isset($data['topMargins'])) {
            $this->topMargins = $data['topMargins'];
        }
    }
}
