<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CanvasLayout
 */
class CanvasLayout
{
    public function __construct(
        /** Collection of horizontal sections on the SharePoint page. */
        public array $horizontalSections = [],
        /** Vertical section on the SharePoint page. */
        public ?string $verticalSection = null
    ) {}
}
