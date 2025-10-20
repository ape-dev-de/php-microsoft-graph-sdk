<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocalizedNotificationMessage
 */
class LocalizedNotificationMessage
{
    /**
     * Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message.
     */
    private ?bool $isDefault;

    /**
     * DateTime the object was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The Locale for which this message is destined.
     */
    private ?string $locale;

    /**
     * The Message Template content.
     */
    private ?string $messageTemplate;

    /**
     * The text content of a Notification Message Template for the specified locale.
     */
    private ?string $subject;

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
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

    public function getMessageTemplate(): ?string
    {
        return $this->messageTemplate;
    }

    public function setMessageTemplate(?string $messageTemplate): self
    {
        $this->messageTemplate = $messageTemplate;
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
