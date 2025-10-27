<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BroadcastMeetingCaptionSettings
 */
class BroadcastMeetingCaptionSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether captions are enabled for this Teams live event. */
    public ?bool $isCaptionEnabled = null;

    /** The spoken language. */
    public ?string $spokenLanguage = null;

    /** 
     * The translation languages (choose up to 6).
     * @var string[]
     */
    public array $translationLanguages = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isCaptionEnabled'])) {
            $this->isCaptionEnabled = $data['isCaptionEnabled'];
        }
        if (isset($data['spokenLanguage'])) {
            $this->spokenLanguage = $data['spokenLanguage'];
        }
        if (isset($data['translationLanguages'])) {
            $this->translationLanguages = $data['translationLanguages'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
