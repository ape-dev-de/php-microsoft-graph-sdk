<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsMainError
 */
class ODataErrorsMainError
{
    public function __construct(
        /**  */
        public ?string $code = null,
        /**  */
        public ?string $message = null,
        /**  */
        public ?string $target = null,
        /**  */
        public array $details = [],
        /**  */
        public ?string $innerError = null
    ) {}
}
