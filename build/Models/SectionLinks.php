<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SectionLinks
 */
class SectionLinks
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Opens the section in the OneNote native client if it's installed.
     * @var ExternalLink|\stdClass|null
     */
    public ExternalLink|\stdClass|null $oneNoteClientUrl = null;

    /** 
     * Opens the section in OneNote on the web.
     * @var ExternalLink|\stdClass|null
     */
    public ExternalLink|\stdClass|null $oneNoteWebUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['oneNoteClientUrl'])) {
            $this->oneNoteClientUrl = is_array($data['oneNoteClientUrl']) ? new ExternalLink($data['oneNoteClientUrl']) : $data['oneNoteClientUrl'];
        }
        if (isset($data['oneNoteWebUrl'])) {
            $this->oneNoteWebUrl = is_array($data['oneNoteWebUrl']) ? new ExternalLink($data['oneNoteWebUrl']) : $data['oneNoteWebUrl'];
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
