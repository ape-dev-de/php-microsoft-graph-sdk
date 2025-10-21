<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudAppSecuritySessionControl
 */
class CloudAppSecuritySessionControl
{
    public function __construct(
        /** Specifies whether the session control is enabled. */
        public ?bool $isEnabled = null,
        /** Possible values are: mcasConfigured, monitorOnly, blockDownloads, unknownFutureValue. For more information, see Deploy Conditional Access App Control for featured apps. */
        public ?CloudAppSecuritySessionControlType $cloudAppSecurityType = null
    ) {}
}
