<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnOtpSendCustomExtensionHandler
 */
class OnOtpSendCustomExtensionHandler
{
    public function __construct(
        /** Configuration regarding properties of the custom extension that are can be overwritten for the onEmailOtpSendListener event listener. */
        public ?string $configuration = null,
        /**  */
        public ?string $customExtension = null
    ) {}
}
