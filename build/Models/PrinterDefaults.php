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
     */
    private ?string $colorMode;

    /**
     * The default content (MIME) type to use when processing documents.
     */
    private ?string $contentType;

    /**
     * The default number of copies printed per job.
     */
    private ?float $copiesPerJob;

    /**
     * The default resolution in DPI to use when printing the job.
     */
    private ?float $dpi;

    /**
     * The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     */
    private ?string $duplexMode;

    /**
     * The default set of finishings to apply to print jobs. Valid values are described in the following table.
     */
    private array $finishings = [];

    /**
     * The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     */
    private ?bool $fitPdfToPage;

    /**
     * The default input bin that serves as the paper source.
     */
    private ?string $inputBin;

    /**
     * The default media (such as paper) color to print the document on.
     */
    private ?string $mediaColor;

    /**
     * The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
     */
    private ?string $mediaSize;

    /**
     * The default media (such as paper) type to print the document on.
     */
    private ?string $mediaType;

    /**
     * The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     */
    private ?string $multipageLayout;

    /**
     * The default orientation to use when printing the document. Valid values are described in the following table.
     */
    private ?string $orientation;

    /**
     * The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     */
    private ?string $outputBin;

    /**
     * The default number of document pages to print on each sheet.
     */
    private ?float $pagesPerSheet;

    /**
     * The default quality to use when printing the document. Valid values are described in the following table.
     */
    private ?string $quality;

    /**
     * Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
     */
    private ?string $scaling;


    public function getColorMode(): ?string
    {
        return $this->colorMode;
    }

    public function setColorMode(?string $colorMode): self
    {
        $this->colorMode = $colorMode;
        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getCopiesPerJob(): ?float
    {
        return $this->copiesPerJob;
    }

    public function setCopiesPerJob(?float $copiesPerJob): self
    {
        $this->copiesPerJob = $copiesPerJob;
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

    public function getMediaColor(): ?string
    {
        return $this->mediaColor;
    }

    public function setMediaColor(?string $mediaColor): self
    {
        $this->mediaColor = $mediaColor;
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
