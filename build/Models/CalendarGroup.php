<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarGroup
 */
class CalendarGroup
{
    /**
     * Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     */
    private ?string $changeKey;

    /**
     * The class identifier. Read-only.
     */
    private ?string $classId;

    /**
     * The group name.
     */
    private ?string $name;

    /**
     * The calendars in the calendar group. Navigation property. Read-only. Nullable.
     * @var string[]
     */
    private array $calendars = [];


    public function getChangeKey(): ?string
    {
        return $this->changeKey;
    }

    public function setChangeKey(?string $changeKey): self
    {
        $this->changeKey = $changeKey;
        return $this;
    }

    public function getClassId(): ?string
    {
        return $this->classId;
    }

    public function setClassId(?string $classId): self
    {
        $this->classId = $classId;
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

    /**
     * @return string[]
     */
    public function getCalendars(): array
    {
        return $this->calendars;
    }

    /**
     * @param string[] $calendars
     */
    public function setCalendars(array $calendars): self
    {
        $this->calendars = $calendars;
        return $this;
    }

}
