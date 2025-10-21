<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BroadcastMeetingCaptionSettings
 */
class BroadcastMeetingCaptionSettings
{
    /**
     * Indicates whether captions are enabled for this Teams live event.
     */
    private ?bool $isCaptionEnabled;

    /**
     * The spoken language.
     */
    private ?string $spokenLanguage;

    /**
     * The translation languages (choose up to 6).
     * @var string[]
     */
    private array $translationLanguages = [];


    public function getIsCaptionEnabled(): ?bool
    {
        return $this->isCaptionEnabled;
    }

    public function setIsCaptionEnabled(?bool $isCaptionEnabled): self
    {
        $this->isCaptionEnabled = $isCaptionEnabled;
        return $this;
    }

    public function getSpokenLanguage(): ?string
    {
        return $this->spokenLanguage;
    }

    public function setSpokenLanguage(?string $spokenLanguage): self
    {
        $this->spokenLanguage = $spokenLanguage;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTranslationLanguages(): array
    {
        return $this->translationLanguages;
    }

    /**
     * @param string[] $translationLanguages
     */
    public function setTranslationLanguages(array $translationLanguages): self
    {
        $this->translationLanguages = $translationLanguages;
        return $this;
    }

}
