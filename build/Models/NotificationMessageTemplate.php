<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotificationMessageTemplate
 */
class NotificationMessageTemplate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?NotificationTemplateBrandingOptions $brandingOptions = null;

    /** The default locale to fallback onto when the requested locale is not available. */
    public ?string $defaultLocale = null;

    /** Display name for the Notification Message Template. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * List of Scope Tags for this Entity instance.
     * @var string[]
     */
    public array $roleScopeTagIds = [];

    /** 
     * The list of localized messages for this Notification Message Template.
     * @var LocalizedNotificationMessage[]
     */
    public array $localizedNotificationMessages = [];


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
        if (isset($data['brandingOptions'])) {
            $this->brandingOptions = is_string($data['brandingOptions']) ? NotificationTemplateBrandingOptions::tryFrom($data['brandingOptions']) : $data['brandingOptions'];
        }
        if (isset($data['defaultLocale'])) {
            $this->defaultLocale = $data['defaultLocale'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['roleScopeTagIds'])) {
            $this->roleScopeTagIds = $data['roleScopeTagIds'];
        }
        if (isset($data['localizedNotificationMessages'])) {
            $this->localizedNotificationMessages = $data['localizedNotificationMessages'];
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
