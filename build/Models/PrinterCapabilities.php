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
    private array $bottomMargins = [];

    /**
     * True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
     */
    private ?bool $collation;

    /**
     * The color modes supported by the printer. Valid values are described in the following table.
     */
    private array $colorModes = [];

    /**
     * A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
     * @var string[]
     */
    private array $contentTypes = [];

    /**
     * The range of copies per job supported by the printer.
     */
    private ?string $copiesPerJob;

    /**
     * The list of print resolutions in DPI that are supported by the printer.
     * @var float[]
     */
    private array $dpis = [];

    /**
     * The list of duplex modes that are supported by the printer. Valid values are described in the following table.
     */
    private array $duplexModes = [];

    /**
     * The list of feed orientations that are supported by the printer.
     */
    private array $feedOrientations = [];

    /**
     * Finishing processes the printer supports for a printed document.
     */
    private array $finishings = [];

    /**
     * Supported input bins for the printer.
     * @var string[]
     */
    private array $inputBins = [];

    /**
     * True if color printing is supported by the printer; false otherwise. Read-only.
     */
    private ?bool $isColorPrintingSupported;

    /**
     * True if the printer supports printing by page ranges; false otherwise.
     */
    private ?bool $isPageRangeSupported;

    /**
     * A list of supported left margins(in microns) for the printer.
     * @var float[]
     */
    private array $leftMargins = [];

    /**
     * The media (i.e., paper) colors supported by the printer.
     * @var string[]
     */
    private array $mediaColors = [];

    /**
     * The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
     * @var string[]
     */
    private array $mediaSizes = [];

    /**
     * The media types supported by the printer.
     * @var string[]
     */
    private array $mediaTypes = [];

    /**
     * The presentation directions supported by the printer. Supported values are described in the following table.
     */
    private array $multipageLayouts = [];

    /**
     * The print orientations supported by the printer. Valid values are described in the following table.
     */
    private array $orientations = [];

    /**
     * The printer's supported output bins (trays).
     * @var string[]
     */
    private array $outputBins = [];

    /**
     * Supported number of Input Pages to impose upon a single Impression.
     * @var float[]
     */
    private array $pagesPerSheet = [];

    /**
     * The print qualities supported by the printer.
     */
    private array $qualities = [];

    /**
     * A list of supported right margins(in microns) for the printer.
     * @var float[]
     */
    private array $rightMargins = [];

    /**
     * Supported print scalings.
     */
    private array $scalings = [];

    /**
     * True if the printer supports scaling PDF pages to match the print media size; false otherwise.
     */
    private ?bool $supportsFitPdfToPage;

    /**
     * A list of supported top margins(in microns) for the printer.
     * @var string[]
     */
    private array $topMargins = [];


    /**
     * @return float[]
     */
    public function getBottomMargins(): array
    {
        return $this->bottomMargins;
    }

    /**
     * @param float[] $bottomMargins
     */
    public function setBottomMargins(array $bottomMargins): self
    {
        $this->bottomMargins = $bottomMargins;
        return $this;
    }

    public function getCollation(): ?bool
    {
        return $this->collation;
    }

    public function setCollation(?bool $collation): self
    {
        $this->collation = $collation;
        return $this;
    }

    public function getColorModes(): array
    {
        return $this->colorModes;
    }

    public function setColorModes(array $colorModes): self
    {
        $this->colorModes = $colorModes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getContentTypes(): array
    {
        return $this->contentTypes;
    }

    /**
     * @param string[] $contentTypes
     */
    public function setContentTypes(array $contentTypes): self
    {
        $this->contentTypes = $contentTypes;
        return $this;
    }

    public function getCopiesPerJob(): ?string
    {
        return $this->copiesPerJob;
    }

    public function setCopiesPerJob(?string $copiesPerJob): self
    {
        $this->copiesPerJob = $copiesPerJob;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getDpis(): array
    {
        return $this->dpis;
    }

    /**
     * @param float[] $dpis
     */
    public function setDpis(array $dpis): self
    {
        $this->dpis = $dpis;
        return $this;
    }

    public function getDuplexModes(): array
    {
        return $this->duplexModes;
    }

    public function setDuplexModes(array $duplexModes): self
    {
        $this->duplexModes = $duplexModes;
        return $this;
    }

    public function getFeedOrientations(): array
    {
        return $this->feedOrientations;
    }

    public function setFeedOrientations(array $feedOrientations): self
    {
        $this->feedOrientations = $feedOrientations;
        return $this;
    }

    public function getFinishings(): array
    {
        return $this->finishings;
    }

    public function setFinishings(array $finishings): self
    {
        $this->finishings = $finishings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getInputBins(): array
    {
        return $this->inputBins;
    }

    /**
     * @param string[] $inputBins
     */
    public function setInputBins(array $inputBins): self
    {
        $this->inputBins = $inputBins;
        return $this;
    }

    public function getIsColorPrintingSupported(): ?bool
    {
        return $this->isColorPrintingSupported;
    }

    public function setIsColorPrintingSupported(?bool $isColorPrintingSupported): self
    {
        $this->isColorPrintingSupported = $isColorPrintingSupported;
        return $this;
    }

    public function getIsPageRangeSupported(): ?bool
    {
        return $this->isPageRangeSupported;
    }

    public function setIsPageRangeSupported(?bool $isPageRangeSupported): self
    {
        $this->isPageRangeSupported = $isPageRangeSupported;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getLeftMargins(): array
    {
        return $this->leftMargins;
    }

    /**
     * @param float[] $leftMargins
     */
    public function setLeftMargins(array $leftMargins): self
    {
        $this->leftMargins = $leftMargins;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMediaColors(): array
    {
        return $this->mediaColors;
    }

    /**
     * @param string[] $mediaColors
     */
    public function setMediaColors(array $mediaColors): self
    {
        $this->mediaColors = $mediaColors;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMediaSizes(): array
    {
        return $this->mediaSizes;
    }

    /**
     * @param string[] $mediaSizes
     */
    public function setMediaSizes(array $mediaSizes): self
    {
        $this->mediaSizes = $mediaSizes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMediaTypes(): array
    {
        return $this->mediaTypes;
    }

    /**
     * @param string[] $mediaTypes
     */
    public function setMediaTypes(array $mediaTypes): self
    {
        $this->mediaTypes = $mediaTypes;
        return $this;
    }

    public function getMultipageLayouts(): array
    {
        return $this->multipageLayouts;
    }

    public function setMultipageLayouts(array $multipageLayouts): self
    {
        $this->multipageLayouts = $multipageLayouts;
        return $this;
    }

    public function getOrientations(): array
    {
        return $this->orientations;
    }

    public function setOrientations(array $orientations): self
    {
        $this->orientations = $orientations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOutputBins(): array
    {
        return $this->outputBins;
    }

    /**
     * @param string[] $outputBins
     */
    public function setOutputBins(array $outputBins): self
    {
        $this->outputBins = $outputBins;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getPagesPerSheet(): array
    {
        return $this->pagesPerSheet;
    }

    /**
     * @param float[] $pagesPerSheet
     */
    public function setPagesPerSheet(array $pagesPerSheet): self
    {
        $this->pagesPerSheet = $pagesPerSheet;
        return $this;
    }

    public function getQualities(): array
    {
        return $this->qualities;
    }

    public function setQualities(array $qualities): self
    {
        $this->qualities = $qualities;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getRightMargins(): array
    {
        return $this->rightMargins;
    }

    /**
     * @param float[] $rightMargins
     */
    public function setRightMargins(array $rightMargins): self
    {
        $this->rightMargins = $rightMargins;
        return $this;
    }

    public function getScalings(): array
    {
        return $this->scalings;
    }

    public function setScalings(array $scalings): self
    {
        $this->scalings = $scalings;
        return $this;
    }

    public function getSupportsFitPdfToPage(): ?bool
    {
        return $this->supportsFitPdfToPage;
    }

    public function setSupportsFitPdfToPage(?bool $supportsFitPdfToPage): self
    {
        $this->supportsFitPdfToPage = $supportsFitPdfToPage;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTopMargins(): array
    {
        return $this->topMargins;
    }

    /**
     * @param string[] $topMargins
     */
    public function setTopMargins(array $topMargins): self
    {
        $this->topMargins = $topMargins;
        return $this;
    }

}
