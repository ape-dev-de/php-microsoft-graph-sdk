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
            $this->oneNoteClientUrl = is_array($data['oneNoteClientUrl']) ? new ExternalLink($data['oneNoteClientUrl']) : $data['oneNoteClientUrl'];
        }
        if (isset($data['oneNoteWebUrl'])) {
            $this->oneNoteWebUrl = is_array($data['oneNoteWebUrl']) ? new ExternalLink($data['oneNoteWebUrl']) : $data['oneNoteWebUrl'];
        }
    }
}
