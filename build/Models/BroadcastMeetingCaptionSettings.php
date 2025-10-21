<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BroadcastMeetingCaptionSettings
 */
class BroadcastMeetingCaptionSettings
{
    public function __construct(
        /** Indicates whether captions are enabled for this Teams live event. */
        public ?bool $isCaptionEnabled = null,
        /** The spoken language. */
        public ?string $spokenLanguage = null,
        /** @var string[] The translation languages (choose up to 6). */
        public array $translationLanguages = []
    ) {}
}
