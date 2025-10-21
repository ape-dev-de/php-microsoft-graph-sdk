<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStatusInfo
 */
class ProvisioningStatusInfo
{
    public function __construct(
        /** If status isn't success/ skipped details for the error are contained in this. */
        public ?ProvisioningErrorInfo $errorInformation = null,
        /** Possible values are: success, warning, failure, skipped, unknownFutureValue. */
        public ?ProvisioningResult $status = null
    ) {}
}
