<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsClientUserAgent
 */
class CallRecordsClientUserAgent
{
    public function __construct(
        /** Identifies the version of application software used by this endpoint. */
        public ?string $applicationVersion = null,
        /** User-agent header value reported by this endpoint. */
        public ?string $headerValue = null,
        /** The unique identifier of the Microsoft Entra application used by this endpoint. */
        public ?string $azureADAppId = null,
        /** Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs. */
        public ?string $communicationServiceId = null,
        /**  */
        public ?CallRecordsClientPlatform $platform = null,
        /**  */
        public ?CallRecordsProductFamily $productFamily = null
    ) {}
}
