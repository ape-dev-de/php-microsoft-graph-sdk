<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FolderView
 */
class FolderView
{
    public function __construct(
        /** The method by which the folder should be sorted. */
        public ?string $sortBy = null,
        /** If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending. */
        public ?string $sortOrder = null,
        /** The type of view that should be used to represent the folder. */
        public ?string $viewType = null
    ) {}
}
