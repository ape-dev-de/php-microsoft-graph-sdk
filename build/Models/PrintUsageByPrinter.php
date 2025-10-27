<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintUsageByPrinter
 */
class PrintUsageByPrinter
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?float $blackAndWhitePageCount = null;

    /**  */
    public ?float $colorPageCount = null;

    /**  */
    public ?float $completedBlackAndWhiteJobCount = null;

    /**  */
    public ?float $completedColorJobCount = null;

    /**  */
    public ?float $completedJobCount = null;

    /**  */
    public ?float $doubleSidedSheetCount = null;

    /**  */
    public ?float $incompleteJobCount = null;

    /**  */
    public ?float $mediaSheetCount = null;

    /**  */
    public ?float $pageCount = null;

    /**  */
    public ?float $singleSidedSheetCount = null;

    /**  */
    public ?\DateTimeInterface $usageDate = null;

    /** The ID of the printer represented by these statistics. */
    public ?string $printerId = null;

    /** The name of the printer represented by these statistics. */
    public ?string $printerName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['blackAndWhitePageCount'])) {
            $this->blackAndWhitePageCount = is_numeric($data['blackAndWhitePageCount']) ? (float)$data['blackAndWhitePageCount'] : $data['blackAndWhitePageCount'];
        }
        if (isset($data['colorPageCount'])) {
            $this->colorPageCount = is_numeric($data['colorPageCount']) ? (float)$data['colorPageCount'] : $data['colorPageCount'];
        }
        if (isset($data['completedBlackAndWhiteJobCount'])) {
            $this->completedBlackAndWhiteJobCount = is_numeric($data['completedBlackAndWhiteJobCount']) ? (float)$data['completedBlackAndWhiteJobCount'] : $data['completedBlackAndWhiteJobCount'];
        }
        if (isset($data['completedColorJobCount'])) {
            $this->completedColorJobCount = is_numeric($data['completedColorJobCount']) ? (float)$data['completedColorJobCount'] : $data['completedColorJobCount'];
        }
        if (isset($data['completedJobCount'])) {
            $this->completedJobCount = is_numeric($data['completedJobCount']) ? (float)$data['completedJobCount'] : $data['completedJobCount'];
        }
        if (isset($data['doubleSidedSheetCount'])) {
            $this->doubleSidedSheetCount = is_numeric($data['doubleSidedSheetCount']) ? (float)$data['doubleSidedSheetCount'] : $data['doubleSidedSheetCount'];
        }
        if (isset($data['incompleteJobCount'])) {
            $this->incompleteJobCount = is_numeric($data['incompleteJobCount']) ? (float)$data['incompleteJobCount'] : $data['incompleteJobCount'];
        }
        if (isset($data['mediaSheetCount'])) {
            $this->mediaSheetCount = is_numeric($data['mediaSheetCount']) ? (float)$data['mediaSheetCount'] : $data['mediaSheetCount'];
        }
        if (isset($data['pageCount'])) {
            $this->pageCount = is_numeric($data['pageCount']) ? (float)$data['pageCount'] : $data['pageCount'];
        }
        if (isset($data['singleSidedSheetCount'])) {
            $this->singleSidedSheetCount = is_numeric($data['singleSidedSheetCount']) ? (float)$data['singleSidedSheetCount'] : $data['singleSidedSheetCount'];
        }
        if (isset($data['usageDate'])) {
            $this->usageDate = is_string($data['usageDate']) ? new \DateTimeImmutable($data['usageDate']) : $data['usageDate'];
        }
        if (isset($data['printerId'])) {
            $this->printerId = $data['printerId'];
        }
        if (isset($data['printerName'])) {
            $this->printerName = $data['printerName'];
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
