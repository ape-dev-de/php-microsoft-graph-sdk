<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionClientConfiguration
 */
class CustomExtensionClientConfiguration
{
    public function __construct(
        /** The max number of retries that Microsoft Entra ID makes to the external API. Values of 0 or 1 are supported. If null, the default for the service applies. */
        public ?float $maximumRetries = null,
        /** The max duration in milliseconds that Microsoft Entra ID waits for a response from the external app before it shuts down the connection. The valid range is between 200 and 2000 milliseconds. Default duration is 1000. */
        public ?float $timeoutInMilliseconds = null
    ) {}
}
