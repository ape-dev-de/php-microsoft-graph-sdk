<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailSearchFolder
 */
class MailSearchFolder
{
    /**
     * The OData query to filter the messages.
     */
    private ?string $filterQuery;

    /**
     * Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
     */
    private ?bool $includeNestedFolders;

    /**
     * Indicates whether a search folder is editable using REST APIs.
     */
    private ?bool $isSupported;

    /**
     * The mailbox folders that should be mined.
     */
    private ?string $sourceFolderIds;

    public function getFilterQuery(): ?string
    {
        return $this->filterQuery;
    }

    public function setFilterQuery(?string $filterQuery): self
    {
        $this->filterQuery = $filterQuery;
        return $this;
    }

    public function getIncludeNestedFolders(): ?bool
    {
        return $this->includeNestedFolders;
    }

    public function setIncludeNestedFolders(?bool $includeNestedFolders): self
    {
        $this->includeNestedFolders = $includeNestedFolders;
        return $this;
    }

    public function getIsSupported(): ?bool
    {
        return $this->isSupported;
    }

    public function setIsSupported(?bool $isSupported): self
    {
        $this->isSupported = $isSupported;
        return $this;
    }

    public function getSourceFolderIds(): ?string
    {
        return $this->sourceFolderIds;
    }

    public function setSourceFolderIds(?string $sourceFolderIds): self
    {
        $this->sourceFolderIds = $sourceFolderIds;
        return $this;
    }

}
