<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsClientUserAgent
 */
class CallRecordsClientUserAgent
{
    public function __construct(
        /** The unique identifier of the Microsoft Entra application used by this endpoint. */
        public ?string $azureADAppId = null,
        /** Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs. */
        public ?string $communicationServiceId = null,
        /**  */
        public ?string $platform = null,
        /**  */
        public ?string $productFamily = null
    ) {}
}
