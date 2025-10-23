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
     * @var ExternalLink|\stdClass|null
     */
    public mixed $oneNoteClientUrl = null;

    /** 
     * Opens the page in OneNote on the web.
     * @var ExternalLink|\stdClass|null
     */
    public mixed $oneNoteWebUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['oneNoteClientUrl'])) {
            $this->oneNoteClientUrl = $data['oneNoteClientUrl'];
        }
        if (isset($data['oneNoteWebUrl'])) {
            $this->oneNoteWebUrl = $data['oneNoteWebUrl'];
        }
    }
}
