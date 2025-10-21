<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePatchContentCommand
 */
class OnenotePatchContentCommand
{
    /**
     */
    private ?string $action;

    /**
     * A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a ''Commands'' part.
     */
    private ?string $content;

    /**
     * The location to add the supplied content, relative to the target element. The possible values are: after (default) or before.
     */
    private ?string $position;

    /**
     * The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword.
     */
    private ?string $target;


    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;
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

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

}
