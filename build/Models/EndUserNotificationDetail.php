<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotificationDetail
 */
class EndUserNotificationDetail
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Email HTML content. */
    public ?string $emailContent = null;

    /** Indicates whether this language is default. */
    public ?bool $isDefaultLangauge = null;

    /** Notification language. */
    public ?string $language = null;

    /** Notification locale. */
    public ?string $locale = null;

    /**  */
    public ?EmailIdentity $sentFrom = null;

    /** Mail subject. */
    public ?string $subject = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['emailContent'])) {
            $this->emailContent = $data['emailContent'];
        }
        if (isset($data['isDefaultLangauge'])) {
            $this->isDefaultLangauge = $data['isDefaultLangauge'];
        }
        if (isset($data['language'])) {
            $this->language = $data['language'];
        }
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
        if (isset($data['sentFrom'])) {
            $this->sentFrom = is_array($data['sentFrom']) ? new EmailIdentity($data['sentFrom']) : $data['sentFrom'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
    }
}
