<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsErrorDetails
 */
class ODataErrorsErrorDetails
{
    public function __construct(
        /**  */
        public ?string $code = null,
        /**  */
        public ?string $message = null,
        /**  */
        public ?string $target = null
    ) {}
}
