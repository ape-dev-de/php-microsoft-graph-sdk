<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFileProperties
 */
class AgreementFileProperties
{
    /**
     * The date time representing when the file was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
     */
    private ?string $displayName;

    /**
     * Data that represents the terms of use PDF document. Read-only.
     */
    private ?string $fileData;

    /**
     * Name of the agreement file (for example, TOU.pdf). Read-only.
     */
    private ?string $fileName;

    /**
     * If none of the languages matches the client preference, indicates whether this is the default agreement file. If none of the files are marked as default, the first one is treated as the default. Read-only.
     */
    private ?bool $isDefault;

    /**
     * Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
     */
    private ?bool $isMajorVersion;

    /**
     * The language of the agreement file in the format ''languagecode2-country/regioncode2''. ''languagecode2'' is a lowercase two-letter code derived from ISO 639-1, while ''country/regioncode2'' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
     */
    private ?string $language;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getFileData(): ?string
    {
        return $this->fileData;
    }

    public function setFileData(?string $fileData): self
    {
        $this->fileData = $fileData;
        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getIsMajorVersion(): ?bool
    {
        return $this->isMajorVersion;
    }

    public function setIsMajorVersion(?bool $isMajorVersion): self
    {
        $this->isMajorVersion = $isMajorVersion;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

}
