<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarPermission
 */
class CalendarPermission
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
     * @var CalendarRoleType[]
     */
    public array $allowedRoles = [];

    /** 
     * Represents a share recipient or delegate who has access to the calendar. For the 'My Organization' share recipient, the address property is null. Read-only.
     * @var EmailAddress|\stdClass|null
     */
    public EmailAddress|\stdClass|null $emailAddress = null;

    /** True if the user in context (recipient or delegate) is inside the same organization as the calendar owner. */
    public ?bool $isInsideOrganization = null;

    /** True if the user can be removed from the list of recipients or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You can't remove 'My organization' as a share recipient to a calendar. */
    public ?bool $isRemovable = null;

    /** 
     * Current permission level of the calendar share recipient or delegate.
     * @var CalendarRoleType|\stdClass|null
     */
    public CalendarRoleType|\stdClass|null $role = null;


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
        if (isset($data['allowedRoles'])) {
            $this->allowedRoles = $data['allowedRoles'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = is_array($data['emailAddress']) ? new EmailAddress($data['emailAddress']) : $data['emailAddress'];
        }
        if (isset($data['isInsideOrganization'])) {
            $this->isInsideOrganization = is_bool($data['isInsideOrganization']) ? $data['isInsideOrganization'] : (bool)$data['isInsideOrganization'];
        }
        if (isset($data['isRemovable'])) {
            $this->isRemovable = is_bool($data['isRemovable']) ? $data['isRemovable'] : (bool)$data['isRemovable'];
        }
        if (isset($data['role'])) {
            $this->role = is_array($data['role']) ? new CalendarRoleType($data['role']) : $data['role'];
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
