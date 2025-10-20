<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DayNote
 */
class DayNote
{
    /**
     * The date of the day note.
     */
    private ?\DateTimeInterface $dayNoteDate;

    /**
     * The draft version of this day note that is viewable by managers. Only contentType text is supported.
     */
    private ?string $draftDayNote;

    /**
     * The shared version of this day note that is viewable by both employees and managers. Only contentType text is supported.
     */
    private ?string $sharedDayNote;

    public function getDayNoteDate(): ?\DateTimeInterface
    {
        return $this->dayNoteDate;
    }

    public function setDayNoteDate(?\DateTimeInterface $dayNoteDate): self
    {
        $this->dayNoteDate = $dayNoteDate;
        return $this;
    }

    public function getDraftDayNote(): ?string
    {
        return $this->draftDayNote;
    }

    public function setDraftDayNote(?string $draftDayNote): self
    {
        $this->draftDayNote = $draftDayNote;
        return $this;
    }

    public function getSharedDayNote(): ?string
    {
        return $this->sharedDayNote;
    }

    public function setSharedDayNote(?string $sharedDayNote): self
    {
        $this->sharedDayNote = $sharedDayNote;
        return $this;
    }

}
