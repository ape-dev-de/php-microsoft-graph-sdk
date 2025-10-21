<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocalizedNotificationMessage
 */
class LocalizedNotificationMessage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message. */
        public ?bool $isDefault = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The Locale for which this message is destined. */
        public ?string $locale = null,
        /** The Message Template content. */
        public ?string $messageTemplate = null,
        /** The Message Template Subject. */
        public ?string $subject = null
    ) {}
}
