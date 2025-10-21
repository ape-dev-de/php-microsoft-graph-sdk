<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicErrorResponse
 */
class PublicErrorResponse
{
    public function __construct(
        /**  */
        public ?PublicError $error = null
    ) {}
}
