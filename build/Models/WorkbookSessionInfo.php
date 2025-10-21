<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookSessionInfo
 */
class WorkbookSessionInfo
{
    public function __construct(
        /** ID of the workbook session. */
        public ?string $id = null,
        /** true for persistent session. false for non-persistent session (view mode) */
        public ?bool $persistChanges = null
    ) {}
}
