<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotebookLinks
 */
class NotebookLinks
{
    /**
     * Opens the notebook in the OneNote native client if it's installed.
     */
    private ?string $oneNoteClientUrl;

    /**
     * Opens the notebook in OneNote on the web.
     */
    private ?string $oneNoteWebUrl;

    public function getOneNoteClientUrl(): ?string
    {
        return $this->oneNoteClientUrl;
    }

    public function setOneNoteClientUrl(?string $oneNoteClientUrl): self
    {
        $this->oneNoteClientUrl = $oneNoteClientUrl;
        return $this;
    }

    public function getOneNoteWebUrl(): ?string
    {
        return $this->oneNoteWebUrl;
    }

    public function setOneNoteWebUrl(?string $oneNoteWebUrl): self
    {
        $this->oneNoteWebUrl = $oneNoteWebUrl;
        return $this;
    }

}
