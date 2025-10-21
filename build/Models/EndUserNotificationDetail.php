<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotificationDetail
 */
class EndUserNotificationDetail
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Email HTML content. */
        public ?string $emailContent = null,
        /** Indicates whether this language is default. */
        public ?bool $isDefaultLangauge = null,
        /** Notification language. */
        public ?string $language = null,
        /** Notification locale. */
        public ?string $locale = null,
        /**  */
        public ?string $sentFrom = null,
        /** Mail subject. */
        public ?string $subject = null
    ) {}
}
