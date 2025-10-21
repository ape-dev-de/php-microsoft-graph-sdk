<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConnectionOperation
 */
class ExternalConnectorsConnectionOperation
{
    public function __construct(
        /** If status is failed, provides more information about the error that caused the failure. */
        public ?string $error = null,
        /** Indicates the status of the asynchronous operation. Possible values are: unspecified, inprogress, completed, failed, unknownFutureValue. */
        public ?string $status = null
    ) {}
}
