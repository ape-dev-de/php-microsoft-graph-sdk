<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintUsageByUser
 */
class PrintUsageByUser
{
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

    /** The UPN of the user represented by these statistics. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['blackAndWhitePageCount'])) {
            $this->blackAndWhitePageCount = $data['blackAndWhitePageCount'];
        }
        if (isset($data['colorPageCount'])) {
            $this->colorPageCount = $data['colorPageCount'];
        }
        if (isset($data['completedBlackAndWhiteJobCount'])) {
            $this->completedBlackAndWhiteJobCount = $data['completedBlackAndWhiteJobCount'];
        }
        if (isset($data['completedColorJobCount'])) {
            $this->completedColorJobCount = $data['completedColorJobCount'];
        }
        if (isset($data['completedJobCount'])) {
            $this->completedJobCount = $data['completedJobCount'];
        }
        if (isset($data['doubleSidedSheetCount'])) {
            $this->doubleSidedSheetCount = $data['doubleSidedSheetCount'];
        }
        if (isset($data['incompleteJobCount'])) {
            $this->incompleteJobCount = $data['incompleteJobCount'];
        }
        if (isset($data['mediaSheetCount'])) {
            $this->mediaSheetCount = $data['mediaSheetCount'];
        }
        if (isset($data['pageCount'])) {
            $this->pageCount = $data['pageCount'];
        }
        if (isset($data['singleSidedSheetCount'])) {
            $this->singleSidedSheetCount = $data['singleSidedSheetCount'];
        }
        if (isset($data['usageDate'])) {
            $this->usageDate = is_string($data['usageDate']) ? new \DateTimeImmutable($data['usageDate']) : $data['usageDate'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
