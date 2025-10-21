<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudCommunications
 */
class CloudCommunications
{
    public function __construct(
        /**  */
        public array $callRecords = [],
        /**  */
        public array $calls = [],
        /**  */
        public array $onlineMeetings = [],
        /** @var string[]  */
        public array $presences = []
    ) {}
}
