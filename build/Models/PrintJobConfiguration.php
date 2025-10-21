<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobConfiguration
 */
class PrintJobConfiguration
{
    /**
     * Whether the printer should collate pages wehen printing multiple copies of a multi-page document.
     */
    private ?bool $collate;

    /**
     * The color mode the printer should use to print the job. Valid values are described in the table below. Read-only.
     */
    private ?string $colorMode;

    /**
     * The number of copies that should be printed. Read-only.
     */
    private ?float $copies;

    /**
     * The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only.
     */
    private ?float $dpi;

    /**
     * The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only.
     */
    private ?string $duplexMode;

    /**
     * The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only.
     */
    private ?string $feedOrientation;

    /**
     * Finishing processes to use when printing.
     */
    private array $finishings = [];

    /**
     * True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     */
    private ?bool $fitPdfToPage;

    /**
     * The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins.
     */
    private ?string $inputBin;

    /**
     * The margin settings to use when printing.
     */
    private ?string $margin;

    /**
     * The media size to use when printing. Supports standard size names for ISO and ANSI media sizes. Valid values listed in the printerCapabilities topic.
     */
    private ?string $mediaSize;

    /**
     * The default media (such as paper) type to print the document on.
     */
    private ?string $mediaType;

    /**
     * The direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     */
    private ?string $multipageLayout;

    /**
     * The orientation setting the printer should use when printing the job. Valid values are described in the following table.
     */
    private ?string $orientation;

    /**
     * The output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     */
    private ?string $outputBin;

    /**
     * The page ranges to print. Read-only.
     */
    private array $pageRanges = [];

    /**
     * The number of document pages to print on each sheet.
     */
    private ?float $pagesPerSheet;

    /**
     * The print quality to use when printing the job. Valid values are described in the table below. Read-only.
     */
    private ?string $quality;

    /**
     * Specifies how the printer should scale the document data to fit the requested media. Valid values are described in the following table.
     */
    private ?string $scaling;


    public function getCollate(): ?bool
    {
        return $this->collate;
    }

    public function setCollate(?bool $collate): self
    {
        $this->collate = $collate;
        return $this;
    }

    public function getColorMode(): ?string
    {
        return $this->colorMode;
    }

    public function setColorMode(?string $colorMode): self
    {
        $this->colorMode = $colorMode;
        return $this;
    }

    public function getCopies(): ?float
    {
        return $this->copies;
    }

    public function setCopies(?float $copies): self
    {
        $this->copies = $copies;
        return $this;
    }

    public function getDpi(): ?float
    {
        return $this->dpi;
    }

    public function setDpi(?float $dpi): self
    {
        $this->dpi = $dpi;
        return $this;
    }

    public function getDuplexMode(): ?string
    {
        return $this->duplexMode;
    }

    public function setDuplexMode(?string $duplexMode): self
    {
        $this->duplexMode = $duplexMode;
        return $this;
    }

    public function getFeedOrientation(): ?string
    {
        return $this->feedOrientation;
    }

    public function setFeedOrientation(?string $feedOrientation): self
    {
        $this->feedOrientation = $feedOrientation;
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

    public function getFitPdfToPage(): ?bool
    {
        return $this->fitPdfToPage;
    }

    public function setFitPdfToPage(?bool $fitPdfToPage): self
    {
        $this->fitPdfToPage = $fitPdfToPage;
        return $this;
    }

    public function getInputBin(): ?string
    {
        return $this->inputBin;
    }

    public function setInputBin(?string $inputBin): self
    {
        $this->inputBin = $inputBin;
        return $this;
    }

    public function getMargin(): ?string
    {
        return $this->margin;
    }

    public function setMargin(?string $margin): self
    {
        $this->margin = $margin;
        return $this;
    }

    public function getMediaSize(): ?string
    {
        return $this->mediaSize;
    }

    public function setMediaSize(?string $mediaSize): self
    {
        $this->mediaSize = $mediaSize;
        return $this;
    }

    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }

    public function setMediaType(?string $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    public function getMultipageLayout(): ?string
    {
        return $this->multipageLayout;
    }

    public function setMultipageLayout(?string $multipageLayout): self
    {
        $this->multipageLayout = $multipageLayout;
        return $this;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(?string $orientation): self
    {
        $this->orientation = $orientation;
        return $this;
    }

    public function getOutputBin(): ?string
    {
        return $this->outputBin;
    }

    public function setOutputBin(?string $outputBin): self
    {
        $this->outputBin = $outputBin;
        return $this;
    }

    public function getPageRanges(): array
    {
        return $this->pageRanges;
    }

    public function setPageRanges(array $pageRanges): self
    {
        $this->pageRanges = $pageRanges;
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

    public function getQuality(): ?string
    {
        return $this->quality;
    }

    public function setQuality(?string $quality): self
    {
        $this->quality = $quality;
        return $this;
    }

    public function getScaling(): ?string
    {
        return $this->scaling;
    }

    public function setScaling(?string $scaling): self
    {
        $this->scaling = $scaling;
        return $this;
    }

}
