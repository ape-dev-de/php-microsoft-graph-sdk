<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocalizedNotificationMessage
 */
class LocalizedNotificationMessage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message. */
    public ?bool $isDefault = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The Locale for which this message is destined. */
    public ?string $locale = null;

    /** The Message Template content. */
    public ?string $messageTemplate = null;

    /** The Message Template Subject. */
    public ?string $subject = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = is_bool($data['isDefault']) ? $data['isDefault'] : (bool)$data['isDefault'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
        if (isset($data['messageTemplate'])) {
            $this->messageTemplate = $data['messageTemplate'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
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
