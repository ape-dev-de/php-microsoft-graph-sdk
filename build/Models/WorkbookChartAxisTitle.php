<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisTitle
 */
class WorkbookChartAxisTitle
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the axis title. */
        public ?string $text = null,
        /** A Boolean that specifies the visibility of an axis title. */
        public ?bool $visible = null,
        /** Represents the formatting of chart axis title. Read-only. */
        public ?string $format = null
    ) {}
}
