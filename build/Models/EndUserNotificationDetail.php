<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotificationDetail
 */
class EndUserNotificationDetail
{
    /**
     * Email HTML content.
     */
    private ?string $emailContent;

    /**
     * Indicates whether this language is default.
     */
    private ?bool $isDefaultLangauge;

    /**
     * Notification language.
     */
    private ?string $language;

    /**
     * Notification locale.
     */
    private ?string $locale;

    /**
     */
    private ?string $sentFrom;

    /**
     * Mail subject.
     */
    private ?string $subject;

    public function getEmailContent(): ?string
    {
        return $this->emailContent;
    }

    public function setEmailContent(?string $emailContent): self
    {
        $this->emailContent = $emailContent;
        return $this;
    }

    public function getIsDefaultLangauge(): ?bool
    {
        return $this->isDefaultLangauge;
    }

    public function setIsDefaultLangauge(?bool $isDefaultLangauge): self
    {
        $this->isDefaultLangauge = $isDefaultLangauge;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function getSentFrom(): ?string
    {
        return $this->sentFrom;
    }

    public function setSentFrom(?string $sentFrom): self
    {
        $this->sentFrom = $sentFrom;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

}
