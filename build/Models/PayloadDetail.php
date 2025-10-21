<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadDetail
 */
class PayloadDetail
{
    public function __construct(
        /**  */
        public array $coachmarks = [],
        /** Payload content details. */
        public ?string $content = null,
        /** The phishing URL used to target a user. */
        public ?string $phishingUrl = null
    ) {}
}
