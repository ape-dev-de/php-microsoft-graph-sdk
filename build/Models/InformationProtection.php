<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InformationProtection
 */
class InformationProtection
{
    public function __construct(
        /**  */
        public ?string $bitlocker = null,
        /** @var string[]  */
        public array $threatAssessmentRequests = []
    ) {}
}
