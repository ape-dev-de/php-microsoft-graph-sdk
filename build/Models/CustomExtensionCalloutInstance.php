<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutInstance
 */
class CustomExtensionCalloutInstance
{
    public function __construct(
        /** Identification of the custom extension that was triggered at this instance. */
        public ?string $customExtensionId = null,
        /** Details provided by the logic app during the callback of the request instance. */
        public ?string $detail = null,
        /** The unique run identifier for the logic app. */
        public ?string $externalCorrelationId = null,
        /** Unique identifier for the callout instance. Read-only. */
        public ?string $id = null,
        /** The status of the request to the custom extension. The possible values are: calloutSent, callbackReceived, calloutFailed, callbackTimedOut, waitingForCallback, unknownFutureValue. */
        public ?string $status = null
    ) {}
}
