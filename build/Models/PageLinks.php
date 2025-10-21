<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PageLinks
 */
class PageLinks
{
    /**
     * Opens the page in the OneNote native client if it's installed.
     */
    private ?string $oneNoteClientUrl;

    /**
     * Opens the page in OneNote on the web.
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
