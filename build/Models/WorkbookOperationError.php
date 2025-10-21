<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperationError
 */
class WorkbookOperationError
{
    public function __construct(
        /** The error code. */
        public ?string $code = null,
        /**  */
        public ?WorkbookOperationError $innerError = null,
        /** The error message. */
        public ?string $message = null
    ) {}
}
