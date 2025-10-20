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
     */
    private ?float $bottomMargins;

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
     */
    private ?string $contentTypes;

    /**
     * The range of copies per job supported by the printer.
     */
    private ?string $copiesPerJob;

    /**
     * The list of print resolutions in DPI that are supported by the printer.
     */
    private ?float $dpis;

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
     */
    private ?string $inputBins;

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
     */
    private ?float $leftMargins;

    /**
     * The media (i.e., paper) colors supported by the printer.
     */
    private ?string $mediaColors;

    /**
     * The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
     */
    private ?string $mediaSizes;

    /**
     * The media types supported by the printer.
     */
    private ?string $mediaTypes;

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
     */
    private ?string $outputBins;

    /**
     * Supported number of Input Pages to impose upon a single Impression.
     */
    private ?float $pagesPerSheet;

    /**
     * The print qualities supported by the printer.
     */
    private array $qualities = [];

    /**
     * A list of supported right margins(in microns) for the printer.
     */
    private ?float $rightMargins;

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
     */
    private ?string $topMargins;

    public function getBottomMargins(): ?float
    {
        return $this->bottomMargins;
    }

    public function setBottomMargins(?float $bottomMargins): self
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

    public function getContentTypes(): ?string
    {
        return $this->contentTypes;
    }

    public function setContentTypes(?string $contentTypes): self
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

    public function getDpis(): ?float
    {
        return $this->dpis;
    }

    public function setDpis(?float $dpis): self
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

    public function getInputBins(): ?string
    {
        return $this->inputBins;
    }

    public function setInputBins(?string $inputBins): self
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

    public function getLeftMargins(): ?float
    {
        return $this->leftMargins;
    }

    public function setLeftMargins(?float $leftMargins): self
    {
        $this->leftMargins = $leftMargins;
        return $this;
    }

    public function getMediaColors(): ?string
    {
        return $this->mediaColors;
    }

    public function setMediaColors(?string $mediaColors): self
    {
        $this->mediaColors = $mediaColors;
        return $this;
    }

    public function getMediaSizes(): ?string
    {
        return $this->mediaSizes;
    }

    public function setMediaSizes(?string $mediaSizes): self
    {
        $this->mediaSizes = $mediaSizes;
        return $this;
    }

    public function getMediaTypes(): ?string
    {
        return $this->mediaTypes;
    }

    public function setMediaTypes(?string $mediaTypes): self
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

    public function getOutputBins(): ?string
    {
        return $this->outputBins;
    }

    public function setOutputBins(?string $outputBins): self
    {
        $this->outputBins = $outputBins;
        return $this;
    }

    public function getPagesPerSheet(): ?float
    {
        return $this->pagesPerSheet;
    }

    public function setPagesPerSheet(?float $pagesPerSheet): self
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

    public function getRightMargins(): ?float
    {
        return $this->rightMargins;
    }

    public function setRightMargins(?float $rightMargins): self
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

    public function getTopMargins(): ?string
    {
        return $this->topMargins;
    }

    public function setTopMargins(?string $topMargins): self
    {
        $this->topMargins = $topMargins;
        return $this;
    }

}
