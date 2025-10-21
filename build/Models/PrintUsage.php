<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintUsage
 */
class PrintUsage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?float $blackAndWhitePageCount = null,
        /**  */
        public ?float $colorPageCount = null,
        /**  */
        public ?float $completedBlackAndWhiteJobCount = null,
        /**  */
        public ?float $completedColorJobCount = null,
        /**  */
        public ?float $completedJobCount = null,
        /**  */
        public ?float $doubleSidedSheetCount = null,
        /**  */
        public ?float $incompleteJobCount = null,
        /**  */
        public ?float $mediaSheetCount = null,
        /**  */
        public ?float $pageCount = null,
        /**  */
        public ?float $singleSidedSheetCount = null,
        /**  */
        public ?\DateTimeInterface $usageDate = null
    ) {}
}
