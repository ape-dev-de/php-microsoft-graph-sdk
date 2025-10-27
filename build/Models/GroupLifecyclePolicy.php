<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupLifecyclePolicy
 */
class GroupLifecyclePolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon. */
    public ?string $alternateNotificationEmails = null;

    /** Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined. */
    public ?float $groupLifetimeInDays = null;

    /** The group type for which the expiration policy applies. Possible values are All, Selected or None. */
    public ?string $managedGroupTypes = null;


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
        if (isset($data['alternateNotificationEmails'])) {
            $this->alternateNotificationEmails = $data['alternateNotificationEmails'];
        }
        if (isset($data['groupLifetimeInDays'])) {
            $this->groupLifetimeInDays = $data['groupLifetimeInDays'];
        }
        if (isset($data['managedGroupTypes'])) {
            $this->managedGroupTypes = $data['managedGroupTypes'];
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
