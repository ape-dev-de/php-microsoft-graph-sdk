<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintUsage
 */
class PrintUsage
{
    /**
     */
    private ?float $blackAndWhitePageCount;

    /**
     */
    private ?float $colorPageCount;

    /**
     */
    private ?float $completedBlackAndWhiteJobCount;

    /**
     */
    private ?float $completedColorJobCount;

    /**
     */
    private ?float $completedJobCount;

    /**
     */
    private ?float $doubleSidedSheetCount;

    /**
     */
    private ?float $incompleteJobCount;

    /**
     */
    private ?float $mediaSheetCount;

    /**
     */
    private ?float $pageCount;

    /**
     */
    private ?float $singleSidedSheetCount;

    /**
     */
    private ?\DateTimeInterface $usageDate;

    public function getBlackAndWhitePageCount(): ?float
    {
        return $this->blackAndWhitePageCount;
    }

    public function setBlackAndWhitePageCount(?float $blackAndWhitePageCount): self
    {
        $this->blackAndWhitePageCount = $blackAndWhitePageCount;
        return $this;
    }

    public function getColorPageCount(): ?float
    {
        return $this->colorPageCount;
    }

    public function setColorPageCount(?float $colorPageCount): self
    {
        $this->colorPageCount = $colorPageCount;
        return $this;
    }

    public function getCompletedBlackAndWhiteJobCount(): ?float
    {
        return $this->completedBlackAndWhiteJobCount;
    }

    public function setCompletedBlackAndWhiteJobCount(?float $completedBlackAndWhiteJobCount): self
    {
        $this->completedBlackAndWhiteJobCount = $completedBlackAndWhiteJobCount;
        return $this;
    }

    public function getCompletedColorJobCount(): ?float
    {
        return $this->completedColorJobCount;
    }

    public function setCompletedColorJobCount(?float $completedColorJobCount): self
    {
        $this->completedColorJobCount = $completedColorJobCount;
        return $this;
    }

    public function getCompletedJobCount(): ?float
    {
        return $this->completedJobCount;
    }

    public function setCompletedJobCount(?float $completedJobCount): self
    {
        $this->completedJobCount = $completedJobCount;
        return $this;
    }

    public function getDoubleSidedSheetCount(): ?float
    {
        return $this->doubleSidedSheetCount;
    }

    public function setDoubleSidedSheetCount(?float $doubleSidedSheetCount): self
    {
        $this->doubleSidedSheetCount = $doubleSidedSheetCount;
        return $this;
    }

    public function getIncompleteJobCount(): ?float
    {
        return $this->incompleteJobCount;
    }

    public function setIncompleteJobCount(?float $incompleteJobCount): self
    {
        $this->incompleteJobCount = $incompleteJobCount;
        return $this;
    }

    public function getMediaSheetCount(): ?float
    {
        return $this->mediaSheetCount;
    }

    public function setMediaSheetCount(?float $mediaSheetCount): self
    {
        $this->mediaSheetCount = $mediaSheetCount;
        return $this;
    }

    public function getPageCount(): ?float
    {
        return $this->pageCount;
    }

    public function setPageCount(?float $pageCount): self
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    public function getSingleSidedSheetCount(): ?float
    {
        return $this->singleSidedSheetCount;
    }

    public function setSingleSidedSheetCount(?float $singleSidedSheetCount): self
    {
        $this->singleSidedSheetCount = $singleSidedSheetCount;
        return $this;
    }

    public function getUsageDate(): ?\DateTimeInterface
    {
        return $this->usageDate;
    }

    public function setUsageDate(?\DateTimeInterface $usageDate): self
    {
        $this->usageDate = $usageDate;
        return $this;
    }

}
