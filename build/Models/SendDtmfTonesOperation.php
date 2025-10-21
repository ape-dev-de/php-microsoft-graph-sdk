<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SendDtmfTonesOperation
 */
class SendDtmfTonesOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Unique Client Context string. Max limit is 256 chars. */
        public ?string $clientContext = null,
        /** The result information. Read-only. */
        public ?string $resultInfo = null,
        /**  */
        public ?string $status = null,
        /** The results of the action. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled, unknownfutureValue. */
        public ?string $completionReason = null
    ) {}
}
