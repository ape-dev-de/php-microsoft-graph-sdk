<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BroadcastMeetingCaptionSettings resources
 *
 * Available select fields:
 * - isCaptionEnabled
 * - spokenLanguage
 * - translationLanguages
 */
class BroadcastMeetingCaptionSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_CAPTION_ENABLED = 'isCaptionEnabled';
    public const FIELD_SPOKEN_LANGUAGE = 'spokenLanguage';
    public const FIELD_TRANSLATION_LANGUAGES = 'translationLanguages';

    /**
     * Select specific BroadcastMeetingCaptionSettings properties
     * 
     * @param array<string> $select Use BroadcastMeetingCaptionSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
