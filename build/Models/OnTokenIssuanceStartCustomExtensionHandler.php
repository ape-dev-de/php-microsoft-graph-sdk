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
        public ?CustomExtensionOverwriteConfiguration $configuration = null,
        /**  */
        public ?OnTokenIssuanceStartCustomExtension $customExtension = null
    ) {}
}
