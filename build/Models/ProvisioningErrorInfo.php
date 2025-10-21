<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningErrorInfo
 */
class ProvisioningErrorInfo
{
    public function __construct(
        /** Additional details if there's error. */
        public ?string $additionalDetails = null,
        /** Categorizes the error code. Possible values are failure, nonServiceFailure, success, unknownFutureValue */
        public ?string $errorCategory = null,
        /** Unique error code if any occurred. Learn more */
        public ?string $errorCode = null,
        /** Summarizes the status and describes why the status happened. */
        public ?string $reason = null,
        /** Provides the resolution for the corresponding error. */
        public ?string $recommendedAction = null
    ) {}
}
