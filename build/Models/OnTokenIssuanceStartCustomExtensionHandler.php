<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartCustomExtensionHandler
 */
class OnTokenIssuanceStartCustomExtensionHandler
{
    public function __construct(
        /**  */
        public ?string $configuration = null,
        /**  */
        public ?string $customExtension = null
    ) {}
}
