<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Calendar
 */
class Calendar
{
    /**
     * Represent the online meeting service providers that can be used to create online meetings in this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     */
    private array $allowedOnlineMeetingProviders = [];

    /**
     * true if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who shared a calendar and granted write access.
     */
    private ?bool $canEdit;

    /**
     * true if the user has permission to share the calendar, false otherwise. Only the user who created the calendar can share it.
     */
    private ?bool $canShare;

    /**
     * If true, the user can read calendar items that have been marked private, false otherwise.
     */
    private ?bool $canViewPrivateItems;

    /**
     * Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     */
    private ?string $changeKey;

    /**
     * Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: auto, lightBlue, lightGreen, lightOrange, lightGray, lightYellow, lightTeal, lightPink, lightBrown, lightRed, maxColor.
     */
    private ?string $color;

    /**
     * The default online meeting provider for meetings sent from this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     */
    private ?string $defaultOnlineMeetingProvider;

    /**
     * The calendar color, expressed in a hex color code of three hexadecimal values, each ranging from 00 to FF and representing the red, green, or blue components of the color in the RGB color space. If the user has never explicitly set a color for the calendar, this property is empty. Read-only.
     */
    private ?string $hexColor;

    /**
     * true if this is the default calendar where new events are created by default, false otherwise.
     */
    private ?bool $isDefaultCalendar;

    /**
     * Indicates whether this user calendar can be deleted from the user mailbox.
     */
    private ?bool $isRemovable;

    /**
     * Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
     */
    private ?bool $isTallyingResponses;

    /**
     * The calendar name.
     */
    private ?string $name;

    /**
     * If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user.
     */
    private ?string $owner;

    /**
     * The permissions of the users with whom the calendar is shared.
     */
    private array $calendarPermissions = [];

    /**
     * The calendar view for the calendar. Navigation property. Read-only.
     */
    private array $calendarView = [];

    /**
     * The events in the calendar. Navigation property. Read-only.
     */
    private array $events = [];

    /**
     * The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
     */
    private array $multiValueExtendedProperties = [];

    /**
     * The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
     * @var string[]
     */
    private array $singleValueExtendedProperties = [];


    public function getAllowedOnlineMeetingProviders(): array
    {
        return $this->allowedOnlineMeetingProviders;
    }

    public function setAllowedOnlineMeetingProviders(array $allowedOnlineMeetingProviders): self
    {
        $this->allowedOnlineMeetingProviders = $allowedOnlineMeetingProviders;
        return $this;
    }

    public function getCanEdit(): ?bool
    {
        return $this->canEdit;
    }

    public function setCanEdit(?bool $canEdit): self
    {
        $this->canEdit = $canEdit;
        return $this;
    }

    public function getCanShare(): ?bool
    {
        return $this->canShare;
    }

    public function setCanShare(?bool $canShare): self
    {
        $this->canShare = $canShare;
        return $this;
    }

    public function getCanViewPrivateItems(): ?bool
    {
        return $this->canViewPrivateItems;
    }

    public function setCanViewPrivateItems(?bool $canViewPrivateItems): self
    {
        $this->canViewPrivateItems = $canViewPrivateItems;
        return $this;
    }

    public function getChangeKey(): ?string
    {
        return $this->changeKey;
    }

    public function setChangeKey(?string $changeKey): self
    {
        $this->changeKey = $changeKey;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getDefaultOnlineMeetingProvider(): ?string
    {
        return $this->defaultOnlineMeetingProvider;
    }

    public function setDefaultOnlineMeetingProvider(?string $defaultOnlineMeetingProvider): self
    {
        $this->defaultOnlineMeetingProvider = $defaultOnlineMeetingProvider;
        return $this;
    }

    public function getHexColor(): ?string
    {
        return $this->hexColor;
    }

    public function setHexColor(?string $hexColor): self
    {
        $this->hexColor = $hexColor;
        return $this;
    }

    public function getIsDefaultCalendar(): ?bool
    {
        return $this->isDefaultCalendar;
    }

    public function setIsDefaultCalendar(?bool $isDefaultCalendar): self
    {
        $this->isDefaultCalendar = $isDefaultCalendar;
        return $this;
    }

    public function getIsRemovable(): ?bool
    {
        return $this->isRemovable;
    }

    public function setIsRemovable(?bool $isRemovable): self
    {
        $this->isRemovable = $isRemovable;
        return $this;
    }

    public function getIsTallyingResponses(): ?bool
    {
        return $this->isTallyingResponses;
    }

    public function setIsTallyingResponses(?bool $isTallyingResponses): self
    {
        $this->isTallyingResponses = $isTallyingResponses;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;
        return $this;
    }

    public function getCalendarPermissions(): array
    {
        return $this->calendarPermissions;
    }

    public function setCalendarPermissions(array $calendarPermissions): self
    {
        $this->calendarPermissions = $calendarPermissions;
        return $this;
    }

    public function getCalendarView(): array
    {
        return $this->calendarView;
    }

    public function setCalendarView(array $calendarView): self
    {
        $this->calendarView = $calendarView;
        return $this;
    }

    public function getEvents(): array
    {
        return $this->events;
    }

    public function setEvents(array $events): self
    {
        $this->events = $events;
        return $this;
    }

    public function getMultiValueExtendedProperties(): array
    {
        return $this->multiValueExtendedProperties;
    }

    public function setMultiValueExtendedProperties(array $multiValueExtendedProperties): self
    {
        $this->multiValueExtendedProperties = $multiValueExtendedProperties;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSingleValueExtendedProperties(): array
    {
        return $this->singleValueExtendedProperties;
    }

    /**
     * @param string[] $singleValueExtendedProperties
     */
    public function setSingleValueExtendedProperties(array $singleValueExtendedProperties): self
    {
        $this->singleValueExtendedProperties = $singleValueExtendedProperties;
        return $this;
    }

}
