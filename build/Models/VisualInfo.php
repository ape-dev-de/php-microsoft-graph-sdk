<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VisualInfo
 */
class VisualInfo
{
    /**
     * Optional. JSON object used to represent an icon which represents the application used to generate the activity
     */
    private ?string $attribution;

    /**
     * Optional. Background color used to render the activity in the UI - brand color for the application source of the activity. Must be a valid hex color
     */
    private ?string $backgroundColor;

    /**
     * Optional. Custom piece of data - JSON object used to provide custom content to render the activity in the Windows Shell UI
     */
    private ?string $content;

    /**
     * Optional. Longer text description of the user''s unique activity (example: document name, first sentence, and/or metadata)
     */
    private ?string $description;

    /**
     * Required. Short text description of the user''s unique activity (for example, document name in cases where an activity refers to document creation)
     */
    private ?string $displayText;


    public function getAttribution(): ?string
    {
        return $this->attribution;
    }

    public function setAttribution(?string $attribution): self
    {
        $this->attribution = $attribution;
        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayText(): ?string
    {
        return $this->displayText;
    }

    public function setDisplayText(?string $displayText): self
    {
        $this->displayText = $displayText;
        return $this;
    }

}
