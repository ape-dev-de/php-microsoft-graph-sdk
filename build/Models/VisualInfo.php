<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VisualInfo
 */
class VisualInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Optional. JSON object used to represent an icon which represents the application used to generate the activity
     * @var ImageInfo|\stdClass|null
     */
    public ImageInfo|\stdClass|null $attribution = null;

    /** Optional. Background color used to render the activity in the UI - brand color for the application source of the activity. Must be a valid hex color */
    public ?string $backgroundColor = null;

    /** Optional. Custom piece of data - JSON object used to provide custom content to render the activity in the Windows Shell UI */
    public ?string $content = null;

    /** Optional. Longer text description of the user's unique activity (example: document name, first sentence, and/or metadata) */
    public ?string $description = null;

    /** Required. Short text description of the user's unique activity (for example, document name in cases where an activity refers to document creation) */
    public ?string $displayText = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attribution'])) {
            $this->attribution = is_array($data['attribution']) ? new ImageInfo($data['attribution']) : $data['attribution'];
        }
        if (isset($data['backgroundColor'])) {
            $this->backgroundColor = $data['backgroundColor'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayText'])) {
            $this->displayText = $data['displayText'];
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
