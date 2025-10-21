<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SendDtmfTonesOperation
 */
class SendDtmfTonesOperation
{
    public function __construct(
        /** The results of the action. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled, unknownfutureValue. */
        public ?string $completionReason = null
    ) {}
}
