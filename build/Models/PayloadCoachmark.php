<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadCoachmark
 */
class PayloadCoachmark
{
    public function __construct(
        /** The coachmark location. */
        public ?string $coachmarkLocation = null,
        /** The description about the coachmark. */
        public ?string $description = null,
        /** The coachmark indicator. */
        public ?string $indicator = null,
        /** Indicates whether the coachmark is valid or not. */
        public ?bool $isValid = null,
        /** The coachmark language. */
        public ?string $language = null,
        /** The coachmark order. */
        public ?string $order = null
    ) {}
}
