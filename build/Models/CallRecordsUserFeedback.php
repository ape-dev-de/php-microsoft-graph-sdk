<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsUserFeedback
 */
class CallRecordsUserFeedback
{
    public function __construct(
        /**  */
        public ?string $rating = null,
        /** The feedback text provided by the user of this endpoint for the session. */
        public ?string $text = null,
        /** The set of feedback tokens provided by the user of this endpoint for the session. This is a set of Boolean properties. The property names should not be relied upon since they may change depending on what tokens are offered to the user. */
        public ?string $tokens = null
    ) {}
}
