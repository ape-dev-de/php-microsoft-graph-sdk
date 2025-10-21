<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListInfo
 */
class ListInfo
{
    /**
     * If true, indicates that content types are enabled for this list.
     */
    private ?bool $contentTypesEnabled;

    /**
     * If true, indicates that the list isn''t normally visible in the SharePoint user experience.
     */
    private ?bool $hidden;

    /**
     * An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
     */
    private ?string $template;


    public function getContentTypesEnabled(): ?bool
    {
        return $this->contentTypesEnabled;
    }

    public function setContentTypesEnabled(?bool $contentTypesEnabled): self
    {
        $this->contentTypesEnabled = $contentTypesEnabled;
        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;
        return $this;
    }

}
